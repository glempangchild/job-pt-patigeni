<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Activity;
use App\Exports\EmployeeExport;
use App\Imports\EmployeeImport;
use Illuminate\Support\Facades\DB;
use Excel;
use PDF;

class KtpController extends Controller
{
    public function index (){
        $employees = Employee::all();
        return view ('v_input_penduduk',compact('employees'));
    }
    public function tambah (){
        return view ('v_tambah_penduduk');
    }
    public function addProcess(Request $request){
        $nama = $request->nama;
        $tempatLahir = $request->tempatLahir;
        $tglLahir = $request->tglLahir;
        $kelamin = $request->kelamin;
        $alamat = $request->alamat;
        $agama = $request->agama;
        $status = $request->status;
        $pekerjaan = $request->pekerjaan;
        $wargaNegara = $request->wargaNegara;
        $berlaku = $request->berlaku;
        $foto = $request->file('foto');
        $namaFoto = time().'.'.$foto->extension();
        $foto->move(public_path('images'),$namaFoto);

        $employee = new Employee();
        $employee->nama = $nama;
        $employee->tempat_lahir = $tempatLahir;
        $employee->tgl_lahir = $tglLahir;
        $employee->kelamin = $kelamin;
        $employee->alamat = $alamat;
        $employee->agama = $agama;
        $employee->status = $status;
        $employee->pekerjaan = $pekerjaan;
        $employee->warga_negara = $wargaNegara;
        $employee->masa_berlaku = $berlaku;
        $employee->foto = $namaFoto;
        $employee->created_by = 1;
        $employee->save();

        return back()->with('sukses','Data Berhasil Ditambahkan');
    }

    public function editEmployee($id){
        $employee = Employee::find($id);
        return view('v_edit_penduduk', compact('employee'));
    }

    public function hapusPenduduk($id){
        $employee = Employee::find($id);
        if ($employee->foto != "default.jpg") {
            unlink(public_path('images'). '/' .$employee->foto);
        }
        $employee->delete();
        return back()->with('employe_hapus','Eployee Terhapus');
    }

    public function detailPenduduk($id){
        $employee = Employee::find($id);
        return view('v_detail', compact('employee'));
    }

    public function editProcess(Request $request){
        
        $nama = $request->nama;
        $tempatLahir = $request->tempatLahir;
        $tglLahir = $request->tglLahir;
        $kelamin = $request->kelamin;
        $alamat = $request->alamat;
        $agama = $request->agama;
        $status = $request->status;
        $pekerjaan = $request->pekerjaan;
        $wargaNegara = $request->wargaNegara;
        $berlaku = $request->berlaku;
        $foto = $request->file('foto');
        if ($foto == null && $request->oldFoto == "default.jpg") {
            $namaFoto = $request->oldFoto;
        } else if ($request->oldFoto == "default.jpg" && $foto != null){
            $namaFoto = time().'.'.$foto->extension();
             $foto->move(public_path('images'),$namaFoto);
        } else if ($foto == null){
            $namaFoto = $request->oldFoto;
        } else {
            unlink(public_path('images'). '/' .$request->oldFoto);
            $namaFoto = time().'.'.$foto->extension();
            $foto->move(public_path('images'),$namaFoto);
        }


        $employee = Employee::find($request->id);
        $employee->nama = $nama;
        $employee->tempat_lahir = $tempatLahir;
        $employee->tgl_lahir = $tglLahir;
        $employee->kelamin = $kelamin;
        $employee->alamat = $alamat;
        $employee->agama = $agama;
        $employee->status = $status;
        $employee->pekerjaan = $pekerjaan;
        $employee->warga_negara = $wargaNegara;
        $employee->masa_berlaku = $berlaku;
        $employee->foto = $namaFoto;
        $employee->created_by = 1;

        $employee->save();

        return back()->with('editSucess','Data Edited');
    }
    public function exportCSV(){
        $activity = new Activity();
        $activity->user_id = auth()->user()->id;
        $activity->keterangan = "Export Data CSV";
        $activity->save();
        return Excel::download(new EmployeeExport,'penduduk.csv');
    }
    public function exportPDF(){
        $employees = Employee::all();
        $pdf = PDF::loadView('pdf',compact('employees'))->setPaper('a4', 'landscape');
        $activity = new Activity();
        $activity->user_id = auth()->user()->id;
        $activity->keterangan = "Export Data PDF";
        $activity->save();
        return $pdf->download('penduduk.pdf');
    }
    public function importForm(){
        return view('v_importForm');
    }
    public function importProcess(Request $request){
        Excel::import(new EmployeeImport, $request->file('fileCsv'));
        return back()->with('importSucess','Data Imported');
    }
    public function aktivitasUser (){
        $activities = DB::table('activities')
            ->join('users', 'activities.user_id', '=', 'users.id')
            ->select('users.name', 'users.email', 'keterangan','activities.created_at')
            ->get();

        return view('user_activity', compact('activities'));
    }
}
