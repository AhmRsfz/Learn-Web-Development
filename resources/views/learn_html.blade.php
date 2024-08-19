<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		<title>Basic Html</title>
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
						<p class="h3"><b>Apa itu HTML?</b></p>
						<p class="text-wrap">HTML adalah singkatan dari HyperText Markup Language. HyperText Markup Language adalah bahasa markah standar untuk dokumen yang dirancang untuk ditampilkan di peramban internet. Ini dapat dibantu oleh teknologi seperti Cascading Style Sheets dan bahasa skrip lainnya seperti JavaScript, VBScript, dan PHP. </p>
					</div>
					<hr class="border shadow-lg" id="sejarah">
					<div class="p-5">
						<p class="h3"><b>Sejarah HTML</b></p>

						<p class="text-wrap">Sejarah HTML pertama kali dibuat oleh Tim Berners-Lee yang merupakan fisikawan di lembaga penelitian CERN, Swiss. Berners-Lee mempunyai ide atau pemikiran mengenai sistem hypertext berbasis internet. Sekitar tahun 1991, Tim merilis versi HTML pertama yang di dalamnya terdalam sekitar 18 tag.<br><br>

						Untuk sekarang, HTML mengalami beberapa pengembangan dari sisi fitur serta informasi yang disajikan hingga versi terbaru, yaitu HTML5. Setiap tahunnya, bahasa ini mempunyai tingkat popularitas yang cukup tinggi sehingga dijadikan sebagai web standard resmi di dunia pemrograman.<br><br>

						Selanjutnya, HTML juga mengalami tahap perbaikan (maintain) dan dikembangkan oleh World Wide Web Consortium (W3C). Pada tahun 2014, merupakan waktu dimana HTML mengalami upgrade yang cukup signifikan dan terdapat fitur semantic untuk memudahkan pengembang website dalam menyusun kode dan memberitahukan makna dari konten tersebut.
						</p>
					</div>
					<hr class="border shadow-lg" id="fungsi">
					<div class="p-5">
						<p class="h3"><b>Fungsi HTML?</b></p>
						<p class="text-wrap">Fungsi utama penggunaan HTML sendiri adalah membangun tampilan website yang telah menerapkan metode semantik untuk memudahkan setiap pengembang dalam proses development dan maintenance. Kemudian, HTML juga dapat dikolaborasikan dengan penggunaan bahasa CSS (Cascade Style Sheet) serta JavaScript.

						Dimana, peran dari HTML5 berfungsi untuk menyusun kerangka dan struktur halaman website. Kemudian, CSS membantu dalam memberikan tampilan desain meliputi warna, font, outline, dan lain sebagainya. Dan Tugas dari bahasa pemrograman JavaScript adalah memberikan sentuhan interaksi untuk memberikan pengalaman yang berbeda kepada user.
						</p>
					</div>

					<hr class="border shadow-lg" id="code">

					<div class="p-5">
						<div class="h3"><b>Kode html</b></div>
						<div class="text-wrap border p-3" style="border-radius: 10px;">
							&lt;!DOCTYPE html&gt;<br>
							&lt;html&gt;<br>
								&lt;head&gt;<br>
									&lt;title&gt;&lt;/title&gt;<br>
								&lt;/head&gt;<br>
								<br>
								&lt;body&gt;<br>
									&lt;h1&gt;Hello, World&lt;/h1&gt;<br>
								&lt;/body&gt;<br>
							&lt;/html&gt;

						</div>
					</div>
					
				</div>

				<div class="col-4 shadow">
					<div class="row sticky-top" style="top: 10vh;">
						<div class="col-12 p-5">
							
							<ul class="list-group">
								<p class="h4 text-center">Belajar Dasar Dasar HTML</p>

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