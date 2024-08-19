<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		<title>Basic PHP</title>
	</head>
	<body class="bg-dark btn-dark">
		<section class="container-fluid" style="height: 100vh;">
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
					        	<a class="nav-link" aria-current="page" href="home">Home</a>
					        </li>
					        <li class="nav-item">
					          	<a class="nav-link" href="home#contact">Contact</a>
					        </li>
				      	</ul>
				    </div>
			    </div>
			  </div>
			</nav>
		<!-- navbar-end -->
			<div class="row">
				<div class="col-8">
					<div class="shadow-lg" id="pengertian"></div>

					<div class="p-5">
						<p class="h3"><b>Apa itu PHP?</b></p>
						<p class="text-wrap">PHP: Hypertext Preprocessor atau hanya PHP saja, adalah bahasa skrip dengan fungsi umum yang terutama digunakan untuk pengembangan web. Bahasa ini awalnya dibuat oleh seorang pemrogram Denmark-Kanada Rasmus Lerdorf pada tahun 1994. Implementasi referensi PHP sekarang diproduksi oleh The PHP Group.</p>
					</div>
					<hr class="border shadow-lg" id="sejarah">
					<div class="p-5">
						<p class="h3"><b>Sejarah PHP</b></p>

						<p class="text-wrap">
							Sejarah singkat bahasa pemrograman PHP
							Bahasa Pemograman PHP ditemukan pada tahun 1994 oleh Rasmus Lerdorf versi pertama PHP tidak dirilis ke publik, melainkan digunakan oleh Rasmus Lerdorf untuk melacak siapa saja yang melihat resume onlinenya pada homepage websitenya.
						</p>
					</div>
					<hr class="border shadow-lg" id="fungsi">
					<div class="p-5">
						<p class="h3"><b>Fungsi PHP?</b></p>
						<p class="text-wrap">Salah satu fungsi utama PHP adalah untuk membangun situs web yang dinamis. Dengan PHP, kamu dapat membuat halaman web yang dapat berinteraksi dengan pengguna, menampilkan konten yang berubah secara real-time, dan mengakses basis data untuk mengambil atau menyimpan informasi.
						</p>
					</div>

					<hr class="border shadow-lg" id="code">

					<div class="p-5">
						<div class="h3"><b>Kode PHP</b></div>
						<div class="text-wrap border p-3" style="border-radius: 10px;">
							&lt;php ?<br>
							echo "hello world";<br>
							?&gt;

						</div>
					</div>
					
				</div>

				<div class="col-4 shadow">
					<div class="row sticky-top" style="top: 10vh;">
						<div class="col-12 p-5">
							
							<ul class="list-group">
								<p class="h4 text-center">Belajar Dasar-Dasar PHP</p>

								<li class="list-group-item text-decoration-none" aria-current="true">
									<a href="#pengertian">Pengertian</a>
								</li>
								<li class="list-group-item">
									<a href="#sejarah">Sejarah</a>
								</li>
								<li class="list-group-item">
									<a href="#fungsi">Fungsi</a>
								</li>
							</ul>
						</div>
					</div>	
				</div>
			</div>
		</section>
		<footer>
			
		</footer>
		<!-- Optional JavaScript; choose one of the two! -->

		<!-- Option 1: Bootstrap Bundle with Popper -->
		<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

		<!-- Option 2: Separate Popper and Bootstrap JS -->
		
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
		
	</body>
</html>