<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Workout nr 6</title>
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

		<div id="demo" class="carousel slide" data-bs-ride="carousel">
  
			<!-- The slideshow/carousel -->
			<div class="carousel-inner main-carousel">
				<div class="carousel-item active">
					<div 
						class="carousel-item-img" 
						style="background-image: url(https://shyk.fr/wp-content/uploads/2020/08/femme-yoga-montagne-nuage-900x500.jpg);">
					</div>
				</div>
				<div class="carousel-item">
					<div 
						class="carousel-item-img" 
						style="background-image: url(https://media.healthyfood.com/wp-content/uploads/2016/11/Are-you-as-healthy-as-you-think-iStock-1140193165-1024x838.jpg);">
					</div>
				</div>
				<div class="carousel-item">
					<div 
						class="carousel-item-img" 
						style="background-image: url(https://d1v1n2d34vm51j.cloudfront.net/wp-content/uploads/Well-7-Healthy-Habits-4p-3p-2p-B_web1.jpg);">
					</div>
				</div>

				<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>

			</div>
	 	</div>


		<article>
		
			<div class="prezentare py-5">

				<div class="container text-center">

					<div class="row justify-content-center">

						<div class="prezentare-generala col-md-10 col-lg-6">
							<h1>Secretele unui stil de viata sanatos</h1>
							<h2>Retete si sfaturi practice</h2>
							<p>Un stil de viata sanatos este un cumul de aspecte, de la sanatatea corpului fizic, la cea
								psihica, emotionala, spirituala, relationala si financiara. Printre cele mai “vizibile”
								beneficii ale unui stil de viata sanatos se numara faptul ca te simti nemaipomenit, ai mai multa
								energie, te poti concentra mai bine si te imbolnavesti mai rar – sau, de ce nu, deloc 
								<span id="dots">
									...
								</span>
							</p>
						</div>

						<div class="prezentare-generala">
							<button type="button" class="btn btn-primary">Retete</button>
							<button type="button" class="btn btn-outline-secondary">Blog</button>
						</div>

					</div>
				</div>
			</div>
		
		
       		<div class="caracteristici py-5">

				<div class="container">

					<div class="row">

						<div class="caracteristica col-sm-12 col-md-4">
							<img src="images/nutritie.jpg" alt="Nutritie" width="300" height="300">
							<h4>Nutritie</h4>
							<p>Există o legatura stransa intre nutritie si sanatate.</p>
						</div>

						<div class="caracteristica col-sm-6 col-md-4">
							<img src="images/socializare.png" alt="Socializare" width="300" height="300">
							<h4>Socializare</h4>
							<p>Cultivarea relatiilor sociale este importanta pentru sanatate.</p>
						</div>

						<div class="caracteristica col-sm-6 col-md-4">
							<img src="images/miscare.jpg" alt="Miscare" width="300" height="300">
							<h4>Miscare</h4>
							<p>Corpul uman este conceput sa se miste, sa alerge, sa sara, sa manipuleze lucruri.</p>
						</div>

					</div>

				</div>

			</div>	



			<?php
				$x = 0;  

				$nr_nutritie = 1550;
				$nr_socializare = 1320;
				$nr_miscare = 800;
				$nr_suma = $nr_nutritie+$nr_socializare+$nr_miscare;

				$txt="participanți la modulul";
			?>

			<div class="caracteristici py-5">

				<div class="container">

					<div class="row">

						<div class="caracteristica col-sm-16 col-md-3">
							<img src="images/nutritie.jpg" alt="Nutritie" width="300" height="300">
							<h4>Nutritie</h4>
							<p>Există o legatura stransa intre nutritie si sanatate.</p>
							<div>
								<h3><?php echo $nr_nutritie ?></h3>
								<p><?php echo $txt." ".++$x; ?></p>	
							</div>
						</div>

						<div class="caracteristica col-sm-6 col-md-3">
							<img src="images/socializare.png" alt="Socializare" width="300" height="300">
							<h4>Socializare</h4>
							<p>Cultivarea relatiilor sociale este importanta pentru sanatate.</p>
							<div>
								<h3><?php echo $nr_socializare ?></h3>
								<p><?php echo $txt." ".++$x; ?></p>	
							</div>
						</div>

						<div class="caracteristica col-sm-6 col-md-3">
							<img src="images/miscare.jpg" alt="Miscare" width="300" height="300">
							<h4>Miscare</h4>
							<p>Corpul uman este conceput sa se miste, sa alerge, sa sara, sa manipuleze lucruri.</p>
							<div>
								<h3><?php echo $nr_miscare ?></h3>
								<p><?php echo $txt." ".++$x; ?></p>	
							</div>
						</div>

						<div class="caracteristica col-sm-6 col-md-3">
							<img src="images/miscare.jpg" alt="Miscare" width="300" height="300">
							<h4>Miscare</h4>
							<p>Corpul uman este conceput sa se miste, sa alerge, sa sara, sa manipuleze lucruri.</p>
							<div>
								<h3><?php echo $nr_suma ?></h3>
								<p>total participanti</p>
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