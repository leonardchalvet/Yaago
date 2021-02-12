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

    <link rel="stylesheet" type="text/css" href="/style/css/welcome.css">

    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#03224c">
    <meta name="msapplication-TileColor" content="#03224c">
    <meta name="theme-color" content="#ffffff">
    
  </head>
  
  <body>

    <main>

      <div class="container-logo">
        <a href="<?php echo(getUrl()); ?>">
          <img src="<?= $document->head_logo->url; ?>" alt="<?= $document->head_logo->alt; ?>">
        </a>
      </div>
        
      <section class="section-features">
        <div class="wrapper">
          <div class="container-head">
            <a href="<?= checkUrl($document->head_btnlink); ?>">
              <span class="arrow">
                <img src="/img/welcome/icn-arrow.svg" alt="">
              </span>
              <span class="text"><?= RichText::asText($document->head_btntext); ?></span>
            </a>
          </div>
          <div class="container-features">
            <div class="container-text">
              <?= RichText::asHtml($document->features_title); ?>
              <a href="<?= checkUrl($document->features_btnlink1); ?>" class="btn">
                <span class="btn-text"><?= RichText::asText($document->features_btntext1); ?></span>
                <svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" >
                  <use xlink:href="/img/common/arrow-1.svg#content"></use>
                </svg>
              </a>
            </div>
            <div class="slider-features">
              <div class="slider">
                <?php foreach ($document->features_elements as $e) { ?>
                <div class="feature">
                  <?= RichText::asHtml($e->title); ?>
                  <img src="<?= $e->img->url; ?>" alt="<?= $e->img->alt; ?>">
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
          <div class="container-btn">
            <a href="<?= checkUrl($document->features_btnlink2); ?>" class="btn">
              <span class="btn-text"><?= RichText::asText($document->features_btntext2); ?></span>
            </a>
          </div>
        </div>
      </section>

      <section class="section-tarifs">
        <div class="wrapper">
          <div class="content">
            <div class="container-text">
              <h3><?= RichText::asText($document->prices_title); ?></h3>
              <p class="desc"><?= RichText::asText($document->prices_text1); ?></p>
              <p class="as"><?= RichText::asText($document->prices_text2); ?></p>
            </div>
            <div class="container-tarifs">
              <img class="illu-obj" src="<?= $document->prices_img->url; ?>" alt="<?= $document->prices_img->alt; ?>">
              <div class="banner">
                <span><?= RichText::asText($document->prices_titlea); ?></span>
              </div>
              <div class="container-el">
                <?php foreach ($document->prices_prices as $p) { ?>
                <div class="el">
                  <div class="price"><?= RichText::asText($p->price); ?></div>
                  <div class="subtitle"><?= RichText::asText($p->by); ?></div>
                  <div class="text"><?= RichText::asText($p->text); ?></div>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
          <div class="container-btn">
            <a href="<?= checkUrl($document->prices_btnlink); ?>" class="btn">
              <span class="btn-text"><?= RichText::asText($document->prices_btntext); ?></span>
              <svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" >
                <use xlink:href="/img/common/arrow-1.svg#content"></use>
              </svg>
            </a>
          </div>
        </div>
      </section>
      
    </main>

    <?php include('common-footer.php') ?>

    <script type="text/javascript" src="/script/minify/welcome-min.js"></script>
  </body>
</html>