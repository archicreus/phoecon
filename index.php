<?php
include("header.php");
?>

<div class="main-wrapper ">
	<!-- Slider Start -->
	<section class="slider">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-10">
					<div class="block">
						<span class="d-block mb-3 text-white text-capitalize">Préparez-vous pour un nouvel avenir</span>
						<h1 class="animated fadeInUp mb-5">Notre travail est <br>la présentation de nos <br>capacités.</h1>
						<!-- <a href="#" target="_blank" class="btn btn-main animated fadeInUp btn-round-full">Commencer<i class="btn-icon fa fa-angle-right ml-2"></i></a> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Section Intro Start -->
	<?php include("intro.php"); ?>

	<!-- Section About Start -->

	<section class="section about position-relative">
		<div class="bg-about"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-6 offset-md-0">
					<div class="about-item ">
						<span class="h6 text-color">Ce que nous sommes</span>
						<h2 class="mt-3 mb-4 position-relative content-title">Nous sommes une équipe dynamique de personnes créatives</h2>
						<div class="about-content">
							<h4 class="mb-3 position-relative">Nous sommes une solution parfaite</h4>
							<p class="mb-5">Nous fournissons des services de conseil dans le domaine des IFRS et des rapports de gestion,
								aidant les entreprises à atteindre leur plus haut niveau. Nous optimisons les processus d'affaires, en les
								rendant plus faciles.
							</p>
							<!-- <a href="#" class="btn btn-main btn-round-full">Commencer</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section About End -->
	<!-- section Counter Start -->
	<section class="section counter">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-item text-center mb-5 mb-lg-0">
						<h3 class="mb-0"><span class="counter-stat font-weight-bold">5</span> +</h3>
						<p class="text-muted">Projet réaliser</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-item text-center mb-5 mb-lg-0">
						<h3 class="mb-0"><span class="counter-stat font-weight-bold">1 </span>M </h3>
						<p class="text-muted">Clients de partout</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-item text-center mb-5 mb-lg-0">
						<h3 class="mb-0"><span class="counter-stat font-weight-bold">3</span></h3>
						<p class="text-muted">Pays disponible</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-item text-center">
						<h3 class="mb-0"><span class="counter-stat font-weight-bold">1</span></h3>
						<p class="text-muted">Prix gagnés </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- section Counter End  -->
	<!--  Section Services Start -->
<?php include("work.php"); ?>
	<!--  Section Services End -->
	<!-- Section Cta Start -->
	<section class="section cta">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="cta-item  bg-white p-5 rounded">
						<span class="h6 text-color">Nous créons pour vous</span>
						<h2 class="mt-2 mb-4">Confiez votre projet à notre meilleure équipe de professionnels</h2>
						<p class="lead mb-4">Vous avez un projet en tête ? Pour une prise en charge immédiate :</p>
						<h3><i class="ti-mobile mr-3 text-color"></i>+228 93 58 88 79</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--  Section Cta End-->
	<!-- Section Testimonial Start -->
	<?php include("testimony.php"); ?>
	<!-- Section Testimonial End -->

	<?php include("news.php"); ?>

	<section class="mt-70 position-relative">
		<div class="container">
			<div class="cta-block-2 bg-gray p-5 rounded border-1">
				<div class="row justify-content-center align-items-center ">
					<div class="col-lg-7">
						<span class="text-color">Pour chaque type d'entreprise</span>
						<h2 class="mt-2 mb-4 mb-lg-0">Confiez votre projet à notre meilleure équipe de professionnels</h2>
					</div>
					<div class="col-lg-4">
						<a href="contact.php" class="btn btn-main btn-round-full float-lg-right ">Contactez nous</a>
					</div>
				</div>
			</div>
		</div>

	</section>
	<?php
	include("footer.php");
	?>