<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>WebTesting</title>

		<!-- link to bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	</head>
	<body style="
				background-image: url('asset/img/changli.jpg');
				background-position: top;
			    background-attachment: fixed;
			    background-position: center;
			    background-repeat: no-repeat;
			    background-size: cover;
			    ">
		<!-- navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow sticky-top">
		  	<div class="container-fluid">
			    <a class="navbar-brand" href="#">BelajarCoding.js</a>

			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    	<span class="navbar-toggler-icon"></span>
			    </button>

			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
				      	<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				        	<li class="nav-item">
				        	<a class="nav-link" aria-current="page" href="#">Home</a>
				        </li>
				        <li class="nav-item">
				          	<a class="nav-link" href="#contact">Contact</a>
				        </li>
			      	</ul>
			    </div>
		    </div>
		  </div>
		</nav>
		<!-- navbar-end -->

		<!-- body -->
		<section class="container-fluid shadow">
			<div class="row pt-5 pb-5">
				<div class="text-light col-lg-6 col-sm-6">
					<div class="p-5">
						<h1 class="h1"><b>Ayo Belajar Coding!</b></h1>
						<div class="text-wrap">Belajar coding lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.</div>
						<a class="btn btn-outline-info mt-3" href="/login">Start</a>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 d-flex justify-content-center">
					<img src="asset/img/github.png" class="img-fluid opacity-75">
				</div>
			</div>
		</section>
		<div class="container-fluid bg-dark btn-dark container-xl container-sm border-black shadow mt-5 mb-5" style="border-radius: 15px;">
			<div class="row p-5">
				<h1 class="h2">Front End</h1>
				<p class="text-wrap">Belajar pemrograman frontend dengan HTML dan CSS</p>

				<a class="col-lg-4 col-sm-3 p-2 text-decoration-none" href="/learn_html">
					<div class="bg-dark btn-dark shadow p-3" style="border-radius: 10px;">
						<img src="asset/img/html_logo.png" class="img-fluid w-25">
						<h1 class="h5"><b>HTML</b></h1>
						<div class="text-wrap">Belajar dasar-dasar HTML</div>
					</div>
				</a>

			</div>

			<hr class="border shadow">

			<div class="row p-5">
				<h1 class="h2">Back End</h1>
				<p class="text-wrap">Belajar pemrograman backend dengan PHP dkk</p>

				<a class="col-lg-4 col-sm-3 p-2 text-decoration-none" href="learn_php">
					<div class="bg-dark btn-dark shadow p-3" style="border-radius: 10px;">
						<img src="asset/img/html_logo.png" class="img-fluid w-25">
						<h1 class="h5"><b>PHP</b></h1>
						<div class="text-wrap">Belajar dasar-dasar PHP</div>
					</div>
				</a>
			</div>
		</div>
		<!-- body-end -->

		<!-- footer -->
		<footer class="container-fluid bg-dark btn-dark shadow pt-5 pb-5" id="contact">
				<div class="row">
					<div class="container col-lg-12 col-sm-12">
						<div class="h1 text-center mb-5"><b>Contact</b></div>
						<div class="container text-wrap text-center">
						<hr class="border shadow-lg">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
					</div>
				</div>
		</footer>
		<!-- footer-end -->




		<!-- script -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

	</body>
</html>