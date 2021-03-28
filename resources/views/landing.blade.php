<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MY-WEB-CV</title>
	<link rel="stylesheet" href="{{asset('template-profile/bootstrap-4.1.3-dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('template-profile/style.css')}}">
	<link rel="stylesheet" href="{{asset('template-profile/css/fixed.css')}}">
</head>

<body data-spy="scroll" data-target="#navbarResponsive">
<!-- Home Section -->
	<div id="home">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<a class="navbar-brand" href="#"><img src="img/logo-2.png" alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#social-media-sticky">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('register') }}">Register</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('login') }}">Login</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="landing">
			<div class="home-wrap">
				<div class="home-inner">

				</div>
			</div>
		</div>
		<div class="caption text-center">
			<h1>Dedy Setiawan</h1>
			<h3><span id="typed"></span></h3> 
			<a class="btn btn-outline-light btn-lg" href="#social-media-sticky">Get Started</a>
		</div>
	</div>
<!-- End Home Section -->
<div id="social-media-sticky" class="aboutme">
	<!-- Start Social Jumbotron -->
	<div class="jumbotron sticky-top">
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="d-none d-xl-block col-xl-6 pt-1">
					<h3>Conect With Me</h3>
				</div>
				<div class="col-sm-10 col-md-8 col-lg-7 col-xl-6 pt-1">
					<ul class="social">
						<li><a href="#" target="_blank"><i class="fab fa-github" style="color: black;" ></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-youtube" style="color: #c4302b;" ></i></a></li>
						<li><a href="https://www.linkedin.com/in/dedy-setiawan-50a547186/" target="_blank"><i class="fab fa-linkedin" style="color: #0e76a8;"></i></a></li>
						<li><a href="berkas/Resume.pdf" target="_blank"><i class="fa fa-file-pdf" style="color:black;"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- End Social Jumbotron -->
<!-- <div class="border-top border-dark w-100 mx-auto my-3"></div> -->
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-6">
				<img src="{{asset('template-profile/img/profil-2.jpg')}}" alt="" class="img-thumbnail" width="70%">
			</div>
			<div class="col-lg-6 mb-5 my-lg-auto">
				<h1 class="font-weight-bold mb-3">Short Of Me</h1>
				<p class="mb-4">I'm a person who always plant positive attitude and continuous improvement, because positive attitude make me calm when solving the problem and learning something new, then continuous improvement is for facing new system, culture, and technology when new era comes.</p>
				
			</div>
		</div>
	</div> 
</div> 
<!-- End Social Media Sticky -->

<!-- Start Features Section -->
<div id="features" class="offset">

	<!-- Start Jumbotron -->
	<div class="jumbotron">
		<div class="narrow text-center">
			<div class="col-12">
				<h3 class="heading">Education & Work Experience</h3>
				<div class="heading-underline"></div>
			</div>
			<div class="row text-center">
				<div class="col-md-4">
					<div class="feature">
						<i class="fas fa-university" data-fa-transform="shrink-3 up-5"></i>
						<h3>study</h3>
						<p>2012-2016 : Bachelor of Computer Science At STMIK AMIKOM PURWOKERTO</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="feature">
						<i class="fas fa-briefcase" data-fa-transform="shrink-4 up-5"></i>
						<h3>work experience</h3>
						<p>2016-2019: As Admin Project For General Affair Department At PT. Golden Energy Mines </p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="feature">
						<i class="fas fa-language" data-fa-transform="shrink-4.5 up-4.5"></i>
						<h3>language course</h3>
						<p>2011-2013: English Conversation Program (CV Program) At LBPP LIA Purwokerto</p>
						<p>2018: TOEFL Preparation Program At LBPP LIA Cikokol Tangerang</p>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Jumbotron -->
</div>
<!-- End Features Section -->
<!-- Start Resources Section -->
<div id="resources" class="offset">
	<div class="fixed-background">
	<div class="row dark text-center">
		<div class="col-12">
			<h3 class="heading">PROGRAMMING CODE</h3>
			<div class="heading-underline"></div>
		</div>
	
		<div class="col-md-3">
			<h3>HTML</h3>
			<div class="feature">
				<i class="fas fa-code fa-3x"></i>
			</div>
			
		</div>
	
		<div class="col-md-3">
			<h3>PHP</h3>
			<div class="feature">
				<i class="fab fa-php fa-3x"></i>
			</div>
			
		</div>
	
		<div class="col-md-3">
			<h3>CSS</h3>
			<div class="feature">
				<i class="fab fa-css3 fa-3x"></i>
			</div>
			
		</div>
		<div class="col-md-3">
			<h3>MySQL</h3>
			<div class="feature">
				<i class="fas fa-database fa-3x"></i>
			</div>
			
		</div>
	</div>
	<div class="fixed-wrap">
		<div class="fixed">
	
		</div>
	</div>
	</div>
	</div>
	<!-- End Resources Section -->

	<!-- Customers Feedback -->
	<section class="happyclients">
		<div class="container headings text-center">
			<h1 class="text-center font-weight-bold">software & framework</h1>
			<p class="text-capitalize pt-1">I Usually Use</p>
		</div>
		<div id="demo" class="carousel slide" data-ride="carousel">       
			<ul class="carousel-indicators">
			  <li data-target="#demo" data-slide-to="0" class="active"></li>
			  <li data-target="#demo" data-slide-to="1"></li>
			  <li data-target="#demo" data-slide-to="2"></li>
			</ul>			
			<div class="carousel-inner container">
			  <div class="carousel-item active">
			   <div class="row">
				   <div class="col-lg-4 col-md-4 col-12">
					<div class="box">
						<a href="#"><img src="{{asset('template-profile/img/slide/vsc.png')}}" alt="..." class="img-thumbnail"></a>
						<p class="m-4"></p>
						<h1>Software</h1>
						<h2>For Code Editing</h2>
					</div>
				   </div>
				   <div class="col-lg-4 col-md-4 col-12">
					<div class="box">
						<a href="#"><img src="{{asset('template-profile/img/slide/pr.jpg')}}" alt="..." class="img-thumbnail"></a>
						<p class="m-4"></p>
						<h1>Software</h1>
						<h2>For Video Editing</h2>
					</div>
				   </div>
				   <div class="col-lg-4 col-md-4 col-12">
					<div class="box">
						<a href="#"><img src="{{asset('template-profile/img/slide/office.png')}}" alt="..." class="img-thumbnail"></a>
						<p class="m-4"></p>
						<h1>Software</h1>
						<h2>For Administrative Work</h2>
					</div>
				   </div>
			   </div>
			  </div>
			  <div class="carousel-item">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
					 <div class="box">
						 <a href="#"><img src="{{('template-profile/img/slide/bootstrap.png')}}" alt="..." class="img-thumbnail"></a>
						 <p class="m-4"></p>
						 <h1>Framework</h1>
						 <h2>Web Frontend Work</h2>
					 </div>
					</div>
					<div class="col-lg-4 col-md-4 col-12">
					 <div class="box">
						 <a href="#"><img src="{{('template-profile/img/slide/ci.png')}}" alt="..." class="img-thumbnail"></a>
						 <p class="m-4"></p>
						 <h1>Framework</h1>
						 <h2>Web Backend Work</h2>
					 </div>
					</div>
					<div class="col-lg-4 col-md-4 col-12">
					 <div class="box">
						 <a href="#"><img src="{{asset('template-profile/img/slide/laravel7_0.jpg')}}" alt="..." class="img-thumbnail"></a>
						 <p class="m-4"></p>
						 <h1>Framework</h1>
						 <h2>Web Backend Work</h2>
					 </div>
					</div>
 
				</div>
			   </div>
			</div>
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
			  <span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
			  <span class="carousel-control-next-icon"></span>
			</a>
		  </div>
	</section>
	<!-- End Customers Feedback -->

	 <!-- Offer Section  -->
	 <section class="serviceoffers" id="servicediv">
		<div class="container headings text-center">
			<h1 class="text-center font-weight-bold">HARD SKILLS AND SOFT SKILLS</h1>
			<p class="text-center"></p>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-10 offset-1 offset-lg-0">
					<div class="names my-3">
						<h1>html</h1>
						<div class="progress">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 55%">55%</div>
						  </div>
					</div>

					<div class="names my-3">
						<h1>css</h1>
						<div class="progress">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%">40%</div>
						  </div>
					</div>

					<div class="names my-3">
						<h1>php</h1>
						<div class="progress">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%">40%</div>
						  </div>
					</div>

					<div class="names my-3">
						<h1>js</h1>
						<div class="progress">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 30%">30%</div>
						  </div>
					</div>
					<div class="names my-3">
						<h1>Bootstrap</h1>
						<div class="progress">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 20%">20%</div>
						  </div>
					</div>
					<div class="names my-3">
						<h1>laravel</h1>
						<div class="progress">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 20%">20%</div>
						  </div>
					</div>
					<div class="names my-3">
						<h1>codeigniter</h1>
						<div class="progress">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 20%">20%</div>
						  </div>
					</div>
					<div class="names my-3">
						<h1>Video Editing</h1>
						<div class="progress">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%</div>
						  </div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-10 servicediv">
					<div class="row">
						<div class="col-lg-2 col-2 service-icons">
							<i class="fa-3x fa fa-users" aria-hidden="true"></i>
						</div>
						<div class="col-lg-10 col-10 service-p space">
							<h2>Team Work</h2>
							<p>Able to work in team, and i can adapt easily </p>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-2 col-2 service-icons ">
							<i class="fa-3x fa fa-book-reader" aria-hidden="true"></i>
						</div>
						<div class="col-lg-10 col-10 service-p space">
							<h2>Learning</h2>
							<p>Learning is duty i have to do, i usually go to bookstore when i have troubles, in coding i can spare more times until i understand the algorithm.</p>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-2 col-2 service-icons">
							<i class="fa-3x far fa-comments" aria-hidden="true"></i>
						</div>
						<div class="col-lg-10 col-10 service-p space">
							<h2>Comunication</h2>
							<p>I will be listener when i dont't undertand about the tophic, and i will speak up when i really undertand about the thopic.</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Offer Section  -->

	<!-- Start Footer -->
	<footer>
		<div class="container" id="contact">
			<div class="row justify-content-center text-center text-light">
				<div class="col-md-9">
					<img src="img/logo-2.png" alt="">
					<p>I will be glad if i can collaborate and contribute with your business or company</p>
				</div>

				<div class="col-md-6">
					<hr class="bg-light">
					<h5>Contact Info</h5>
					<hr class="bg-light">
					<p><a href="tel:+6281383335900">0813-8333-5900</a></p>
					<p><a href="mailto:+glempangchild@gmail.com">glempangchild@gmail.com</a></p>
				</div>

				<div class="col-md-6">
					<hr class="bg-light">
					<h5>Address</h5>
					<hr class="bg-light">
					<p>My Origin House: Glempang-Mandiraja-Banjarnegara-Jawa Tengah</p>
					<p>My Boarding House: Tipar Cakung Street, North Jakarta</p>
					
				</div>
			</div>
		</div>
	</footer>
<!-- End Footer -->


<!-- Start Socket -->
	<div class="socket text-light text-center py-4">
		<p><a href="berkas/Surat Lamran.pdf">BIODATA FILE DOWNLOAD</a></p>
	</div>
<!-- End Socket -->

<!--- Script Source Files -->
<script src="{{asset('template-profile/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('template-profile/bootstrap-4.1.3-dist/js/bootstrap.min.js')}}"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
<script src="{{asset('template-profile/vendor/typed/typed.min.js')}}"></script>
<script src="{{asset('template-profile/index.js')}}"></script>
<!--- End of Script Source Files -->

</body>
</html>



