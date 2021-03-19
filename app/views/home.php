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

    <link rel="stylesheet" type="text/css" href="/style/css/home.css">

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

    <div class="container-lightbox">
        <div class="lightbox lightbox-1">
          <div class="download"><?= $document->lbf_download->url; ?></div>
          <div class="cross">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <use xlink:href="/img/home/lightbox/cross.svg#content"></use>
            </svg>
          </div>
          <div class="row">
              <div class="col">
                <img src="<?= $document->lbf_logo->url; ?>" alt="logo">
                <img src="<?= $document->lbf_img->url; ?>" alt="img">
              </div>
              <div class="col">
                <div class="container-title">
                  <h3><?= RichText::asText($document->lbf_title); ?></h3>
                  <p><?= RichText::asText($document->lbf_text); ?></p>
                </div>
                <form onSubmit="return false;">
                  <div class="container-input">
                    <input type="text" name="sendto" value="<?= RichText::asText($document->lbf_sendto); ?>" style="display: none;">
                    <input type="text" name="object" value="<?= RichText::asText($document->lbf_object); ?>" style="display: none;">
                    <div class="input">
                      <input type="text" name="lastname" placeholder="<?= RichText::asText($document->lbf__lastname); ?>">
                    </div>
                    <div class="input">
                      <input type="text" name="firstname" placeholder="<?= RichText::asText($document->lbf_firstname); ?>">
                    </div>
                    <div class="input">
                      <input type="email" name="email" placeholder="<?= RichText::asText($document->lbf_email); ?>">
                    </div>
                    <div class="input">
                      <input type="text" name="phone" placeholder="<?= RichText::asText($document->lbf_phone); ?>">
                    </div>
                  </div>
                  <button>
                    <span class="btn-text"><?= RichText::asText($document->lbf_btntext); ?></span>
                  </button>
                </form>
              </div>      
          </div>
        </div>
        <div class="lightbox lightbox-2">
          <div class="cross">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <use xlink:href="/img/home/lightbox/cross.svg#content"></use>
            </svg>
          </div>
          <img src="<?= $document->lbc_illu->url; ?>" alt="">
          <h3><?= RichText::asText($document->lbc_title); ?></h3>
          <p><?= RichText::asText($document->lbc_text); ?></p>
          <button>
            <span class="btn-text"><?= RichText::asText($document->lbc_btntext); ?></span>
          </button>
        </div>
    </div>

    <main>

      <div class="container">
        <section class="section-cover">
          <div class="wrapper">
            <div class="container-title">
              <h1>
                <span>
                  <?= RichText::asText($document->cover_title1); ?>
                </span>
                <span>
                  <?= RichText::asText($document->cover_title2); ?>
                </span>
              </h1>
              <a href="<?php checkUrl($document->cover_btnlink); ?>">
                <span class="btn-text"><?= RichText::asText($document->cover_btntext); ?></span>
                <svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" >
                  <use xlink:href="/img/common/arrow-1.svg#content"></use>
                </svg>
              </a>
            </div>
            <div class="container-img">
              <img src="/img/home/section-cover/illu-screen-1.png" alt="">
              <img src="/img/home/section-cover/illu-screen-2.png" alt="">
              <img src="/img/home/section-cover/illu-screen-3.png" alt="">
              <img src="/img/home/section-cover/illu-screen-4.png" alt="">
            </div>
          </div>
        </section>

        <section class="section-desc">
          <div class="wrapper">
            <div class="container-text">
              <?= RichText::asHtml($document->description_title); ?>
              <?= RichText::asHtml($document->description_text); ?>
            </div>
            <div class="container-cdr">
              <?= RichText::asHtml($document->description_boxtitle); ?>
              <?= RichText::asHtml($document->description_boxtext); ?>
              <a href="<?php checkUrl($document->description_boxbtnlink); ?>">
                <span class="link-text"><?= RichText::asText($document->description_boxbtntext); ?></span>
                <svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" >
                  <use xlink:href="/img/common/arrow-1.svg#content"></use>
                </svg>
              </a>
            </div>
          </div>
        </section>
      </div>

      <section class="section-link">
        <div class="wrapper">

          <div class="container-title">
            <h2>
              <div class="title"><?= RichText::asText($document->links_title); ?>
                <div class="carrousel">
                  <?php $i=1; foreach ($document->title_gpr as $t) { ?>
                  <div class="el">
                    <div class="text"><?= RichText::asText($t->grp_title); ?></div>
                    <div class="underline">
                      <img src="/img/common/underline/underline-<?php echo($i); ?>.svg" alt="">
                    </div>
                  </div>
                  <?php $i++; } ?>
                </div>
              </div>
            </h2>
          </div>

          <div class="slider">
            <div class="container-el">
              <?php $i=1; foreach ($document->links_gpr as $l) { ?>
              <div class="el">
                <div class="cover">
                  <img src="<?= $l->grp_img->url; ?>" alt="">
                  <?= RichText::asHtml($l->gpr_titleimg); ?>
                </div>
                <div class="text">
                  <?= RichText::asHtml($l->grp_title); ?>
                  <?= RichText::asHtml($l->grp_text); ?>
                </div>
              </div>
              <?php } ?>
            </div>        
          </div>
          
        </div>
      </section>

      <section class="section-features">
        <div class="wrapper">
          <div class="container-title">
            <?= RichText::asHtml($document->features_title); ?>
          </div>
          <div class="content">
            <ul>
              <?php foreach ($document->features_gpr as $f) { ?>
              <li>
                <?= RichText::asHtml($f->grp_title); ?>
                <?= RichText::asHtml($f->grp_text); ?>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
        <div class="container-illu el_scrollDetection">
          <img class="illu-1" src="/img/home/section-features/illu-1.svg" alt="">
          <img class="illu-2" src="/img/home/section-features/illu-2.svg" alt="">
        </div>
      </section>

      <?php if(!$document->partners_choice) { ?>
        <section class="section-partners">
          <div class="wrapper">
            <div class="container-title">
              <?= RichText::asHtml($document->partners_title); ?>
              <?= RichText::asHtml($document->partners_text); ?>
            </div>
            <div class="container-partners">
              <?php $i=1; 

              function returnPatern($p) { ?>
                <?php if($p->grp_img->url) { ?>
                  <a href="<?= checkUrl($p->link); ?>" target="_blank" class="img">
                    <img src="<?= $p->grp_img->url ?>" alt="<?= $p->grp_img->alt; ?>">
                  </a>
                <?php } ?>
                <div class="text">
                  <?= RichText::asHtml($p->grp_title); ?>
                  <?= RichText::asHtml($p->grp_text); ?>
                </div>
              <?php }

              foreach ($document->partners_grp as $p) { ?>
                <?php if($i == 1) { ?>
                <div class="raw">
                  <div class="partners">
                    <?php echo(returnPatern($p)); ?>
                  </div>
                </div>
                <div class="raw">
                <?php } else if( $i == count($document->partners_grp)) { ?>
                </div>
                <div class="raw">
                  <div class="partners">
                    <?php echo(returnPatern($p)); ?>
                    <a href="<?php checkUrl($document->partners_btnlinkuc); ?>">
                      <span class="link-text"><?= RichText::asText($document->partners_btntextuc); ?></span>
                    </a>
                  </div>
                </div>
                <?php } else { ?>
                <div class="partners">
                  <?php echo(returnPatern($p)); ?>
                </div>
                <?php } ?>
              <?php $i++; } ?>
            </div> 
            <div class="banner">
              <?= RichText::asHtml($document->partners_question); ?>
              <a href="<?php checkUrl($document->partners_btnlink); ?>" class="btn">
                <span class="btn-text">
                  <?= RichText::asText($document->partners_btntext); ?>
                </span>
              </a>
            </div>
          </div>
        </section>
      <?php } else { ?>
        <section class="section-why">
          <div class="wrapper">
            <div class="container-title">
              <?= RichText::asHtml($document->why_title); ?>
            </div>
            <div class="container-el">
              <?php foreach ($document->why_elements as $e) { ?>
              <div class="el">
                <img src="<?= $e->img->url; ?>" alt="<?= $e->img->alt; ?>">
                <h3><?= RichText::asText($e->title); ?></h3>
                <?= RichText::asHtml($e->text); ?>
              </div>
              <?php } ?>
            </div>
          </div>        
        </section>
      <?php } ?>

      <section class="section-quotes">
        <div class="wrapper">
          <div class="container-slider">
            <div class="slider">
              <div class="container-title">
                <?= RichText::asHtml($document->quotes_title); ?>
              </div>
              <div class="container-quote">
                <div class="slider-quote">
                  <?php foreach ($document->quotes_grp as $q) { ?>
                  <div class="quote">
                    <div class="img">
                      <img src="<?= $q->grp_img->url; ?>" alt="">
                      <?= RichText::asHtml($q->grp_name); ?>
                    </div>
                    <div class="text">
                      <q>
                        <?= RichText::asText($q->grp_text); ?>
                      </q>
                      <div class="name"><?= RichText::asText($q->grp_namet); ?></div>
                    </div>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php 
      include('common/common-section-demo.php');
      ?>
      
    </main>

    <?php include('common-footer.php') ?>

    <script type="text/javascript" src="/script/minify/index-min.js"></script>
  </body>
</html>