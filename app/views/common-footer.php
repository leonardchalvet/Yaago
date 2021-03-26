<?php 
use Prismic\Dom\RichText;
$footer = $WPGLOBAL['footer']->data;

$urlt = explode('/',(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
$url = $urlt[0].'//'.$urlt[2].'/';
?>

<footer>

	<div class="container-send">
		<img src="/img/contact/check.svg" alt="">
		<div class="text"><?= RichText::asText($footer->newsletter_send); ?></div>
	</div>
	
	<div class="content">
		<div class="wrapper">
			<div class="container-logo">
				<a href="<?php checkUrl($footer->logo_link); ?>" class="logo">
					<img src="/img/common/logo.svg" alt="icon logo">
				</a>
				<p>
					<?= RichText::asText($footer->logo_text); ?>
				</p>
				<div class="container-rs">
					<?php foreach ($footer->logo_sn as $s) { ?>
					<a target="_blank" href="<?php checkUrl($s->grp_link); ?>">
						<img src="<?= $s->grp_img->url; ?>" alt="<?= $s->grp_img->alt; ?>">
					</a>
					<?php } ?>
				</div>
			</div>
			<div class="container-newsletter">
				<h2><?= RichText::asText($footer->newsletter_text); ?></h2>
				<form onSubmit="return false;">
					<input type="text" name="sendto" value="<?= RichText::asText($footer->newsletter_sendto); ?>" style="display: none;">
					<input type="text" name="object" value="<?= RichText::asText($footer->newsletter_object); ?>" style="display: none;">
					<input type="text" name="goto" value="<?php echo(getUrl()); ?>" style="display: none;">
					<div class="input">
						<div class="head">
							<div class="error">
								<?= RichText::asText($footer->newsletter_error); ?>
							</div>
						</div>
						<input type="email" name="email" placeholder="<?= RichText::asText($footer->newsletter_emailp); ?>">
						<button class="send">
							<img src="/img/footer/icn-send.svg" alt="icon send">
						</button>
					</div>
				</form>
			</div>

			<div class="container-link">
				<h2><?= RichText::asText($footer->links_text); ?></h2>
				<ul>
					<?php foreach ($footer->links_alllinks as $l) { ?>
					<li>
						<a href="<?php checkUrl($l->grp_btnlink); ?>"><?= RichText::asText($l->grp_btntext); ?></a>
					</li>
					<?php } ?>
				</ul>
			</div>

			<div class="container-sponsors">
				<h2><?= RichText::asText($footer->sponsors_text); ?></h2>
				<div class="container-img">
					<?php foreach ($footer->sponsors_alllogos as $l) { ?>
						<a href="<?= checkUrl($l->link); ?>" target="_blank">
							<img src="<?= $l->grp_img->url; ?>" alt="<?= $l->grp_img->alt; ?>">
						</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

	<div class="foot">
		<div class="wrapper">
			<div class="container-lg">
				<div class="lg">
					<img class="img-lg" src="/img/footer/icn-earth.svg" alt="icon earth">
					<div class="text">
						<?= RichText::asText($footer->foot_alllang[0]->grp_text); ?>
					</div>
					<img class="arrow" src="/img/footer/icn-arrow.svg" alt="icon arrow">
				</div>
				<div class="dropdown">
					<?php $i=-1; foreach ($footer->foot_alllang as $l) {
						if($i==-1) { ?>
							<a class="el" 
							   href="<?php if($WPGLOBAL['document']->type == "home") { echo(getUrl());
										   } else { echo($url.getLang()."/".$WPGLOBAL['document']->uid); } ?>">
								<?= RichText::asText($l->grp_text); ?>
							</a>
						<?php } else { ?>
							<a class="el" 
							   href="<?php if($WPGLOBAL['document']->type == "home") { echo($url.substr($WPGLOBAL['document']->alternate_languages[$i]->lang, 0, 2)."/");
										   } else { echo($url.substr($WPGLOBAL['document']->alternate_languages[$i]->lang, 0, 2)."/".$WPGLOBAL['document']->alternate_languages[$i]->uid); } ?>">
								<?= RichText::asText($l->grp_text); ?>
							</a>
					<?php } $i++; } ?>
				</div>
			</div>

			<p class="cpr">
				<?= RichText::asText($footer->foot_textc); ?>
			</p>

			<div class="links">
				<?php foreach ($footer->foot_links as $l) { ?>
					<a href="<?php checkUrl($l->link); ?>"><?= RichText::asText($l->text); ?></a>
				<?php } ?>
			</div>
		</div>
	</div>


<!-- ActiveCampaign Code -->
<script type="text/javascript">
    (function(e,t,o,n,p,r,i){e.visitorGlobalObjectAlias=n;e[e.visitorGlobalObjectAlias]=e[e.visitorGlobalObjectAlias]||function(){(e[e.visitorGlobalObjectAlias].q=e[e.visitorGlobalObjectAlias].q||[]).push(arguments)};e[e.visitorGlobalObjectAlias].l=(new Date).getTime();r=t.createElement("script");r.src=o;r.async=true;i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)})(window,document,"https://diffuser-cdn.app-us1.com/diffuser/diffuser.js","vgo");
    vgo('setAccount', '649935505');
    vgo('setTrackByDefault', true);
    vgo('process');
</script>
<!-- End ActiveCampaign Code -->


</footer>

<script async defer src="https://static.cdn.prismic.io/prismic.js?new=true&repo=yaago"></script>

<script>
  window.intercomSettings = {
    app_id: "yifgplim"
  };
</script>


<script>
// We pre-filled your app ID in the widget URL: 'https://widget.intercom.io/widget/yifgplim'
(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/yifgplim';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>
