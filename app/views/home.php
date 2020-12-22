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

    <link rel="stylesheet" type="text/css" href="/style/css/home.css">
  </head>
  
  <body>

    <?php include('common-header.php') ?>

    <main>

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
            <a href="<?= checkUrl($document->cover_btnlink); ?>">
              <span class="btn-text"><?= RichText::asText($document->cover_btntext); ?></span>
              <svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" >
                <use xlink:href="/img/common/arrow-1.svg#content"></use>
              </svg>
            </a>
          </div>
          <div class="container-img">
            <img src="/img/home/section-cover/illu-screen-1.svg" alt="">
            <img src="/img/home/section-cover/illu-screen-2.svg" alt="">
            <img src="/img/home/section-cover/illu-screen-3.svg" alt="">
            <img src="/img/home/section-cover/illu-screen-4.svg" alt="">
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
            <a href="<?= checkUrl($document->description_boxbtnlink); ?>">
              <span class="link-text"><?= RichText::asText($document->description_boxbtntext); ?></span>
              <svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" >
                <use xlink:href="/img/common/arrow-1.svg#content"></use>
              </svg>
            </a>
          </div>
        </div>
      </section>

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

      <section class="section-partners">
        <div class="wrapper">
          <div class="container-title">
            <?= RichText::asHtml($document->partners_title); ?>
            <?= RichText::asHtml($document->partners_text); ?>
          </div>
          <div class="container-partners">
            <?php $i=1; 

            function returnPatern($p) { ?>
              <div class="img">
                <?php if($p->grp_img->url) { ?>
                <img src="<?= $p->grp_img->url ?>" alt="<?= $p->grp_img->alt; ?>">
                <?php } ?>
              </div>
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
                  <a href="<?= $document->partners_btnlinkuc->url; ?>">
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
            <a href="<?= $document->partners_btnlink->url; ?>" class="btn">
              <span class="btn-text">
                <?= RichText::asText($document->partners_btntext); ?>
              </span>
            </a>
          </div>
        </div>
      </section>

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
      include('common/common-section-demo.php')
      ?>
      
    </main>

    <?php include('common-footer.php') ?>

    <script type="text/javascript" src="/script/minify/index-min.js"></script>
  </body>
</html>