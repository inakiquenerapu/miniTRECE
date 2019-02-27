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
# Thank you Eric Meyer (@meyerweb) for inventing Eric Meyer’s CSS Reset

CSS file

*/

/* http://meyerweb.com/eric/tools/css/reset/
   v2.0 | 20110126
   License: none (public domain)
*/

html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
/* HTML5 display-role reset for older browsers */
article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block;}
body{line-height:1;}
ol,ul{list-style:none;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,
q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}



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

html{position:relative;min-height:100%;background:white;}
body{margin-bottom:{$sticky_footer}px;margin:0;overflow-x:hidden;}

header,footer{width:100%;background:#ccc;}
#header{display:flex;align-items:center;}
#header::after{content:'';clear:both;display:table;}
#header p.brand,#header p.languages,#header p.menu,{display:inline-block;font-family:Inconsolata;color:black;}
#header p.brand{float:left;}
#header p.brand{font-weight:700;font-size:2em;}
#header p.brand img{width:80px;}
#header p.brand a,#header p.languages a{text-decoration:none;color:black;}
#header p.languages{margin-left:1em;font-weight:400;font-size:.6em;}
#header p.languages a.active{border-bottom:3px solid black;}

#header p.menu{margin-left:auto;font-family:Inconsolata;font-weight:400;font-size:1em;color:black;}
#header p.menu a:link,#header p a:visited,#header p a:hover,#header p a:active{text-decoration:none;color:black;padding-bottom:.1em;}
#header p.menu a:hover{border-bottom:3px solid black;}

nav{}

article{margin:0 auto;padding-bottom:10em;}
article h1,article h2,article h3,article h4,article h5,article h6{color:black;font-family:Inconsolata;font-weight:700;}
article p,article li,article th,article td{color:black;font-family:Inconsolata;font-weight:400;}

article strong{font-weight:bold;}
article code{color:red;}
article img.row{width:100%;}
article img.fullrow{width:100vw;margin-top:3em;margin-bottom:3em;position:relative;margin-left:-50vw;left:50%;}
article img.top{margin-top:0;margin-bottom:0;}
article .gallery img{width:100%;}
article .gallery img.left{float:left;padding:0 .5em 1.3em 0;}
article .gallery img.right{float:right;padding:0 0 1.3em .5em;}
article .gallery::after{content:'';clear:both;display:table;}

article .map-responsive.fullrow{position:relative;overflow:hidden;margin-left:-50vw;left:50%;top:0;width:100vw;padding-bottom:56.25%;}
article .map-responsive.fullrow iframe{width:100vw;position:relative;padding-bottom:3em;}

article .map-responsive.row{position:relative;overflow:hidden;width:100%;padding-bottom:56.25%;}
article .map-responsive.row iframe{width:100%;position:relative;padding-bottom:3em;}

article img.fullrow{}
article ul{padding-left:2rem;list-style-type: none;}



/* Sticky footer */
footer{position:absolute;padding:2em 0;bottom:0;height:{$sticky_footer}px;}
#footer{margin:0 auto;}
#footer p{font-family:Inconsolata;font-weight:400;font-size:1em;color:black;}

/* vertical smartphones */
@media screen and (min-width:360px) and (max-width:752px){
  body{margin-bottom:{$sticky_footer_minwidth_360}px;}
  #header{margin:0 auto;padding-top:1.2em;padding-bottom:1em;}
  #header,#footer,article{max-width:90%;}
  article h1{margin:1.6em 0 .4em 0;font-size:2.4em;}
  article h2{margin:1.3em 0 .4em 0;font-size:2em;}
  article h3{margin:1.2em 0 .3em 0;font-size:1.6em;}
  article h4{margin:1.1em 0 .2em 0;font-size:1.3em;}
  article h5{margin:1em 0 .3em 0;font-size:1.2em;}
  article h6{margin:1em 0 .3em 0;font-size:1.1em;}
  article p,article li,article th,article td{font-size:1.2em;line-height:1.4em;}
  article p,article ul,article ol{margin-bottom:1.4em;}
  article .gallery{margin-bottom:1.4em;}
  }

/* horizontal smartphones and vertical tablets */
@media screen and (min-width:753px) and (max-width:1023px){
  body{margin-bottom:{$sticky_footer_minwidth_753}px;}
  #header{margin:0 auto;padding-top:1.8em;padding-bottom:.3em;}
  #header,#footer,article{max-width:80%;}
  article h1{margin:1.8em 0 .5em 0;font-size:3em;}
  article h2{margin:1.5em 0 .5em 0;font-size:2.4em;}
  article h3{margin:1.3em 0 .5em 0;font-size:2em;}
  article h4{margin:1.2em 0 .3em 0;font-size:1.6em;}
  article h5{margin:1em 0 .3em 0;font-size:1.3em;}
  article h6{margin:1em 0 .3em 0;font-size:1.2em;}
  article p,article li,article th,article td{font-size:1.2em;line-height:1.4em;}
  article p,article ul,article ol{margin-bottom:2em;}
  article .gallery{margin-bottom:2em;}
  article .gallery img{width:48.2%;}
  }

/* horizontal tablets and normal desktops */
@media screen and (min-width:1024px) and (max-width:1199px){
  body{margin-bottom:{$sticky_footer_minwidth_1024}px;}
  #header{margin:0 auto;padding-top:1.8em;padding-bottom:.3em;}
  #header,#footer,article{max-width:600px;}
  article h1{margin:1.8em 0 .5em 0;font-size:3em;}
  article h2{margin:1.5em 0 .5em 0;font-size:2.4em;}
  article h3{margin:1.3em 0 .5em 0;font-size:2em;}
  article h4{margin:1.2em 0 .3em 0;font-size:1.6em;}
  article h5{margin:1em 0 .3em 0;font-size:1.3em;}
  article h6{margin:1em 0 .3em 0;font-size:1.2em;}
  article p,article li,article th,article td{font-size:1.2em;line-height:1.4em;}
  article p,article ul,article ol{margin-bottom:2em;}
  article .gallery{margin-bottom:2em;}
  article .gallery img{width:48.4%;}
  }

/* big desktops */
@media screen and (min-width:1200px){
  body{margin-bottom:{$sticky_footer_minwidth_1200}px;}
  #header{margin:0 auto;padding-top:1.7em;padding-bottom:1.2em;}
  #header,#footer,article{max-width:800px;}
  article h1{margin:1.8em 0 .5em 0;font-size:3em;}
  article h2{margin:1.5em 0 .5em 0;font-size:2.4em;}
  article h3{margin:1.3em 0 .5em 0;font-size:2em;}
  article h4{margin:1.2em 0 .3em 0;font-size:1.6em;}
  article h5{margin:1em 0 .3em 0;font-size:1.3em;}
  article h6{margin:1em 0 .3em 0;font-size:1.2em;}
  article p,article li,article th,article td{font-size:1.2em;line-height:1.4em;}
  article p,article ul,article ol{margin-bottom:2em;}
  article .gallery{margin-bottom:2em;}
  article .gallery img{width:48.6%;}
  }

CSS;
?>
