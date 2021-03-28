@extends('layout.main')

@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Data Penduduk</h3>
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
									<div class="card-body">
										@if (Session::has('importSucess'))
                                        <div class="alert alert-primary" role="alert">
                                            {{Session::get('importSucess')}}
                                        </div>
                                        @endif
										<form action="{{url('/import')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="file">Pilih File CSV</label>
                                                <input class="form-control" type="file" name="fileCsv" id="fileCsv">
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
