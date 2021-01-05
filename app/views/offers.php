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

    <link rel="stylesheet" type="text/css" href="/style/css/offre.css">

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
          <div class="container-title">
            <?= RichText::asHtml($document->cover_title); ?>
            <?= RichText::asHtml($document->cover_text); ?>
          </div>
          <div class="container-banner">
            <img src="/img/offre/section-cover/illu-parachutiste.svg" alt="illu-parachutiste">
            <?= RichText::asHtml($document->cover_offer); ?>
          </div>
          <div class="container-offre">
            <div class="container-list">
              <ul>
                <?php foreach ($document->offers_listl as $l) { ?>
                <li>
                  <img src="/img/offre/section-cover/icn-check.svg" alt="">
                  <h3><?= RichText::asText($l->text); ?></h3>
                </li>
                <?php } ?>
              </ul>
            </div>
            <div class="container-price">
              <div class="cdr-price">

                <?php $i=0; foreach ($document->offers_offers as $o) { ?>

                  <div class="el-price">
                    <?php if($i == 0) { ?>
                      <div class="bdg">
                        <p><?= RichText::asText($o->under); ?></p>
                      </div>
                    <?php } ?>
                    <div class="container-text">
                      <div class="price">
                        <h3><?= RichText::asText($o->price); ?></h3>
                        <span><?= RichText::asText($o->by); ?></span>
                      </div>
                      <div class="text"><?= RichText::asText($o->in); ?></div>
                    </div>
                    <?php if($i == 1) { ?>
                      <div class="bdg">
                        <p><?= RichText::asText($o->under); ?></p>
                      </div>
                    <?php } ?>
                  </div>

                  <?php if($i == 0) { ?>
                    <div class="rft">
                      <span><?= RichText::asText($document->offers_split); ?></span>
                    </div>
                  <?php } ?>

                <?php $i++; } ?>

              </div>
              <a class="btn" href="<?= $document->offers_btnlink->url; ?>">
                <span class="btn-text"><?= RichText::asText($document->offers_btntext); ?></span>
                <svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" >
                  <use xlink:href="/img/common/arrow-1.svg#content"></use>
                </svg>
              </a>
              <?= RichText::asHtml($document->offers_listr); ?>
            </div>      
          </div>
        </div>
      </section>

      <section class="section-desc">
        <div class="wrapper">
          <div class="container-title">
            <?= RichText::asHtml($document->meet_title); ?>
            <div class="container-col">
              <div class="col">
                <?= RichText::asHtml($document->meet_textl); ?>
              </div>
              <div class="col">
                <?= RichText::asHtml($document->meet_textr); ?>
                <a href="<?= $document->meet_btnlink->url; ?>" class="btn">
                  <span class="btn-text"><?= RichText::asText($document->meet_btntext); ?></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-faq">
        <div class="wrapper">
          <div class="container-title">
            <?= RichText::asHtml($document->questions_title); ?>
          </div>
          <div class="container-faq">
            <ul>
              <?php foreach ($document->questions_questions as $q) { ?>
              <li>
                <div class="title">
                  <h3><?= RichText::asText($q->question); ?></h3>
                  <div class="arrow">
                    <img src="/img/offre/section-faq/icn-arrow.svg" alt="">
                  </div>
                </div>
                <?= RichText::asHtml($q->text); ?>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </section>
      
    </main>

    <?php include('common-footer.php') ?>

    <script type="text/javascript" src="/script/minify/offre-min.js"></script>
  </body>
</html>