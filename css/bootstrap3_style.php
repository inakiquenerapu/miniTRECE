<?php

header("content-type:text/css");

$navbar_color1 = "#c40268";    # Navbar background
$navbar_color2 = "#f0bfd9";   # Navbar bottomline
$navbar_color3 = "#cccccc";   # Navbar text background hover ?
$navbar_color4 = "#ffffff";   # Navbar texts hover
$success_color = "#28a745";
$danger_color  = "#dc3545";
$font_color    = "#5e5e5e";
$sticky_footer = $_GET["sf"];

$padding_top["desktop"]= 150;
$padding_top["mobile"] = $padding_top["desktop"]-75;
echo <<<CSS
@charset "UTF-8";

/*

# Thank you Håkon Wium Lie (@wiumlie) for inventing CSS.

CSS file

*/

html{position:relative; min-height:100%;}
body{padding-top:{$padding_top["desktop"]}px; margin-bottom:{$sticky_footer}px;font-size:1.3em;}

@media (min-device-width:424px) and (orientation:portrait){
  body{padding-top:{$padding_top["mobile"]}px;margin-bottom:{$sticky_footer}px;font-size:1.6em;}
  .navbar-brand{padding-left:0;}
}

/* Navbar */
.navbar-default{background-color:{$navbar_color1};}
.navbar-brand>img{height:100%;width:auto;}
.navbar-brand{margin-top:.2em;height:54px;max-width:200px;float:left;}
.navbar-toggle{padding:10px;margin:15px 15px 15px 0;}
.navbar-header{max-width:200px;float:left;}
.navbar-text{color:white !important;margin-top:20px;}
.navbar-text a:link{text-decoration:none;color:white;}
.navbar-text a:visited{text-decoration:none;color:white;}
.navbar-text a:hover{text-decoration:none;color:white !important;border-bottom:3px solid white;padding-bottom:6px;}
.navbar-text a:active{text-decoration:none;color:white;}

.main-container{padding-bottom:75px;}

footer{position:absolute;padding:30px 0;bottom:0;width:100%;height:{$sticky_footer}px;background-color:#f5f5f5;border-top:1px solid #ccc;}

CSS;
?>
