<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		<!-- link to bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
	<body>
		<section class="container-fluid d-grid align-content-center justify-content-center" style="
			height: 100vh;
			background-image: url('asset/img/changli2.jpg');
/*			background-position: bottom;*/
		    background-attachment: fixed;
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;
		">
			<form class="bg-dark text-center p-3" action="home" style="
				border-radius: 10px 10px 10px 10px;
				box-shadow: 0px 0px 10px 10px;
				opacity: 90%;
			">
				<p class="h3 text-light"><b>Welcome back!</b></p>
				<input type="text" name="username" placeholder="Username" class="form-control mb-3 mt-5">
				<input type="password" name="password" placeholder="Password" class="form-control mb-3">
				<button class="btn btn-outline-danger">Login</button>
			</form>
		</section>		

		<!-- script -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
		<!-- script-end -->
	</body>
</html>