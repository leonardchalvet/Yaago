<?php 
use Prismic\Dom\RichText;
$header = $WPGLOBAL['header']->data;
?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-T48PSCSRFS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-T48PSCSRFS');
</script>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '500802610909258');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=500802610909258&ev=PageView&noscript=1"/></noscript>
<!-- End Facebook Pixel Code -->


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
