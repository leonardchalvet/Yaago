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

		<link rel="stylesheet" type="text/css" href="/style/css/about.css">

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

			<section class="section-cover">
				<div class="wrapper">
					<div class="container-text">
						<?= RichText::asHtml($document->cover_title); ?>
					</div>
				</div>
				<div class="container-slider">
					<div class="slider">
						<?php foreach ($document->cove_allimg as $i) { ?>
							<img src="<?= $i->grp_img->url; ?>" alt="">
						<?php } ?>
					</div>
				</div>
			</section>

			<section class="section-story">
				<div class="wrapper">
					<div class="container-title">
						<?= RichText::asHtml($document->story_title); ?>
					</div>
					<div class="container-text">
						<?php foreach ($document->story_col as $c) { ?>
						<div class="col">
							<div class="text">
								<?= RichText::asHtml($c->grp_text); ?>
							</div>
						</div>
						<?php } ?>
					</div>				
				</div>
			</section>

			<section class="section-value">
				<div class="wrapper">
					<div class="container-title">
						<?= RichText::asHtml($document->value_title); ?>
						<?= RichText::asHtml($document->value_text); ?>
					</div>
					<div class="container-value">
						<?php foreach ($document->value_allvalues as $v) { ?>
						<div class="value">
							<div class="illu">
								<img src="<?= $v->grp_img->url; ?>" alt="">
							</div>
							<div class="text">
								<?= RichText::asHtml($v->grp_title); ?>
								<?= RichText::asHtml($v->grp_text); ?>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</section>

			<section class="section-team">
				<div class="wrapper">
					<div class="container-title">
						<?= RichText::asHtml($document->team_title); ?>
						<?= RichText::asHtml($document->team_text); ?>
					</div>
					<div class="container-team">
						<?php foreach ($document->team_allteams as $t) { ?>
						<div class="team">
							<div class="pp">
								<img src="<?= $t->grp_img->url; ?>" alt="">
								<div class="name">
									<?= RichText::asText($t->grp_namep); ?>
								</div>
							</div>
							<div class="text">
								<div class="name"><?= RichText::asText($t->grp_name); ?></div>
								<div class="job"><?= RichText::asText($t->grp_job); ?></div>
							</div>
						</div>
						<?php } ?>
					</div>
					<div class="container-link">
						<h3><?= RichText::asText($document->team_question); ?></h3>
						<a href="<?php checkUrl($document->team_btnlink); ?>" class="link">
							<span class="link-text"><?= RichText::asText($document->team_btntext); ?></span>
						</a>
					</div>
				</div>
			</section>

			<?php 
			include('common/common-section-demo.php');
			?>

		</main>

		<?php include('common-footer.php') ?>

		<script type="text/javascript" src="/script/minify/about-min.js"></script>
	</body>
</html>