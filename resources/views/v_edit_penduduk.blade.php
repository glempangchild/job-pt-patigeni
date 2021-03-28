@extends('layout.main')

@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Edit Penduduk</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="card">
									<div class="card-header">
										<div class="pull-left"></div>
										<div class="pull-right">
											<a href="{{url('/penduduk')}}" class="btn btn-warning btn-sm">Kembali</a>
										</div>
									</div>
									<br><br>
									<div class="card-body" style="width: 50%">
                                        @if (Session::has('editSucess'))
                                        <div class="alert alert-success" role="alert">
                                            {{Session::get('editSucess')}}
                                        </div>
                                        @endif
                                        <form method="POST" action="{{url('edit-penduduk')}}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$employee->id}}">
                                            <input type="hidden" name="oldFoto" value="{{$employee->foto}}">
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" value="{{ old('nama', $employee->nama) }}" class="form-control" name="nama" id="nama" aria-describedby="emailHelp" placeholder="Nama">
                                            </div>
                                            <div class="form-group">
                                                <label for="tempatLahir">Tempat Lahir</label>
                                                <input type="text" value="{{ old('tempatLahir', $employee->tempat_lahir) }}" class="form-control" id="tempatLahir" name="tempatLahir" placeholder="Tempat Lahir">
                                            </div>
                                            <div class="form-group">
                                                <label for="tglLahir">Tnggal Lahir</label>
                                                <input type="date" value="{{ old('tglLahir', $employee->tgl_lahir) }}" name="tglLahir" id="tglLahir" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="kelamin">Jenis Kelamin</label>
                                                <select class="form-control" id="kelamin" name="kelamin">
                                                    <option selected hidden>--Pilih--</option>
                                                    <option value="L" {{ old('kelamin', $employee->kelamin) == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                                                    <option value="P"{{ old('kelamin', $employee->kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <textarea class="form-control" id="alamat" name="alamat" rows="3">{{$employee->alamat}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="agama">Agama</label>
                                                <select class="form-control" id="agama" name="agama">
                                                    <option selected hidden>--Pilih--</option>
                                                    <option value="Islam"{{ old('agama', $employee->agama) == 'Islam' ? 'selected' : '' }}>ISLAM</option>
                                                    <option value="Kristen"{{ old('agama', $employee->agama) == 'Kristen' ? 'selected' : '' }}>KRISTEN</option>
                                                    <option value="Hindu"{{ old('agama', $employee->agama) == 'Hindu' ? 'selected' : '' }}>HINDU</option>
                                                    <option value="Budha"{{ old('agama', $employee->agama) == 'Budha' ? 'selected' : '' }}>BUDHA</option>
                                                    <option value="Katolik"{{ old('agama', $employee->agama) == 'Katolik' ? 'selected' : '' }}>KATOLIK</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control" id="status" name="status">
                                                    <option selected hidden>--Pilih--</option>
                                                    <option value="Lajang"{{ old('status', $employee->status) == 'Lajang' ? 'selected' : '' }}>LAJANG</option>
                                                    <option value="Menikah"{{ old('status', $employee->status) == 'Menikah' ? 'selected' : '' }}>MENIKAH</option>
                                                    <option value="Duda"{{ old('status', $employee->status) == 'Duda' ? 'selected' : '' }}>DUDA</option>
                                                    <option value="Janda"{{ old('status', $employee->status) == 'Janda' ? 'selected' : '' }}>JANDA</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="pekerjaan">Pekerjaan</label>
                                                <input type="text" value="{{ old('pekerjaan', $employee->pekerjaan) }}" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan">
                                            </div>
                                            <div class="form-group">
                                                <label for="wargaNegara">Warga Negara</label>
                                                <input type="text" value="{{ old('wargaNegara', $employee->warga_negara) }}" class="form-control" name="wargaNegara" id="wargaNegara" placeholder="Warga Negara">
                                            </div>
                                            <div class="form-group">
                                                <label for="berlaku">Masa Berlaku</label>
                                                <input type="date" value="{{ old('berlaku', $employee->masa_berlaku) }}" name="berlaku" id="berlaku" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="foto">Foto</label>
                                                <input type="file" onchange="previewFotoFile(this)" class="form-control-file" id="foto" name="foto">
                                                <img id="previewfoto" alt="Preview Foto" src="{{asset('images')}}/{{$employee->foto}}" style="max-width: 100px; margin-top:20px">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
@endsection
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    function previewFotoFile(input) {
        var file = $("input[type=file]").get(0).files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function () {
                $('#previewfoto').attr("src", reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
    function fnCalculateAge(){
     var userDateinput = document.getElementById("tglLahir").value;  
	 console.log(userDateinput);
	 
     // convert user input value into date object
	 var birthDate = new Date(userDateinput);
	  console.log(" birthDate"+ birthDate);
	 
	 // get difference from current date;
	 var difference=Date.now() - birthDate.getTime(); 
	 	 
	 var  ageDate = new Date(difference); 
	 var calculatedAge=   Math.abs(ageDate.getUTCFullYear() - 1970);
	 alert(calculatedAge);
    }
    $(document).ready(function () {
        $('#tglLahir').change(function(){
            fnCalculateAge();
        });
    });
</script>

