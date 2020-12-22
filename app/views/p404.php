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

	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	    <link rel="stylesheet" type="text/css" href="/style/css/404.css">

  	</head>
	
	<body>

		<?php include('common-header.php') ?>

		<main>

			<section class="section-404">

				<div class="wrapper">
					<div class="container-title">
						<?= RichText::asHtml($document->content_title); ?>
						<?= RichText::asHtml($document->content_text); ?>
						<a href="<?php echo(checkUrl($document->content_btnlink)); ?>">
							<span class="link-text"><?= RichText::asText($document->content_btntext); ?></span> 
						</a>
					</div>
				</div>
				<img class="illu-1" src="/img/404/illu-1.svg" alt="">
			</section>

		</main>

		<?php include('common-footer.php') ?>

		<script type="text/javascript" src="script/minify/404-min.js"></script>
	</body>
</html>