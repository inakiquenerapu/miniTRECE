<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?=$conf["site"]["langs"][LANG]["culture-name1"];?>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="<?=$conf["site"]["langs"][LANG]["culture-name1"];?>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="<?=$conf["site"]["langs"][LANG]["culture-name1"];?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" dir="<?=$conf["site"]["langs"][LANG]["direction"];?>" lang="<?=$conf["site"]["langs"][LANG]["culture-name1"];?>" itemscope itemtype="http://schema.org/LocalBusiness"> <!--<![endif]-->
<head prefix="og: http://ogp.me/ns#">
  <meta http-equiv="X-UA-Compatible" content="<?=$conf["site"]["x_ua_compatible"];?>" />
  <meta name="viewport" content="<?=$conf["site"]["viewport"];?>" />
  <!--
    The above 2 meta tags *must* come first in the <head>
    to consistently ensure proper document rendering.
    Any other head element should come *after* these tags.
    https://htmlhead.dev
  -->
  <title><?=$conf["meta"]["title"][LANG];?></title>
  <link rel="canonical" href="<?=$conf["site"]["fullpath"];?>" />
  <base href="<?=REALPATH;?>" target="_self" />
  <!-- https://metatags.io/ -->
  <meta charset="<?=$conf["site"]["charset"];?>" />
  <meta name="lang" content="<?=$conf["site"]["langs"][LANG]["culture-name1"];?>" />
  <meta name="generator" content="<?=$conf["site"]["generator"];?>" />
  <meta name="robots" content="<?=$conf["site"]["robots"];?>" />
  <meta name="description" content="<?=htmlspecialchars($lCustom["og_description"][LANG]);?>" />
  <meta name="keywords" content="<?=htmlspecialchars($lCustom["og_keywords"][LANG]);?>" />


  <!-- OG -->
  <meta property="fb:app_id" content="<?=$conf["contact"]["fb_app_id"];?>" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="<?=$conf["site"]["fullpath"];?>" />
  <meta property="og:title" content="<?=htmlspecialchars($conf["meta"]["title"][LANG]);?>" />
  <meta property="og:image" content="<?=$conf["meta"]["image"]["file"];?>" /><!-- 1200x630 px -->
  <meta property="og:description" content="<?=htmlspecialchars($conf["meta"]["description"][LANG]);?>" />
  <meta property="og:image:alt" content="<?=htmlspecialchars($conf["meta"]["image"]["description"][LANG]);?>" />
  <meta property="og:site_name" content="<?=htmlspecialchars($conf["meta"]["name"][LANG]);?>" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?=htmlspecialchars($conf["meta"]["title"][LANG]);?>">
  <meta name="twitter:image:alt" content="<?=htmlspecialchars($conf["meta"]["image"]["description"][LANG]);?>">
  <meta name="twitter:site" content="<?=$conf["contact"]["twitter"];?>">

  <!-- Favicon https://favicon-generator.org -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?=REALPATH.$conf["dir"]["images"]."favicon/apple-icon-57x57.png?".time();?>">
  <link rel="apple-touch-icon" sizes="60x60" href="<?=REALPATH.$conf["dir"]["images"]."favicon/apple-icon-60x60.png?".time();?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?=REALPATH.$conf["dir"]["images"]."favicon/apple-icon-72x72.png?".time();?>">
  <link rel="apple-touch-icon" sizes="76x76" href="<?=REALPATH.$conf["dir"]["images"]."favicon/apple-icon-76x76.png?".time();?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?=REALPATH.$conf["dir"]["images"]."favicon/apple-icon-114x114.png?".time();?>">
  <link rel="apple-touch-icon" sizes="120x120" href="<?=REALPATH.$conf["dir"]["images"]."favicon/apple-icon-120x120.png?".time();?>">
  <link rel="apple-touch-icon" sizes="144x144" href="<?=REALPATH.$conf["dir"]["images"]."favicon/apple-icon-144x144.png?".time();?>">
  <link rel="apple-touch-icon" sizes="152x152" href="<?=REALPATH.$conf["dir"]["images"]."favicon/apple-icon-152x152.png?".time();?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?=REALPATH.$conf["dir"]["images"]."favicon/apple-icon-180x180.png?".time();?>">
  <link rel="icon" type="image/png" sizes="192x192" href="<?=REALPATH.$conf["dir"]["images"]."favicon/android-icon-192x192.png?".time();?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?=REALPATH.$conf["dir"]["images"]."favicon/favicon-32x32.png?".time();?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?=REALPATH.$conf["dir"]["images"]."favicon/favicon-96x96.png?".time();?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?=REALPATH.$conf["dir"]["images"]."favicon/favicon-16x16.png?".time();?>">
  <link rel="manifest" href="<?=REALPATH.$conf["dir"]["images"]."favicon/manifest.json?";?>">
  <meta name="msapplication-TileColor" content="#ffcc00">
  <meta name="msapplication-TileImage" content="<?=REALPATH.$conf["dir"]["images"]."favicon/ms-icon-144x144.png?".time();?>">
  <meta name="theme-color" content="#ffcc00">

<!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/<?=$conf["version"]["fontawesome"];?>/css/font-awesome.min.css">

<!-- Custom Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,700" rel="stylesheet" type="text/css">

<!-- Custom CSS -->

  <link rel="stylesheet" type="text/css" media="screen" href="<?=$conf["dir"]["styles"].$conf["trece"]["theme"];?>_style.php?sf=<?=$conf["css"]["stickyfooter_h"];?>">
  <?=isset($customCSS)?$customCSS:"";?>

</head>

<body>

  <header>

    <div id="title">

      <p>
        <a href="<?=REALPATHLANG;?>">@quenerapu</a>
      </p>

    </div>

  </header>

  <nav>
  </nav>

  <article>
