<?php 
use Prismic\Dom\RichText;
$header = $WPGLOBAL['header']->data;
?>

<header>
	<div class="head">
		<div class="head-mobile">
			<div class="burger">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
			</div>
			<a href="<?php echo(getUrl()); ?>" class="logo">
				<img src="/img/common/logo.svg" alt="">
			</a>
			<a href="<?php checkUrl($header->content_btnlink2); ?>" class="btn">
				<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" >
					<use xlink:href="/img/common/arrow-1.svg#content"></use>
				</svg>
			</a>
		</div>
		<div class="wrapper">
			<div class="container-link">
				<ul>
					<?php foreach ($header->content_alllinks as $l) { ?>
					<li>
						<a href="<?php checkUrl($l->grp_btnlink); ?>" class="link">
							<span class="title"><?= RichText::asText($l->grp_btntext); ?></span>
						</a>
					</li>
					<?php } ?>
				</ul>
			</div>
			<a href="<?php echo(getUrl()); ?>" class="logo">
				<img src="/img/common/logo.svg" alt="">
			</a>
			<div class="container-action">
				<a href="<?php checkUrl($header->content_btnlink1); ?>" class="login">
					<span class="link-text"><?= RichText::asText($header->content_btntext1); ?></span>
				</a>
				<a href="<?php checkUrl($header->content_btnlink2); ?>" class="btn">
					<span class="btn-text"><?= RichText::asText($header->content_btntext2); ?></span>
					<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" >
						<use xlink:href="/img/common/arrow-1.svg#content"></use>
					</svg>
				</a>
			</div>
		</div>
	</div>
</header>