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

    <link rel="stylesheet" type="text/css" href="/style/css/faq.css">

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

      <section class="section-title">
        <div class="wrapper">
          <div class="container-title">
            <?= RichText::asHtml($document->content_title); ?>
            <?= RichText::asHtml($document->content_text); ?>
          </div>
          <div class="container-filter">
            <ul>
              <?php $i=0; foreach ($document->content_nav as $n) { ?>
              <li>
                <a <?php if($i==0) { echo('class="style-active"'); } ?> data-filter="<?= $n->dropdown; ?>"><?= RichText::asText($n->text); ?></a>
              </li>
              <?php $i++; } ?>
            </ul>
          </div>
        </div>
      </section>

      <section class="section-faq">
        <div class="wrapper">
          <ul>
            <?php $i=0; foreach ($document->content_elements as $e) { ?>
            <li <?php if($i>=6) echo('class="style-hide"'); ?> data-filter="<?= $e->dropdown; ?>" >
              <a href="<?php checkUrl($e->link); ?>">
                <div class="container-text">
                  <h3><?= RichText::asText($e->title); ?></h3>
                  <p>
                    <?= RichText::asText($e->text); ?>
                  </p>
                </div>
                <div class="arrow">
                  <svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" >
                    <use xlink:href="/img/common/arrow-1.svg#content"></use>
                  </svg>
                </div>
              </a>
            </li>
            <?php $i++; } ?>
          </ul>
          <div class="container-btn">
            <a class="btn">
              <span class="btn-text"><?= RichText::asText($document->content_btntext); ?></span>
            </a>
          </div>
        </div>
      </section>
      
    </main>

    <?php include('common-footer.php') ?>

    <script type="text/javascript" src="/script/minify/faq-min.js"></script>
  </body>
</html>