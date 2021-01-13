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

    <link rel="stylesheet" type="text/css" href="/style/css/landing.css">

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
        <div class="container-send">
          <img src="/img/contact/check.svg" alt="">
          <div class="text"><?= RichText::asText($document->cover_send); ?></div>
        </div>
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
            <form class="container-input" onsubmit="return false">
              <div class="input">
                <input name="goto" type="text" style="display: none;" value="<?php checkUrl($document->cover_goto); ?>">
                <input name="object" type="text" style="display: none;" value="<?= RichText::asText
                ($document->cover_object); ?>">
                <input name="sendto" type="text" style="display: none;" value="<?= RichText::asText($document->cover_sendto); ?>">
                <input name="email" type="text" placeholder="<?= RichText::asText($document->cover_inputtext); ?>">
                <button class="btn">
                  <span class="btn-text"><?= RichText::asText($document->cover_inputbtn); ?></span>
                </button>
              </div>
              <div class="error">
                 <?= RichText::asText($document->cover_error); ?>
              </div>
            </div>
          </form>
          <div class="container-illu">
            <img src="<?= $document->cover_img->url; ?>" alt="<?= $document->cover_img->alt; ?>">
          </div>
        </div>
      </section>

      <section class="section-solutions">
        <div class="wrapper">
          <div class="container-title">
            <?= RichText::asHtml($document->solutions_title); ?>
            <?= RichText::asHtml($document->solutions_text); ?>
          </div>
          <div class="container-el">
            <?php foreach ($document->solutions_cards as $c) { ?>
            <div class="el">
              <div class="illu">
                <img src="<?= $c->img->url; ?>" alt="<?= $c->img->alt; ?>">
              </div>
              <?= RichText::asHtml($c->title); ?>
              <?= RichText::asHtml($c->text); ?>
            </div>
            <?php } ?>
          </div>
          <div class="container-btn">
            <a href="<?= $document->solutions_btnlink->url; ?>" class="btn" >
              <div class="btn-text"><?= RichText::asText($document->solutions_btntext); ?></div>
            </a>
          </div>
        </div>
      </section>

      <section class="section-tarif">
        <div class="wrapper">
          <div class="illu">
            <img src="<?= $document->features_img->url; ?>" alt="<?= $document->features_img->url; ?>">
          </div>
          <div class="container-text">
            <?= RichText::asHtml($document->features_title); ?>
            <?= RichText::asHtml($document->features_text); ?>
            <a href="<?= $document->features_btnlink->url; ?>" class="btn">
              <span class="btn-text"><?= RichText::asText($document->features_btntext); ?></span>
              <svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" >
                <use xlink:href="/img/common/arrow-1.svg#content"></use>
              </svg>
            </a>
          </div>
        </div>
      </section>


      <section class="section-fondateurs">
        <div class="wrapper">
          <div class="container-text">
            <?= RichText::asHtml($document->teams_title); ?>
            <?= RichText::asHtml($document->teams_text); ?>
          </div>
          <div class="container-fondateurs">
            <?php foreach ($document->teams_photos as $t) { ?>
            <div class="fondateur">
              <div class="pp">
                <img src="<?= $t->img->url; ?>" alt="<?= $t->img->alt; ?>">
                <div class="name">
                  <?= RichText::asText($t->name); ?>
                </div>
              </div>
              <div class="text">
                <div class="name"><?= RichText::asText($t->name); ?></div>
                <div class="job"><?= RichText::asText($t->job); ?></div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </section>

      <section class="section-mission">
        <div class="wrapper">
          <div class="container-text">
            <?= RichText::asHtml($document->mission_title); ?>
            <?= RichText::asHtml($document->mission_text); ?>
          </div>
          <a href="<?= $document->mission_btnlink->url; ?>" class="btn">
            <span class="btn-text">
              <?= RichText::asText($document->mission_btntext); ?>
            </span>
          </a>
        </div>
      </section>

      <?php 
      include('common/common-section-demo.php');
      ?>
      
    </main>

    <?php include('common-footer.php') ?>

    <script type="text/javascript" src="/script/minify/landing-min.js"></script>
  </body>
</html>