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

	    <link rel="stylesheet" type="text/css" href="/style/css/mentions.css">

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

			<div class="btn-top">
				<span class="btn-text"><?= RichText::asHtml($document->content_btntop); ?></span>
				<svg class="btn-arrow-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" >
					<use xlink:href="/img/mentions/arrow.svg#content"></use>
				</svg>
			</div>

			<section class="section-cover">
				<div class="wrapper">
					<div class="container-text">
						<?= RichText::asHtml($document->title); ?>
					</div>
				</div>
				<div class="container-filter">
					<ul>
						<?php $i=0; foreach ($document->content_categories as $c) { ?>
						<li>
							<a <?php if($i==0) echo('class="style-active"'); ?>><?= RichText::asText($c->text); ?></a>
						</li>
						<?php $i++; } ?>
					</ul>
				</div>
			</section>

			<div class="container-section">
				<?php $i=0; foreach ($document->body as $slice) { ?>
				<section class="section-mentions <?php if($i==0) echo('style-active'); ?>">
					<div class="wrapper">
						<?= RichText::asHtml($slice->primary->tab_text); ?>
						<div class="container-el">
							<?php foreach ($slice->items as $i) { ?>
							<div class="el">
								<div class="head">
									<?= RichText::asHtml($i->tab_title); ?>
									<div class="arrow">
										<img src="/img/offre/section-faq/icn-arrow.svg" alt="">
									</div>
								</div>
								<?= RichText::asHtml($i->tab_text); ?>
							</div>
							<?php } ?>
						</div>
					</div>
				</section>
				<?php $i++; } ?>
			</div>

		</main>

		<?php include('common-footer.php') ?>

		<script type="text/javascript" src="/script/minify/mentions-min.js"></script>
	</body>

</html>