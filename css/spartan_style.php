<?php

header("content-type:text/css");

$sticky_footer = $_GET["sf"];

$padding_top= 0;
echo <<<CSS
@charset "UTF-8";

/*

# Thank you Håkon Wium Lie (@wiumlie) for inventing CSS.

CSS file

*/

html{position:relative; min-height:100%;}
body{margin-bottom:{$sticky_footer}px;}

header .logo{max-width:100px;padding:20px 0;}

/* Sticky footer */
footer{position:absolute;padding:30px 0;bottom:0;height:{$sticky_footer}px;}

CSS;
?>
