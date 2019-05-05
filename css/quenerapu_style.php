<?php

header("content-type:text/css");

$sticky_footer = $_GET["sf"];
$sticky_footer_minwidth_360 = $sticky_footer;
$sticky_footer_minwidth_753 = $sticky_footer;
$sticky_footer_minwidth_1024 = $sticky_footer;
$sticky_footer_minwidth_1200 = $sticky_footer;

$padding_top= 0;
echo <<<CSS
@charset "UTF-8";

/*

# Thank you Håkon Wium Lie (@wiumlie) for inventing CSS.

CSS file

*/

@font-face {
    font-family: "FontAwesome";
    font-weight: normal;
    font-style:  normal;
           src:  url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.eot?v=4.7.0");
           src:  url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.eot?#iefix&v=4.7.0") format("embedded-opentype"),
                 url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2?v=4.7.0") format("woff2"),
                 url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.woff?v=4.7.0") format("woff"),
                 url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.ttf?v=4.7.0") format("truetype"),
                 url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular") format("svg");
}

html{position:relative; min-height:100%;background:#ffcc00;}
body{margin-bottom:{$sticky_footer}px;margin:0;overflow-x:hidden;}

header,footer{width:100%;background:#4a90d9;}
header #title{margin:0 auto;padding-top:.1em;padding-bottom:.7em;}
header #title p{font-size:1.8em;color:white;font-family:"Open Sans";font-weight:800;text-transform:uppercase;}
header #title p a:link{text-decoration:none;color:white;padding-bottom:.1em;}
header #title p a:visited{text-decoration:none;color:white;}
header #title p a:hover{text-decoration:none;color:white;border-bottom:3px solid white;}
header #title p a:active{text-decoration:none;color:white;}
nav{}

article{margin:0 auto;}
article h1{color:#231900;font-family:"Open Sans";font-weight:800;text-transform:uppercase;}
article h2{font-family:"Open Sans";font-weight:800;margin-top:3em;}
article h2.tithome{position:relative;margin-top:1em;}
article h2.tithome:before{content:"\\f073";font-family:FontAwesome;font-style:normal;font-weight:normal;color:#231900;font-size:1em;padding-right:0.5em;}
article h3.nav{font-family:"Open Sans";font-weight:400;margin:3em 0;}
article h3.tithome{position:relative;font-family:"Open Sans";font-weight:400;margin:.2em 0 .2em 2em;padding:0;}
article h3.tithome:before{content:"\\f044";font-family:FontAwesome;font-style:normal;font-weight:normal;color:#231900;font-size:1em;padding-right:0.5em;}
article h2.ptes{margin:2em 0 0 0;padding-bottom:0;} /* http://astronautweb.co/snippet/font-awesome/ */
article h2.ptes:before{content:"\\f0a1";} /* http://astronautweb.co/snippet/font-awesome/ */
article h3.chorrada:before{content:"\\f10d" !important;}
article h3.ptes:before{content:"\\f0f3" !important;}



article h4{font-family:"Open Sans";font-weight:400;}
article h5{font-family:"Open Sans";font-weight:400;}
article h6{color:#231900;font-family:"Crimson Text";font-weight:500;margin:0;padding:0 0 1.2em .7em;}



article pre.smalltxt{white-space:normal;}
article pre.homecomment{margin-left:3.2em;}
article pre#date{position:relative;font-size:1.4em;font-weight:bold;}
article pre#date:before{content:"\\f073";font-family:FontAwesome;font-style:normal;font-weight:normal;color:#231900;font-size:1em;padding-right:0.5em;}



article p,article li{color:#231900;font-family:"Crimson Text";font-weight:500;}
article p:not(.caption):nth-of-type(2):first-letter{font-family:"Open Sans";font-weight:800;float:left;font-size:3.95em;line-height:.8em;margin:.4rem .6rem 0 -.4rem;}
article a:link{font-weight:800;text-decoration:none;color:black;background:rgba(6,49,92,0.1);padding:0 .1em;}
article a:visited{text-decoration:none;color:black;}
article a:hover{text-decoration:none;color:black;background:rgba(6,49,92,0);border-bottom:2px solid black;}
article a:active{text-decoration:none;color:black;}
article img.hascaption + em{font-size:.7em;line-height:.5em;}
article img.hascaption + em a:link{font-weight:400;}
article img.hascaption + em a:visited{}
article img.hascaption + em a:hover{text-decoration:underline;border-bottom:none;}
article img.hascaption + em a:active{}

article img.left{float:left;padding:0 .5em 1em 0;}
article img.right{float:right;padding:0 0 1em .5em;}


/* https://embedresponsively.com */
article .embed-container{position:relative;padding-bottom:56.25%;height:0;overflow:hidden;max-width:100%;}
article .embed-container iframe,article .embed-container object,article .embed-container embed{position:absolute;top:0;left:0;width:100%;height:100%;}

article blockquote {
  background: #f9f9f9;
  border-left: 10px solid #ccc;
  margin: 0 0 1em 0;
  padding: 0.5em 10px;
}
article blockquote:before {
  color: #ccc;
  font-size: 4em;
  line-height: 0.1em;
  margin-right: 0.25em;
  vertical-align: -0.4em;
}
article blockquote p {
  display: inline;
}


article .embedPastebin{margin:5em 0 !important; font-size:.6em;}
article #disqus_thread{margin:8em 0;}

/* Firefox Only */
@-moz-document url-prefix(){
  article p:not(.caption):nth-of-type(2):first-letter{margin:.9rem .6rem 0 -.4rem;}
  }

article img[src*="#full"]{width:100%;height:auto;}
article img[src*="#row-full"]{width:100vw;margin-top:3em;margin-bottom:3em;position:relative;margin-left:-50vw;left:50%;}
article .gist{padding:1.3em 0;}


/* Sticky footer */
footer{position:absolute;padding:30px 0;bottom:0;height:{$sticky_footer}px;}
footer #contact{margin:0 auto;padding-top:.1em;padding-bottom:.7em;}
footer #contact h4{font-family:"Open Sans";font-size:2em;color:white;}
footer #contact h4 a:link{font-weight:400;text-decoration:none;color:white;padding-bottom:.3em;}
footer #contact h4 a:visited{text-decoration:none;color:white;}
footer #contact h4 a:hover{text-decoration:none;color:white;border-bottom:3px solid white;}
footer #contact h4 a:active{text-decoration:none;color:white;}
footer #contact h4.trece{float:right;width:111px;}
footer #contact h4.trece img{width:70px;}


/* vertical smartphones */
@media screen and (min-width:360px) and (max-width:752px){
  body{margin-bottom:{$sticky_footer_minwidth_360}px;}
  header #title,footer #contact{max-width:90%;}
  article{max-width:90%;padding-bottom:5em;}
  article h1{font-size:3.6em;letter-spacing:-.05em;line-height:.85em;margin-bottom:.5em;}
  article h6{font-size:2em;letter-spacing:-.05em;line-height:.85em;margin-bottom:.2em;}
  article p,article li{font-size:1.6em;line-height:1.3em;margin-bottom:.5em;}
  footer #contact h4{font-family:"Open Sans";font-size:1.5em;color:white;}
  footer #contact h4.trece{float:right;width:85px;}
  footer #contact h4.trece img{width:55px;}
  article img.gallery{width:100%;}
  }

/* horizontal smartphones and vertical tablets */
@media screen and (min-width:753px) and (max-width:1023px){
  body{margin-bottom:{$sticky_footer_minwidth_753}px;}
  header #title,footer #contact{max-width:80%;}
  article{max-width:80%;padding-bottom:5em;}
  article h1{font-size:5em;letter-spacing:-.05em;line-height:.85em;margin-bottom:.5em;}
  article h6{font-size:3em;letter-spacing:-.05em;line-height:.85em;margin-bottom:.2em;}
  article p,article li{font-size:1.6em;line-height:1.3em;margin-bottom:.5em;}
  article img.gallery{width:47.9%;}
  }

/* horizontal tablets and normal desktops */
@media screen and (min-width:1024px) and (max-width:1199px){
  body{margin-bottom:{$sticky_footer_minwidth_1024}px;}
  header #title,footer #contact{max-width:600px;}
  article{max-width:600px;padding-bottom:10em;}
  article h1{font-size:5em;letter-spacing:-.05em;line-height:.85em;margin-bottom:.5em;}
  article h6{font-size:2em;letter-spacing:-.05em;line-height:.85em;margin-bottom:.2em;}
  article p,article li{font-size:1.6em;line-height:1.3em;margin-bottom:.5em;}
  article img.gallery{width:47.8%;}
  }

/* big desktops */
@media screen and (min-width:1200px){
  body{margin-bottom:{$sticky_footer_minwidth_1200}px;}
  header #title,footer #contact{max-width:800px;}
  article{max-width:800px;padding-bottom:10em;}
  article h1{font-size:5em;letter-spacing:-.05em;line-height:.95em;margin-bottom:.5em;}
  article h6{font-size:1.8em;letter-spacing:-.05em;line-height:.85em;margin-bottom:.2em;}
  article p,article li{font-size:1.6em;line-height:1.3em;margin-bottom:.5em;}
  article img.gallery{width:48.4%;}
  }

CSS;
?>
