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

    <link rel="stylesheet" type="text/css" href="/style/css/solution.css">

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
          <div class="container-text">
            <?= RichText::asHtml($document->cover_title); ?>
            <?= RichText::asHtml($document->cover_text); ?>
            <div class="container-btn">
              <a href="<?php checkUrl($document->cover_btnlink1); ?>" class="btn">
                <span class="btn-text">
                  <?= RichText::asText($document->cover_btntext1); ?>
                </span>
              </a>
              <a href="<?php checkUrl($document->cover_btnlink2); ?>" class="btn">
                <span class="btn-text">
                  <?= RichText::asText($document->cover_btntext2); ?>
                </span>
              </a>
            </div>
          </div>
        </div>          
      </section>

      <section class="section-solution">
        <div class="wrapper">
          <div class="container-title">
            <?= RichText::asHtml($document->list_title); ?>
            <?= RichText::asHtml($document->list_text); ?>
          </div>

          <div class="container-el">
            <?php foreach ($document->list_elements1 as $e) { ?>
            <div class="el">
              <div class="illu">
                <img src="<?= $e->img->url; ?>" alt="<?= $e->img->alt; ?>">
              </div>
              <div class="text">
                <div class="bdg">
                  <span><?= RichText::asText($e->tag); ?></span>
                </div>
                <?= RichText::asHtml($e->title); ?>
                <?= RichText::asHtml($e->text); ?>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </section>

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

      <section class="section-solution">
        <div class="wrapper">
          <div class="container-el">
            <?php foreach ($document->list_elements2 as $e) { ?>
            <div class="el">
              <div class="illu">
                <img src="<?= $e->img->url; ?>" alt="<?= $e->img->alt; ?>">
              </div>
              <div class="text">
                <div class="bdg">
                  <span><?= RichText::asText($e->tag); ?></span>
                </div>
                <?= RichText::asHtml($e->title); ?>
                <?= RichText::asHtml($e->text); ?>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </section>

      <section class="section-btn">
        <div class="wrapper">
          <div class="container-btn">
            <a href="<?php checkUrl($document->list_btnlink1); ?>" class="btn">
              <span class="btn-text"><?= RichText::asText($document->list_btntext1); ?></span>
            </a>
            <a href="<?php checkUrl($document->list_btnlink2); ?>" class="btn">
              <span class="btn-text"><?= RichText::asText($document->list_btntext2); ?></span>
            </a>
          </div>
        </div>
      </section>

      <?php 
      include('common/common-section-demo.php');
      ?>
      
    </main>

    <?php include('common-footer.php') ?>

    <script type="text/javascript" src="/script/minify/solution-min.js"></script>
  </body>
</html>