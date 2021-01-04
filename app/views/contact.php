<?php 
use Prismic\Dom\RichText;
$document = $WPGLOBAL['document']->data;
?>
<html>
	<head>

		<title><?= RichText::asText($document->global_title); ?></title>

		<meta name="description" content="<?= RichText::asText($document->global_description); ?>" />

		<meta property="og:image" content="<?= $document->global_image->url; ?>">

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<link rel="stylesheet" type="text/css" href="/style/css/contact.css">

		<link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
	    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
	    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
	    <link rel="manifest" href="/img/favicon/site.webmanifest">
	    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#03224c">
	    <meta name="msapplication-TileColor" content="#03224c">
	    <meta name="theme-color" content="#ffffff">

	</head>
	
	<body>

		<?php include('common-header.php') ?>

		<main>

			<section class="section-contact">
				<div class="container-send">
					<img src="/img/contact/check.svg" alt="">
					<div class="text"><?= RichText::asText($document->content_send); ?></div>
				</div>
				<div class="wrapper">
					<div class="container-contact">
						<div class="container-text">
							<div class="title">
								<?= RichText::asHtml($document->content_title); ?>
								<img src="/img/common/underline/underline-1.svg" alt="">
							</div>
							<?= RichText::asHtml($document->content_text); ?>
						</div>
						<div class="container-form">
							<form onSubmit="return false;">
								<input name="sendto" type="text" style="visibility: hidden;" value="<?= RichText::asText($document->content_sendto); ?>">
								<input name="object" type="text" style="visibility: hidden;" value="<?= RichText::asText($document->content_object); ?>">
								<div class="container-input">
									<div class="input">
										<div class="title">
											<?= RichText::asText($document->content_fnt); ?>
										</div>
										<input name="firstname" type="text" placeholder="<?= RichText::asText($document->content_fnp); ?>">
										<div class="error">
											<?= RichText::asText($document->content_error); ?>
										</div>
									</div>
									<div class="input">
										<div class="title">
											<?= RichText::asText($document->content_lnt); ?>
										</div>
										<input name="lastname" type="text" placeholder="<?= RichText::asText($document->content_lnp); ?>">
										<div class="error">
											<?= RichText::asText($document->content_error); ?>
										</div>	
									</div>
									<div class="input">
										<div class="title">
											<?= RichText::asText($document->content_et); ?>
										</div>
										<input name="email" type="text" placeholder="<?= RichText::asText($document->content_ep); ?>">
										<div class="error">
											<?= RichText::asText($document->content_error); ?>
										</div>
									</div>
									<div class="input">
										<div class="title">
											<?= RichText::asText($document->content_mt); ?>
										</div>
										<textarea name="message" placeholder="<?= RichText::asText($document->content_mp); ?>"></textarea>
										<div class="error">
											<?= RichText::asText($document->content_error); ?>
										</div>
									</div>
								</div>
								

								<div class="container-btn">
									<button class="btn">
										<span class="btn-text"><?= RichText::asText($document->content_btntext); ?></span>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<img class="illu-1" src="/img/contact/illu-1.svg" alt="">
			</section>

		</main>

		<?php include('common-footer.php') ?>

		<script type="text/javascript" src="/script/minify/contact-min.js"></script>
	</body>
</html>