<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?=$conf["site"]["langs"][LANG]["culture-name1"];?>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="<?=$conf["site"]["langs"][LANG]["culture-name1"];?>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="<?=$conf["site"]["langs"][LANG]["culture-name1"];?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" dir="<?=$conf["site"]["langs"][LANG]["direction"];?>" lang="<?=$conf["site"]["langs"][LANG]["culture-name1"];?>" itemscope itemtype="http://schema.org/LocalBusiness"> <!--<![endif]-->

<head prefix="og: http://ogp.me/ns#">
  <title><?=$conf["meta"]["title"][LANG];?></title>
  <link rel="canonical" href="<?=$conf["site"]["fullpath"];?>" />
  <base href="<?=$conf["site"]["realpath"];?>" target="_self" />
  <meta charset="<?=$conf["site"]["charset"];?>" />
  <meta http-equiv="X-UA-Compatible" content="<?=$conf["site"]["x_ua_compatible"];?>" />
  <meta name="viewport" content="<?=$conf["site"]["viewport"];?>" />
  <meta name="lang" content="<?=$conf["site"]["langs"][LANG]["culture-name1"];?>" />
  <meta name="generator" content="<?=$conf["site"]["generator"];?>" />
  <meta name="robots" content="<?=$conf["site"]["robots"];?>" />
  <meta name="description" content="<?=$conf["meta"]["description"][LANG];?>" />

<!-- OG -->
  <meta property="fb:app_id" content="<?=$conf["contact"]["fb_app_id"];?>" />
  <meta property="og:type" content="website" />
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
  <meta name="twitter:site" content="<?=$conf["site"]["realpath"];?>">
  <meta name="twitter:creator" content="<?=$conf["contact"]["twitter"];?>" />

<!-- Geo Stuff -->
  <meta name="geo.region" content="<?=$conf["contact"]["geo"]["region"];?>">
  <meta name="geo.position" content="<?=$conf["contact"]["geo"]["latitude"].";".$conf["contact"]["geo"]["longitude"];?>">
  <meta name="ICBM" content="<?=$conf["contact"]["geo"]["latitude"].", ".$conf["contact"]["geo"]["longitude"];?>">
  <meta name="geo.placename" content="<?=$conf["contact"]["geo"]["placename"];?>">

<!-- Bootstrap & jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/<?=$conf["version"]["jquery"];?>/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/<?=$conf["version"]["bootstrap"];?>/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/<?=$conf["version"]["bootstrap"];?>/css/bootstrap.min.css">

<!-- Favicon https://favicon-generator.org -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?=$conf["site"]["realpath"].$conf["dir"]["images"];?>favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?=$conf["site"]["realpath"].$conf["dir"]["images"];?>favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?=$conf["site"]["realpath"].$conf["dir"]["images"];?>favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?=$conf["site"]["realpath"].$conf["dir"]["images"];?>favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?=$conf["site"]["realpath"].$conf["dir"]["images"];?>favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?=$conf["site"]["realpath"].$conf["dir"]["images"];?>favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?=$conf["site"]["realpath"].$conf["dir"]["images"];?>favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?=$conf["site"]["realpath"].$conf["dir"]["images"];?>favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?=$conf["site"]["realpath"].$conf["dir"]["images"];?>favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?=$conf["site"]["realpath"].$conf["dir"]["images"];?>favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?=$conf["site"]["realpath"].$conf["dir"]["images"];?>favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?=$conf["site"]["realpath"].$conf["dir"]["images"];?>favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?=$conf["site"]["realpath"].$conf["dir"]["images"];?>favicon/favicon-16x16.png">
  <link rel="manifest" href="<?=$conf["site"]["realpath"].$conf["dir"]["images"];?>favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?=$conf["site"]["realpath"].$conf["dir"]["images"];?>favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

<!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/<?=$conf["version"]["fontawesome"];?>/css/font-awesome.min.css">

<!-- Responsive Bootstrap Toolkit -->
  <script src="https://cdn.jsdelivr.net/npm/responsive-toolkit@<?=$conf["version"]["responsive-toolkit"];?>/src/bootstrap-toolkit.min.js"></script>

<!-- HTML5 Shiv & Respond.js -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/<?=$conf["version"]["html5shiv"];?>/html5shiv.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/<?=$conf["version"]["respond_js"];?>/respond.min.js"></script>
  <![endif]-->

<!-- Custom CSS -->

  <link rel="stylesheet" type="text/css" media="screen" href="<?=$conf["dir"]["styles"].$conf["trece"]["theme"];?>_style.php?sf=<?=$conf["css"]["stickyfooter_h"];?>">
  <?=isset($customCSS)?$customCSS:"";?>

</head>



<body>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
          <div class="navbar-header">
            <a class="navbar-brand" href="<?=$conf["site"]["realpathLang"];?>">
              <img src="<?=
                file_exists($conf["dir"]["images"]."logo.svg") ?
                $conf["dir"]["images"]."logo.svg" :
                (file_exists($conf["dir"]["images"]."logo.png") ?
                $conf["dir"]["images"]."logo.png" :
                "data:image/svg+xml;base64,".str_replace("[COLOR]",$conf["logo"]["white"],$conf["logo"]["img"]))
                ;?>" alt="<?=$conf["site"]["title"][$conf["site"]["lang"]];?>" class="img-responsive">
            </a>
          </div>
          <?php // print_r($conf["site"]);?>
          <p class="navbar-text pull-left"><small>
          <?php $i=1; foreach($conf["site"]["langs"] as $language) : ?>
            <a href="<?=$conf["site"]["realpath"].$language["url-name"];?>"><?=strtoupper($language["ref-name"]);?></a><?=$i<count($conf["site"]["langs"])?" |":"";?>
            <?php $i++;?>
          <?php endforeach; ?>
          </small></p>
          <p class="navbar-text pull-right"><small>
          <?php $i=1; foreach($conf["site"]["sections"] as $section) : ?>
            <a href="<?=(substr($section["link"],0,4)=="http"?$section["link"]:$conf["site"]["realpathLang"].$section["link"]);?>" class="navbar-link"><?=$section[LANG];?></a><?=$i<count($conf["site"]["sections"])?" |":"";?>
            <?php $i++;?>
          <?php endforeach; ?>
          </small></p>
        </div>
      </div>
    </div>
  </nav>



  <div class="container main-container">

    <div class="row">
      <div class="col-xs-12 col-sm-10 col-sm-offset-1">
