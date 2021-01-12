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

	    <link rel="stylesheet" type="text/css" href="/style/css/404.css">

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

			<section class="section-404">

				<div class="wrapper">
					<div class="container-title">
						<?= RichText::asHtml($document->content_title); ?>
						<?= RichText::asHtml($document->content_text); ?>
						<a href="<?php checkUrl($document->content_btnlink); ?>">
							<span class="link-text"><?= RichText::asText($document->content_btntext); ?></span> 
						</a>
					</div>
				</div>
				<img class="illu-1" src="/img/404/illu-1.svg" alt="">
			</section>

		</main>

		<?php include('common-footer.php') ?>

		<script type="text/javascript" src="/script/minify/404-min.js"></script>
	</body>
</html>