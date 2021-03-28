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
											@if (auth()->user()->level == 1)
											<a href="{{url('/tambah-penduduk')}}" class="btn btn-primary btn-sm">Tambah Penduduk</a>
											<a href="{{url('/import-form')}}" class="btn btn-warning btn-sm">Import CSV</a>
											@endif
											<a href="{{url('/export-csv')}}" class="btn btn-success btn-sm">Export CSV</a>
											<a href="{{url('/export-pdf')}}" class="btn btn-success btn-sm">Export PDF</a>
										</div>
									</div>
									<br><br>
									<div class="card-body">
										@if (Session::has('employe_hapus'))
                                        <div class="alert alert-primary" role="alert">
                                            {{Session::get('employe_hapus')}}
                                        </div>
                                        @endif
										<table class="table table-bordered table-responsive">
											<thead>
												<tr class="d-flex">
													<th>Nama</th>
													<th>Alamat</th>
													<th>Pekerjaan</th>
													<th>Foto</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											@foreach ($employees as $employee)
											<tr class="d-flex">
												<td>{{$employee->nama}}</td>
												<td>{{$employee->alamat}}</td>
												<td>{{$employee->pekerjaan}}</td>
												<td><img src="{{asset('images')}}/{{$employee->foto}}" style="max-width: 40px"></td>
												<td class="text-center">
												<a href="/detail-penduduk/{{$employee->id}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
												@if (auth()->user()->level == 1)
												<a href="/delete-penduduk/{{$employee->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
												<a href="/edit-penduduk/{{$employee->id}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
												@endif
                                    			</td>
                                   			 </tr>										
											@endforeach
											</tbody>
										</table>
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
