@extends('layout.main')

@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Tambah Penduduk</h3>
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
                                        @if (Session::has('sukses'))
                                        <div class="alert alert-primary" role="alert">
                                            {{Session::get('sukses')}}
                                        </div>
                                        @endif
                                        <form method="POST" action="{{url('/add-process')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control" name="nama" id="nama" aria-describedby="emailHelp" placeholder="Nama">
                                            </div>
                                            <div class="form-group">
                                                <label for="tempatLahir">Tempat Lahir</label>
                                                <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" placeholder="Tempat Lahir">
                                            </div>
                                            <div class="form-group">
                                                <label for="tglLahir">Tnggal Lahir</label>
                                                <input type="date" name="tglLahir" id="tglLahir" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="kelamin">Jenis Kelamin</label>
                                                <select class="form-control" id="kelamin" name="kelamin">
                                                    <option selected hidden>--Pilih--</option>
                                                    <option value="L">Laki-Laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="agama">Agama</label>
                                                <select class="form-control" id="agama" name="agama">
                                                    <option selected hidden>--Pilih--</option>
                                                    <option value="Islam">ISLAM</option>
                                                    <option value="Kristen">KRISTEN</option>
                                                    <option value="Hindu">HINDU</option>
                                                    <option value="Budha">BUDHA</option>
                                                    <option value="Katolik">KATOLIK</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control" id="status" name="status">
                                                    <option selected hidden>--Pilih--</option>
                                                    <option value="Lajang">LAJANG</option>
                                                    <option value="Menikah">MENIKAH</option>
                                                    <option value="Duda">DUDA</option>
                                                    <option value="Janda">JANDA</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="pekerjaan">Pekerjaan</label>
                                                <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan">
                                            </div>
                                            <div class="form-group">
                                                <label for="wargaNegara">Warga Negara</label>
                                                <input type="text" class="form-control" name="wargaNegara" id="wargaNegara" placeholder="Warga Negara">
                                            </div>
                                            <div class="form-group">
                                                <label for="berlaku">Masa Berlaku</label>
                                                <input type="date" name="berlaku" id="berlaku" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="foto">Foto</label>
                                                <input type="file" onchange="previewFotoFile(this)" class="form-control-file" id="foto" name="foto">
                                                <img id="previewfoto" alt="Preview Foto" style="max-width: 100px; margin-top:20px">
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

