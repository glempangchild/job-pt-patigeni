@extends('layout.main')

@section('content')
<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="{{asset('images')}}/{{$employee->foto}}" style="max-width: 100px;" class="img-circle" alt="Avatar">
										<h3 class="name">{{$employee->nama}}</h3>
										<span class="online-status status-available">Available</span>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Detail Penduduk</h4>
										<ul class="list-unstyled list-justify">
											<li>Tanggal Lahir <span>{{$employee->tgl_lahir}}</span></li>
											<li>Tempat Lahir <span>{{$employee->tempat_lahir}}</span></li>
											<li>Jenis Kelamin <span>{{$employee->kelamin}}</span></li>
											<li>Alamat <span>{{$employee->alamat}}</span></li>
											<li>Agama <span>{{$employee->agama}}</span></li>
											<li>Status <span>{{$employee->status}}</span></li>
											<li>Pekerjaan <span>{{$employee->pekerjaan}}</span></li>
											<li>Warga Negara <span>{{$employee->warga_negara}}</span></li>
											<li>Masa Berlaku <span>{{$employee->masa_berlaku}}</span></li>
										</ul>
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
