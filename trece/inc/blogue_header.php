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
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/<?=$conf["version"]["fontawesome"];?>/css/all.min.css">


  <!-- Custom Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet" type="text/css">

  <!-- Custom CSS -->

  <link rel="stylesheet" type="text/css" media="screen"
    href="<?=REALPATH.$conf["dir"]["styles"].$conf["trece"]["theme"];?>_style.php">
  <?=isset($customCSS)?$customCSS:"";?>

</head>

<?php $logo = "PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiID8+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+Cjxzdmcgd2lkdGg9IjE5NXB0IiBoZWlnaHQ9IjE5NXB0IiB2aWV3Qm94PSIwIDAgMTk1IDE5NSIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8ZyBpZD0iIzAwMDAwMGZmIj4KPHBhdGggZmlsbD0iIzAwMDAwMCIgb3BhY2l0eT0iMS4wMCIgZD0iIE0gMC4wMCAwLjAwIEwgMTk1LjAwIDAuMDAgTCAxOTUuMDAgMTk1LjAwIEwgMC4wMCAxOTUuMDAgTCAwLjAwIDAuMDAgTSA1MS40NSA0Ni4zNyBDIDUxLjY4IDU2LjgyIDUxLjE0IDY3LjI5IDUxLjc1IDc3LjczIEMgNTQuNzIgNzMuMzQgNTYuMDMgNjguMDkgNTkuMDAgNjMuNzAgQyA2MS45OCA1OC43NSA2Ni4xNiA1NC4zOCA3MS41NiA1Mi4xMSBDIDc1LjUzIDUwLjI1IDc5Ljk5IDUwLjI4IDg0LjI0IDQ5LjYyIEMgODQuNjggNzYuMDkgODQuMjggMTAyLjU3IDg0LjQ1IDEyOS4wNCBDIDg0LjUzIDEzNi4xNiA4Mi40NSAxNDMuNDAgNzcuNDEgMTQ4LjYyIEMgOTAuNTkgMTQ4Ljc3IDEwMy43OCAxNDguODIgMTE2Ljk3IDE0OC42MCBDIDExMS4xMCAxNDIuNjIgMTA5LjU0IDEzNC4wNiAxMDkuNjEgMTI2LjAxIEMgMTA5Ljc1IDEwMC41NyAxMDkuNDEgNzUuMTMgMTA5Ljc4IDQ5LjcwIEMgMTE0LjExIDUwLjAyIDExOC41NiA1MC4yNiAxMjIuNjQgNTEuODYgQyAxMjcuMjkgNTMuNjUgMTMwLjgwIDU3LjM4IDEzMy45MyA2MS4xMiBDIDEzOC4wMCA2Ni4yMyAxMzkuNTkgNzIuNzQgMTQzLjIyIDc4LjExIEMgMTQzLjY4IDY3LjU1IDE0My4yMyA1Ni45OCAxNDMuNDYgNDYuNDIgQyAxMTIuNzkgNDYuMzIgODIuMTIgNDYuNDIgNTEuNDUgNDYuMzcgWiIgLz4KPC9nPgo8ZyBpZD0iI2ZmZmZmZmZmIj4KPHBhdGggZmlsbD0iI2ZmZmZmZiIgb3BhY2l0eT0iMS4wMCIgZD0iIE0gNTEuNDUgNDYuMzcgQyA4Mi4xMiA0Ni40MiAxMTIuNzkgNDYuMzIgMTQzLjQ2IDQ2LjQyIEMgMTQzLjIzIDU2Ljk4IDE0My42OCA2Ny41NSAxNDMuMjIgNzguMTEgQyAxMzkuNTkgNzIuNzQgMTM4LjAwIDY2LjIzIDEzMy45MyA2MS4xMiBDIDEzMC44MCA1Ny4zOCAxMjcuMjkgNTMuNjUgMTIyLjY0IDUxLjg2IEMgMTE4LjU2IDUwLjI2IDExNC4xMSA1MC4wMiAxMDkuNzggNDkuNzAgQyAxMDkuNDEgNzUuMTMgMTA5Ljc1IDEwMC41NyAxMDkuNjEgMTI2LjAxIEMgMTA5LjU0IDEzNC4wNiAxMTEuMTAgMTQyLjYyIDExNi45NyAxNDguNjAgQyAxMDMuNzggMTQ4LjgyIDkwLjU5IDE0OC43NyA3Ny40MSAxNDguNjIgQyA4Mi40NSAxNDMuNDAgODQuNTMgMTM2LjE2IDg0LjQ1IDEyOS4wNCBDIDg0LjI4IDEwMi41NyA4NC42OCA3Ni4wOSA4NC4yNCA0OS42MiBDIDc5Ljk5IDUwLjI4IDc1LjUzIDUwLjI1IDcxLjU2IDUyLjExIEMgNjYuMTYgNTQuMzggNjEuOTggNTguNzUgNTkuMDAgNjMuNzAgQyA1Ni4wMyA2OC4wOSA1NC43MiA3My4zNCA1MS43NSA3Ny43MyBDIDUxLjE0IDY3LjI5IDUxLjY4IDU2LjgyIDUxLjQ1IDQ2LjM3IFoiIC8+CjwvZz4KPC9zdmc+Cg=="; ?>

<body>

  <div class="white-background">

    <header>

      <div id="header">

        <div class="brand">
          <a href="<?=$conf["site"]["realpathLang"];?>">
            <?php /*Blogue*/ ?>
            <img src="data:image/svg+xml;base64,<?=$logo;?>" alt="<?=$conf["site"]["title"][$conf["site"]["lang"]];?>"
              class="img-responsive">
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
            <li><a title="Comment with Disqus" href="<?=$conf["site"]["fullpath"];?>#disqus_thread"><i
                  class="far fa-comment"></i></a></li>
            <li><a title="Share on Twitter"
                href="https://twitter.com/share?url=<?=$conf["site"]["fullpath"];?>&text=<?=$conf["meta"]["title"][LANG];?>. <?=$conf["meta"]["description"][LANG];?> (<?=$conf["contact"]["twitter"];?>)"
                target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a title="Share on Facebook"
                href="https://www.facebook.com/sharer/sharer.php?u=<?=$conf["site"]["fullpath"];?>" target="_blank"><i
                  class="fab fa-facebook"></i></a></li>
            <ul>
        </aside>

      </div>

    </header>

    <nav>
    </nav>

    <article>
