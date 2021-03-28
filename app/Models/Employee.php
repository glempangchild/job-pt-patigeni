<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
    use HasFactory;
    protected $table = "employees";

    protected $fillable = ['nama','tempat_lahir','tgl_lahir','kelamin','alamat','agama','status','pekerjaan','warga_negara','masa_berlaku','foto','created_by'];

    public static function getEmployee(){
        $records = DB::table('employees')->select('id','nama','tempat_lahir','tgl_lahir','kelamin','alamat','agama','status','pekerjaan','warga_negara','masa_berlaku','foto','created_by')->get()->toArray();
        return $records;
    }
}
