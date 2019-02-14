<!DOCTYPE html>
<head>
  <title><?=$conf["meta"]["title"][LANG];?></title>
  <link rel="canonical" href="<?=$conf["site"]["fullpath"];?>" />
  <base href="<?=$conf["site"]["realpath"];?>" target="_self" />
  <meta charset="<?=$conf["site"]["charset"];?>" />
  <meta http-equiv="X-UA-Compatible" content="<?=$conf["site"]["x_ua_compatible"];?>" />
  <meta name="viewport" content="<?=$conf["site"]["viewport"];?>" />
  <meta name="lang" content="<?=$conf["site"]["langs"][LANG]["culture-name1"];?>" />
  <meta name="generator" content="<?=$conf["site"]["generator"];?>" />
  <meta name="robots" content="<?=$conf["site"]["robots"];?>" />

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

<!-- Custom CSS -->

  <link rel="stylesheet" type="text/css" media="screen" href="<?=$conf["dir"]["styles"].$conf["trece"]["theme"];?>_style.php?sf=<?=$conf["css"]["stickyfooter_h"];?>">

</head>

<body>

  <header>

    <a class="brand" href="<?=$conf["site"]["realpathLang"];?>">
    <img src="<?=
      file_exists($conf["dir"]["images"]."logo.svg") ?
      $conf["dir"]["images"]."logo.svg" :
      (file_exists($conf["dir"]["images"]."logo.png") ?
      $conf["dir"]["images"]."logo.png" :
      "data:image/svg+xml;base64,".str_replace("[COLOR]",$conf["logo"]["garnet"],$conf["logo"]["img"]))
      ;?>" alt="<?=$conf["site"]["title"][$conf["site"]["lang"]];?>" class="logo">
    </a>

    <hr>

  </header>
