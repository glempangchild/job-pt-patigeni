@extends('layout.main')

@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Aktivitas User</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="card">
									<div class="card-header">
										<div class="pull-left"></div>
										<div class="pull-right">
											
										</div>
									</div>
									<br><br>
									<div class="card-body">
										<table class="table table-bordered table-responsive">
											<thead>
												<tr class="d-flex">
													<th>Nama User</th>
													<th>Email</th>
													<th>Keterangan</th>
													<th>Waktu Eksekusi</th>
												</tr>
											</thead>
											<tbody>
											@foreach ($activities as $activity)
											<tr class="d-flex">
												<td>{{$activity->name}}</td>
												<td>{{$activity->email}}</td>
												<td>{{$activity->keterangan}}</td>
												<td>{{$activity->created_at}}</td>
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
