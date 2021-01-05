<?php 
use Prismic\Dom\RichText;
$document = $WPGLOBAL['document']->data;
$author   = $WPGLOBAL['author'];
$authors  = $WPGLOBAL['authors'];
$articles = $WPGLOBAL['articles'];

$firstpublish = date_create($WPGLOBAL['document']->first_publication_date);
$lastpublish  = date_create($WPGLOBAL['document']->last_publication_date);

if( getLang() == 'fr' ) {
  setlocale(LC_TIME, "fr_FR");
  $firstpublish = strftime("%d %B %G", strtotime(date_format($firstpublish, 'j F Y')));
  $lastpublish = strftime("%d %B %G", strtotime(date_format($lastpublish, 'j F Y')));
}
else {
  $firstpublish = date_format($firstpublish, 'F j, Y');
  $lastpublish = date_format($lastpublish, 'F j, Y');
}

?>
<html>
  <head>

    <title><?= RichText::asText($document->global_title); ?></title>

    <meta name="description" content="<?= RichText::asText($document->global_description); ?>" />

    <meta property="og:image" content="<?= $document->global_image->url; ?>">

    <meta http-equiv="content-type" content="text/html; charset=utf8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="/style/css/blog-details.css">

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
          <div class="container-img">
            <img src="<?= $document->cover_img->url; ?>" alt="<?= $document->cover_img->alt; ?>">
          </div>
        </div>
      </section>

      <section class="section-blog">
        <div class="wrapper">
          <div class="container-share">
            <?php foreach ($document->social_network as $sn) { ?>
            <a href="<?= $sn->link->url; ?>">
              <img src="<?= $sn->logo->url; ?>" alt="<?= $sn->logo->alt; ?>">
            </a>
            <?php } ?>
          </div>
          <div class="container-blog">
            
            <div class="container-date">
              <p>
                <?= RichText::asText($document->publish_text); ?> <?php echo($firstpublish); ?>  -  <?= RichText::asText($document->update_text); ?> <?php echo($lastpublish); ?>
              </p>
            </div>

            <?php foreach ($document->body as $slice) { ?>

              <?php switch($slice->slice_type) {

                case 'texts' : ?>

                  <div <?php if($slice->primary->isblack) { echo('class="style-black"'); } ?> >
                    <?= RichText::asHtml($slice->primary->text); ?>
                  </div>

                <?php break;

                case 'buttons' : ?>

                  <?php if($slice->primary->btnchoice == "With arrow") { ?>
                    <a class="btn-1" href="<?= $slice->primary->btnlink->url; ?>">
                      <span class="btn-text"><?= RichText::asText($slice->primary->btntext); ?></span>
                      <svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" >
                        <use xlink:href="/img/common/arrow-1.svg#content"></use>
                      </svg>
                    </a>
                  <?php } else if ($slice->primary->btnchoice == "Big") { ?>
                    <a class="btn-2" href="<?= $slice->primary->btnlink->url; ?>">
                      <span class="btn-text"><?= RichText::asText($slice->primary->btntext); ?></span>
                    </a>
                  <?php } else if($slice->primary->btnchoice == "Small") { ?>
                    <a class="btn-3" href="<?= $slice->primary->btnlink->url; ?>">
                      <span class="btn-text"><?= RichText::asText($slice->primary->btntext); ?></span>
                    </a>
                  <?php } else if($slice->primary->btnchoice == "Link") { ?>
                    <a class="link" href="<?= $slice->primary->btnlink->url; ?>">
                      <span class="link-text"><?= RichText::asText($slice->primary->btntext); ?></span>
                    </a>
                  <?php } ?>

                <?php break;

                case 'image' : ?>

                  <img src="<?= $slice->primary->img->url; ?>" alt="<?= $slice->primary->img->alt; ?>">

                <?php break;

                case 'quote' : ?>

                  <div class="container-quote">
                    <div class="icn-quote">
                      <img src="/img/blog-details/section-blog/icn-quote.svg" alt="icn-quote">
                    </div>
                    <q>
                      <?= RichText::asText($slice->primary->text); ?>
                    </q>
                  </div>

                <?php break;

                case 'list' : ?>

                  <div class="container-list">
                    <ul>
                      <?php foreach ($slice->items as $i) { ?>
                      <li><?= RichText::asText($i->text); ?></li>
                      <?php } ?>
                    </ul>
                  </div>

                <?php break;
              } ?>

            <?php } ?>

            <div class="container-author">
              <div class="container-date">
                <p>
                  <?= RichText::asText($document->publish_text); ?> <?php echo($firstpublish); ?>  -  <?= RichText::asText($document->update_text); ?> <?php echo($lastpublish); ?>
                </p>
              </div>
              <div class="author">
                <div class="pp">
                  <img src="<?= $author->data->content_img->url; ?>" alt="<?= $author->data->content_img->alt; ?>">
                </div>
                <div class="text">
                  <div class="name"><?= RichText::asText($author->data->content_about); ?><?= RichText::asText($author->data->content_name); ?></div>
                  <div class="desc">
                    <?= RichText::asText($author->data->content_text); ?>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>

      <section class="section-articles">
        <div class="wrapper">
          <div class="container-title">
            <h2><?= RichText::asText($document->lastarticles_title); ?></h2>
          </div>
          <div class="container-articles">
            <?php 
            foreach ($articles->results as $a) {
              $thisauthor = null;
              foreach ($authors->results as $b) { 
                if($b->uid == $a->data->author->uid && $b->uid != $author->uid) { 
                  $thisauthor = $b;
                }
              }
              if($thisauthor != null) { ?>
                <a href="<?php echo(getUrl()); ?><?= $a->uid; ?>" class="article">
                  <img src="<?= $a->data->cover_img->url; ?>" alt="<?= $a->data->cover_img->alt; ?>" class="cover">
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
            <?php } } ?>
          </div>
        </div>
      </section>

      <?php include('common/common-section-demo.php'); ?>
      
    </main>

    <?php include('common-footer.php'); ?>

    <script type="text/javascript" src="/script/minify/blog-details-min.js"></script>
  </body>
</html>