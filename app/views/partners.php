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

    <link rel="stylesheet" type="text/css" href="/style/css/partners.css">

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
        <img class="illu-1" src="<?= $document->cover_imgl->url; ?>" alt="<?= $document->cover_imgl->alt; ?>">
        <img class="illu-2" src="<?= $document->cover_imgr->url; ?>" alt="<?= $document->cover_imgr->alt; ?>">
        <div class="wrapper">
          <div class="container-title">
            <?= RichText::asHtml($document->cover_title); ?>
            <?= RichText::asHtml($document->cover_text); ?>
          </div>
          <div class="container-filter">
            <h2><?= RichText::asText($document->patners_text); ?></h2>
            <div class="filter">
              <div class="input">
                <input type="text" readonly placeholder="<?= RichText::asText($document->partners_placeholder); ?>">
                <div class="arrow">
                  <img src="/img/partners/section-cover/icn-arrow.svg" alt="">
                </div>
              </div>
              <div class="dropdown">
                <div class="container-el">
                  <?php foreach ($document->partners_select as $s) { ?>
                    <div class="el" data-filter="<?= $s->select; ?>">
                      <?= RichText::asText($s->text); ?>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-partners">
        <div class="wrapper">
          <div class="container-el">
            <?php foreach ($document->partners_partners as $p) { ?>
              <div class="el" data-filter="<?= $p->filter; ?>">
                <div class="logo">
                  <img src="<?= $p->img->url; ?>" alt="<?= $p->img->alt; ?>">
                </div>
                <div class="text">
                  <h3><?= RichText::asText($p->title); ?></h3>
                  <p>
                    <?= RichText::asText($p->text); ?>
                  </p>
                  <?php if($p->soon) { ?>
                    <div class="soon">
                      <?= RichText::asText($document->partners_soon); ?>
                    </div>
                  <?php } else { ?>
                    <div class="bdg">
                      <span>
                        <?= RichText::asText($p->pourcent); ?>
                      </span>
                    </div>
                    <div class="btn">
                      <div class="btn-text"><?= RichText::asText($document->partners_btntext); ?></div>
                    </div>
                  <?php } ?>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </section>

      <section class="section-banner">
        <div class="wrapper">
          <div class="illu">
            <img src="<?= $document->question_image->url; ?>" alt="<?= $document->question_image->alt; ?>">
          </div>
          <div class="text">
            <?= RichText::asHtml($document->question_title); ?>
            <?= RichText::asHtml($document->question_text); ?>
          </div>
          <a href="<?= checkUrl($document->question_btnlink); ?>" class="btn">
            <div class="btn-text"><?= RichText::asText($document->question_btntext); ?></div>
          </a>
        </div>
      </section>

      <?php 
      include('common/common-section-demo.php');
      ?>
      
    </main>

    <?php include('common-footer.php') ?>

    <script type="text/javascript" src="/script/minify/partners-min.js"></script>
  </body>
</html>