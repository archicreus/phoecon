<?php
include("header.php");
?>

<div class="main-wrapper ">
	<section class="page-title bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block text-center">
						<span class="text-white">Nos services</span>
						<h1 class="text-capitalize mb-4 text-lg">Ce que nous faisons</h1>
						<ul class="list-inline">
							<li class="list-inline-item"><a href="index.php" class="text-white">Accueil</a></li>
							<li class="list-inline-item"><span class="text-white">/</span></li>
							<li class="list-inline-item"><a href="#" class="text-white-50">Nos services</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php include("work.php"); ?>

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