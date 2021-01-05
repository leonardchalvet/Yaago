<?php 
use Prismic\Dom\RichText;
$document = $WPGLOBAL['document']->data;
$authors  = $WPGLOBAL['authors'];
$articles = $WPGLOBAL['articles'];
?>
<html>
  <head>

    <title><?= RichText::asText($document->global_title); ?></title>

    <meta name="description" content="<?= RichText::asText($document->global_description); ?>" />

    <meta property="og:image" content="<?= $document->global_image->url; ?>">

    <meta http-equiv="content-type" content="text/html; charset=utf8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="/style/css/blog.css">

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

      <section class="section-blog">
        <div class="wrapper">
          <div class="container-title">
            <?= RichText::asHtml($document->content_title); ?>
          </div>

          <div class="container-articles">

            <?php 
              $nb = 0;
              $col = true;
              foreach ($articles->results as $a) {

                if($nb < 17) {

                  foreach ($authors->results as $b) { 
                    if($b->uid == $a->data->author->uid) { 
                      $thisauthor = $b;
                    }
                  } ?>

                  <?php if($nb % 6 == 0) {
                    if($nb != 0) { ?> </div> <?php } ?>
                    <div class="raw">
                  <?php } ?>
                  
                  <?php if($col) { ?>
                    <div class="col">
                  <?php } ?>
                
                  <a href="<?php echo(getUrl()); ?><?= $a->uid; ?>" class="article">
                    <img src="<?= $a->data->cover_img->url; ?>" alt="" class="cover">
                    <h3>
                      <?= RichText::asText($a->data->cover_title); ?>
                    </h3>
                    <p>
                      <?= RichText::asText($a->data->cover_text); ?>
                    </p>
                    <span class="author">
                      <span class="pp">
                        <img src="<?= $thisauthor->data->content_img->url; ?>" alt="<?= $thisauthor->data->content_img->alt; ?>">
                      </span>
                      <span class="text">
                        <span class="name"><?= RichText::asText($thisauthor->data->content_name); ?></span>
                        <span class="date">
                          <?= RichText::asText($thisauthor->data->content_under); ?>
                        </span>
                      </span>
                    </span>
                  </a>

                  <?php if(!$col) { ?>
                    </div>
                  <?php } ?>

                  <?php if($col) { $col = false; }
                  else { $col = true; } ?>

            <?php } else { $nb = 5; } $nb++; }

            if(!$col) { echo('</div>'); }
            if( ($nb % 1 == 0 || $nb % 2 == 0) && $nb % 3 != 0 && $nb % 4 != 0 && $nb % 5 != 0 && $nb % 6 != 0) { 
              echo('<div class="col"></div><div class="col"></div>');
            }
            if( ($nb % 3 == 0 || $nb % 4 == 0) && $nb % 5 != 0 && $nb % 6 != 0) {
              echo('<div class="col"></div>');
            } ?>

            </div>

          </div>

          <div class="container-btn">
            <button class="btn">
              <span class="btn-text">
                <?= RichText::asText($document->content_btntext); ?>
              </span>
            </button>
          </div>
        </div>          
      </section>
      
    </main>

    <?php include('common-footer.php') ?>

    <script type="text/javascript" src="/script/minify/blog-min.js"></script>
  </body>
</html>