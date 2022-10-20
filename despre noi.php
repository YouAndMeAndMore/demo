<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Despre noi</title>
	<!--bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<!--my css-->
	<link rel="stylesheet" type="text/css" href="./styles.css">
</head>

<body>

	<div id="page">
		<header>
			<nav class="main-navbar">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="despre noi.php">Despre noi</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li class="main-navbar-phone"><a href="#">&#128222;</a></li>
				</ul>
			</nav>
		</header>


		<article>
			<div class="container">
				<h1>Despre noi</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas ipsum doloremque quaerat dolores unde repellendus, vel voluptas sit dicta iure animi quia quo! Mollitia voluptates quas consectetur nam necessitatibus ipsam.</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum maxime fugiat aut eaque repellat, dignissimos aperiam tenetur itaque ipsum, deleniti possimus. Quod excepturi nam cumque eum maxime at qui nemo! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum maxime fugiat aut eaque repellat, dignissimos aperiam tenetur itaque ipsum, deleniti possimus. Quod excepturi nam cumque eum maxime at qui nemo!</p>
				<p>
					<a class="btn btn-outline-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
						Citește mai mult
					</a>
				</p>
				<div class="collapse" id="collapseExample">
					<div class="card card-body">
					  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae quibusdam recusandae dolorum aliquam quasi obcaecati. Cum quas ipsam deserunt officiis saepe quo molestias possimus, dolorem repudiandae voluptatem sapiente sequi repellendus?</p>
					  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod excepturi voluptas natus ullam delectus nam unde praesentium, harum velit, et dolores! Ipsam, obcaecati. Soluta in reiciendis nesciunt neque, ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod excepturi voluptas natus ullam delectus nam unde praesentium, harum velit, et dolores! Ipsam, obcaecati. Soluta in reiciendis nesciunt neque, ipsa.</nobis></p>
					</div>
				</div>
			</div>

			<div class="sectiune-echipa">
				<div class="container">
						
					<h2>Echipa</h2>
					
					<div class="row">

						<div class="col-sm-4">
							<div class="card border border-info border-1 rounded-0 embed-responsive-1by1">
								<img src="images/ioana.jpg" class="card-img-top rounded-0 embed-responsive-item" alt="...">
								<div class="card-body">
									<p class="fw-bold">Ioana Popescu</p>
								</div>
								<div class="card-body">
									<p class="card-text">Nutritionist</p>
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="card border border-info border-1 rounded-0 embed-responsive-1by1">
								<img src="images/calin.jpg" class="card-img-top rounded-0 embed-responsive-item" alt="...">
								<div class="card-body">
									<p class="fw-bold">Calin Mircescu</p>
								</div>
								<div class="card-body">
									<p class="card-text">Director General</p>
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="card border border-info border-1 rounded-0 embed-responsive-1by1">
								<img src="images/ruxandra.jpg" class="card-img-top rounded-0 embed-responsive-item" alt="...">
								<div class="card-body">
									<p class="fw-bold">Ruxandra Carmen</p>
								</div>
								<div class="card-body">
									<p class="card-text">Specialist Marketing</p>
								</div>
							</div>
						</div>



					</div>
				</div>



			</div>


		</article>
		
		<footer>

			<section class="sectiune4">
				<img src="images/logo_footer.jpg" alt="logoGiveForms" class="logo">
				<form action="#">
					<p>Aboneaza-te la newsletter!</p>

					<div class="container">
						<div class="row justify-content-center">
							<div class="d-flex col-lg-4">
								<input type="text" class="form-control" placeholder="Adresa de e-mail" aria-label="Adresa de e-mail" aria-describedby="btnGroupAddon">
								<button class="btn btn-primary" type="submit">Trimite</button>
							</div>
						</div>
					</div>

				</form>
				<p>&copy; Toate drepturile rezervate!</p>
			</section>

	

		</footer>

	</div>

	<!--bootstrap javascript-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
</body>