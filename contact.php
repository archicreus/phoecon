<?php
include("header.php");
?>

<div class="main-wrapper ">
	<section class="page-title bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block text-center">
						<span class="text-white">Contactez nous</span>
						<h1 class="text-capitalize mb-4 text-lg">Get in Touch</h1>
						<ul class="list-inline">
							<li class="list-inline-item"><a href="index.php" class="text-white">Acceuil</a></li>
							<li class="list-inline-item"><span class="text-white">/</span></li>
							<li class="list-inline-item"><a href="#" class="text-white-50">Contactez nous</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- contact form start -->
	<section class="contact-form-wrap section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12">
					<form id="contact-form" class="contact__form" method="post" action="mail.php">
						<!-- form message -->
						<div class="row">
							<div class="col-12">
								<div class="alert alert-success contact__msg" style="display: none" role="alert">
									Votre message a bien été envoyé.
								</div>
							</div>
						</div>
						<!-- end message -->
						<span class="text-color">Envoyer un message</span>
						<h3 class="text-md mb-4">Formulaire de contact</h3>
						<div class="form-group">
							<input name="name" type="text" class="form-control" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input name="email" type="email" class="form-control" placeholder="Email Address">
						</div>
						<div class="form-group-2 mb-4">
							<textarea name="message" class="form-control" rows="4" placeholder="Your Message"></textarea>
						</div>
						<button class="btn btn-main" name="submit" type="submit">Envoyer</button>
					</form>
				</div>

				<div class="col-lg-5 col-sm-12">
					<div class="contact-content pl-lg-5 mt-5 mt-lg-0">
						<span class="text-muted">Nous sommes des professionnels</span>
						<h2 class="mb-5 mt-2">N'hésitez pas à nous contacter pour tout type d'information</h2>

						<ul class="address-block list-unstyled">
							<li>
								<i class="ti-direction mr-3"></i>North Main Street,Brooklyn Australia
							</li>
							<li>
								<i class="ti-email mr-3"></i>Email: contact@mail.com
							</li>
							<li>
								<i class="ti-mobile mr-3"></i>Phone:+228 98 87 56 76
							</li>
						</ul>

						<ul class="social-icons list-inline mt-5">
							<li class="list-inline-item">
								<a href="https://www.facebook.com/groups/522795265536482"><i class="fab fa-facebook-f"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="https://twitter.com/EDanigue"><i class="fab fa-twitter"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#"><i class="fab fa-linkedin-in"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="google-map">
		<div id="map"></div>
	</div>
<?php
include 'footer.php';
?>