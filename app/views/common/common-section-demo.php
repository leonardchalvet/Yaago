<?php use Prismic\Dom\RichText; ?>
<section class="common-section-demo">
	<div class="wrapper">
		<div class="container-text">
			<?= RichText::asHtml($document->demo_title); ?>
			<div class="text">
				<?= RichText::asHtml($document->demo_text); ?>
				<a href="<?php echo(checkUrl($document->demo_btnlink)); ?>">
					<span class="btn-text"><?= RichText::asText($document->demo_btntext); ?></span>
					<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" >
						<use xlink:href="/img/common/arrow-1.svg#content"></use>
					</svg>
				</a>
			</div>
		</div>
		<img class="illu-1" src="/img/common/common-section-demo/illu-1.svg" alt="">
	</div>
</section>