<html>
	<head>

		<title>Faq</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<link rel="stylesheet" type="text/css" href="style/css/faq.css">

	</head>
	
	<body>

		<?php include('common-header.php') ?>

		<main>

			<section class="section-title">
				<div class="wrapper">
					<div class="container-title">
						<h1>FAQ</h1>
						<p>Besoin d’aide ? Une question ?<br>On vous guide pas à pas</p>
					</div>
					<div class="container-filter">
						<ul>
							<li>
								<a class="style-active" data-filter=".">All
								</a>
							</li>
							<li>
								<a data-filter="Login / Register">Login / Register 
								</a>
							</li>
							<li>
								<a data-filter="Recommendations">Recommendations 
								</a>
							</li>
							<li>
								<a data-filter="General / Settings">General / Settings 
								</a>
							</li>
						</ul>
					</div>
					
				</div>
			</section>

			<section class="section-faq">
				<div class="wrapper">
					<ul>
						<li data-filter="Login / Register">
							<a href="https://#">
								<div class="container-text">
									<h3>Registration desktop 
									</h3>
									<p>
										Suivez les 3 étapes de créations de compte en utilisant votre adresse mail, google ou facebook. 
									</p>
								</div>
								<div class="arrow">
									<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12">
										<use xlink:href="img/common/arrow-1.svg#content"></use>
									</svg>
								</div>
							</a>
						</li>
						<li data-filter="Login / Register">
							<a href="https://#">
								<div class="container-text">
									<h3>Registration mobile 
									</h3>
									<p>
										Suivez les 3 étapes de créations de compte en utilisant votre adresse mail, google ou facebook. 
									</p>
								</div>
								<div class="arrow">
									<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12">
										<use xlink:href="img/common/arrow-1.svg#content"></use>
									</svg>
								</div>
							</a>
						</li>
						<li data-filter="Recommendations">
							<a href="https://#">
								<div class="container-text">
									<h3>Lorem ipsum dolor sit amet
									</h3>
									<p>
										Suivez les 3 étapes de créations de compte en utilisant votre adresse mail, google ou facebook. 
									</p>
								</div>
								<div class="arrow">
									<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12">
										<use xlink:href="img/common/arrow-1.svg#content"></use>
									</svg>
								</div>
							</a>
						</li>
						<li data-filter="Recommendations">
							<a href="https://#">
								<div class="container-text">
									<h3>Lorem ipsum dolor sit amet
									</h3>
									<p>
										Suivez les 3 étapes de créations de compte en utilisant votre adresse mail, google ou facebook. 
									</p>
								</div>
								<div class="arrow">
									<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12">
										<use xlink:href="img/common/arrow-1.svg#content"></use>
									</svg>
								</div>
							</a>
						</li>
						<li data-filter="General / Settings">
							<a href="https://#">
								<div class="container-text">
									<h3>Lorem ipsum dolor sit amet
									</h3>
									<p>
										Suivez les 3 étapes de créations de compte en utilisant votre adresse mail, google ou facebook. 
									</p>
								</div>
								<div class="arrow">
									<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12">
										<use xlink:href="img/common/arrow-1.svg#content"></use>
									</svg>
								</div>
							</a>
						</li>
						<li data-filter="General / Settings">
							<a href="https://#">
								<div class="container-text">
									<h3>Lorem ipsum dolor sit amet
									</h3>
									<p>
										Suivez les 3 étapes de créations de compte en utilisant votre adresse mail, google ou facebook. 
									</p>
								</div>
								<div class="arrow">
									<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12">
										<use xlink:href="img/common/arrow-1.svg#content"></use>
									</svg>
								</div>
							</a>
						</li>
						<li class="style-hide" data-filter="Recommendations">
							<a href="https://#">
								<div class="container-text">
									<h3>Lorem ipsum non dolor
									</h3>
									<p>
										Suivez les 3 étapes de créations de compte en utilisant votre adresse mail, google ou facebook. 
									</p>
								</div>
								<div class="arrow">
									<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12">
										<use xlink:href="img/common/arrow-1.svg#content"></use>
									</svg>
								</div>
							</a>
						</li>
						<?php for($i=0;$i<10;$i++) { ?>
						<li class="style-hide" data-filter="General / Settings">
							<a href="https://#">
								<div class="container-text">
									<h3>Lorem ipsum non dolor
									</h3>
									<p>
										Suivez les 3 étapes de créations de compte en utilisant votre adresse mail, google ou facebook. 
									</p>
								</div>
								<div class="arrow">
									<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12">
										<use xlink:href="img/common/arrow-1.svg#content"></use>
									</svg>
								</div>
							</a>
						</li>
						<?php } ?>
					</ul>
					<div class="container-btn">
						<a class="btn">
							<span class="btn-text">Charger plus 
							</span>
						</a>
					</div>
				</div>
			</section>

		</main>

		<?php include('common-footer.php') ?>

		<script type="text/javascript" src="script/minify/faq-min.js"></script>
	</body>
</html>