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

    <link rel="stylesheet" type="text/css" href="/style/css/faq-details.css">

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
        </div>
      </section>

      <section class="section-details">
        <div class="wrapper">
          <div class="container-title">
            <?= RichText::asHtml($document->content_title); ?>
            <?= RichText::asHtml($document->content_text); ?>
          </div>
          <div class="container-el">
            <?php foreach ($document->content_elements as $e) { ?>
            <div class="el">
              <div class="text">
                <h3><?= RichText::asText($e->title); ?></h3>
                <?= RichText::asHtml($e->text); ?>
              </div>
              <img src="<?= $e->img->url; ?>" alt="">
            </div>
            <?php } ?>
          </div>
        </div>
      </section>
      
    </main>

    <?php include('common-footer.php') ?>

    <script type="text/javascript" src="/script/minify/faq-details-min.js"></script>
  </body>
</html>