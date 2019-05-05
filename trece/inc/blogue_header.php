<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?=$conf["site"]["langs"][LANG]["culture-name1"];?>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="<?=$conf["site"]["langs"][LANG]["culture-name1"];?>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="<?=$conf["site"]["langs"][LANG]["culture-name1"];?>"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" dir="<?=$conf["site"]["langs"][LANG]["direction"];?>"
  lang="<?=$conf["site"]["langs"][LANG]["culture-name1"];?>" itemscope itemtype="http://schema.org/LocalBusiness">
<!--<![endif]-->

<head prefix="og: http://ogp.me/ns#">
  <title><?=$conf["meta"]["title"][LANG];?></title>
  <link rel="canonical" href="<?=$conf["site"]["fullpath"];?>" />
  <base href="<?=REALPATH;?>" target="_self" />
  <meta charset="<?=$conf["site"]["charset"];?>" />
  <meta http-equiv="X-UA-Compatible" content="<?=$conf["site"]["x_ua_compatible"];?>" />
  <meta name="viewport" content="<?=$conf["site"]["viewport"];?>" />
  <meta name="lang" content="<?=$conf["site"]["langs"][LANG]["culture-name1"];?>" />
  <meta name="generator" content="<?=$conf["site"]["generator"];?>" />
  <meta name="robots" content="<?=$conf["site"]["robots"];?>" />
  <meta name="date" content="<?=$conf["meta"]["datetime"];?>" />
  <meta name="description" content="<?=$lCustom["og_description"][LANG];?>" />


  <!-- OG -->
  <meta property="fb:app_id" content="<?=$conf["contact"]["fb_app_id"];?>" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="<?=$conf["site"]["fullpath"];?>" />
  <meta property="og:title" content="<?=$conf["meta"]["title"][LANG];?>" />
  <meta property="og:image" content="<?=$conf["meta"]["image"]["file"];?>" /><!-- 1200x630 px -->
  <meta property="og:description" content="<?=$conf["meta"]["description"][LANG];?>" />
  <meta property="og:image:alt" content="<?=$conf["meta"]["image"]["description"][LANG];?>" />
  <meta property="og:site_name" content="<?=$conf["meta"]["name"][LANG];?>" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?=$conf["meta"]["title"][LANG];?>">
  <meta name="twitter:image:alt" content="<?=$conf["meta"]["image"]["description"][LANG];?>">
  <meta name="twitter:site" content="<?=$conf["contact"]["twitter"];?>">

  <!-- Favicon https://favicon-generator.org -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?=REALPATH.$conf["dir"]["images"];?>favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?=REALPATH.$conf["dir"]["images"];?>favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?=REALPATH.$conf["dir"]["images"];?>favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?=REALPATH.$conf["dir"]["images"];?>favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114"
    href="<?=REALPATH.$conf["dir"]["images"];?>favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120"
    href="<?=REALPATH.$conf["dir"]["images"];?>favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144"
    href="<?=REALPATH.$conf["dir"]["images"];?>favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152"
    href="<?=REALPATH.$conf["dir"]["images"];?>favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180"
    href="<?=REALPATH.$conf["dir"]["images"];?>favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"
    href="<?=REALPATH.$conf["dir"]["images"];?>favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?=REALPATH.$conf["dir"]["images"];?>favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?=REALPATH.$conf["dir"]["images"];?>favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?=REALPATH.$conf["dir"]["images"];?>favicon/favicon-16x16.png">
  <link rel="manifest" href="<?=REALPATH.$conf["dir"]["images"];?>favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffcc00">
  <meta name="msapplication-TileImage" content="<?=REALPATH.$conf["dir"]["images"];?>favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffcc00">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/<?=$conf["version"]["fontawesome"];?>/css/all.min.css">


  <!-- Custom Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet" type="text/css">

  <!-- Custom CSS -->

  <link rel="stylesheet" type="text/css" media="screen"
    href="<?=$conf["dir"]["styles"].$conf["trece"]["theme"];?>_style.php?sf=<?=$conf["css"]["stickyfooter_h"];?>">
  <?=isset($customCSS)?$customCSS:"";?>


</head>

<body>

  <div class="white-background">

    <header>

      <div id="header">

        <div class="brand">
          <a href="<?=$conf["site"]["realpathLang"];?>">
            <?php /*Blogue*/ ?>
            <img src="<?=REALPATH.$conf["dir"]["images"];?>blogue_logo.svg"
              alt="<?=$conf["site"]["title"][$conf["site"]["lang"]];?>" class="img-responsive">
          </a>
        </div>

        <?php if(count($conf["site"]["langs"])>1) : ?>
        <div class="languages">
          <?php $i=1; foreach($conf["site"]["langs"] as $language) : ?>
          <a href="<?=$conf["site"]["realpath"].$language["url-name"];?>"
            <?=$language["ref-name"]==LANG?" class=\"active\"":"";?>><?=strtoupper($language["ref-name"]);?></a><?=$i<count($conf["site"]["langs"])?"":"";?>
          <?php $i++;?>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <aside class="social-links">
          <ul>
            <li><a title="Comment with Disqus" href="<?=$conf["site"]["fullpath"];?>#disqus_thread"><i class="far fa-comment"></i></a></li>
            <li><a title="Share on Twitter" href="https://twitter.com/share?url=<?=$conf["site"]["fullpath"];?>&text=<?=$conf["meta"]["title"][LANG];?>. <?=$conf["meta"]["description"][LANG];?> (<?=$conf["contact"]["twitter"];?>)" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a title="Share on Facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?=$conf["site"]["fullpath"];?>" target="_blank"><i class="fab fa-facebook"></i></a></li>
          <ul>
        </aside>

      </div>

    </header>

    <nav>
    </nav>

    <article>