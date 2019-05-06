<?php

header("content-type:text/css");


$padding_top= 0;
echo <<<CSS
@charset "UTF-8";

/*

# Thank you Håkon Wium Lie (@wiumlie) for inventing CSS.
# Thank you Eric Meyer (@meyerweb) for inventing Eric Meyer’s CSS Reset

# CSS file

*/

/* http://meyerweb.com/eric/tools/css/reset/
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}

/* HTML5 display-role reset for older browsers */

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
    display: block;
}

body {
    line-height: 1;
}

ol, ul {
    list-style: none;
}

blockquote, q {
    quotes: none;
}

blockquote:before, blockquote:after, q:before, q:after {
    content: '';
    content: none;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}

/* Title */
@font-face {
  font-family: 'Adamina';
  font-style: normal;
  font-weight: 400;
  src: local('Adamina Regular'), local('Adamina-Regular'), url(https://fonts.gstatic.com/s/adamina/v12/j8_r6-DH1bjoc-dwi-3UEBt7Fns.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* Main content */
/* cyrillic-ext */
@font-face { 
  font-family: 'Lora';
  font-style: normal;
  font-weight: 400;
  src: local('Lora Regular'), local('Lora-Regular'), url(https://fonts.gstatic.com/s/lora/v13/0QIvMX1D_JOuMwf7I_FMl_GW8g.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 400;
  src: local('Lora Regular'), local('Lora-Regular'), url(https://fonts.gstatic.com/s/lora/v13/0QIvMX1D_JOuMw77I_FMl_GW8g.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 400;
  src: local('Lora Regular'), local('Lora-Regular'), url(https://fonts.gstatic.com/s/lora/v13/0QIvMX1D_JOuMwX7I_FMl_GW8g.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 400;
  src: local('Lora Regular'), local('Lora-Regular'), url(https://fonts.gstatic.com/s/lora/v13/0QIvMX1D_JOuMwT7I_FMl_GW8g.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 400;
  src: local('Lora Regular'), local('Lora-Regular'), url(https://fonts.gstatic.com/s/lora/v13/0QIvMX1D_JOuMwr7I_FMl_E.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* Subtitles, footers */
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v16/mem8YaGs126MiZpBA-UFWJ0bf8pkAp6a.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v16/mem8YaGs126MiZpBA-UFUZ0bf8pkAp6a.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v16/mem8YaGs126MiZpBA-UFWZ0bf8pkAp6a.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v16/mem8YaGs126MiZpBA-UFVp0bf8pkAp6a.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v16/mem8YaGs126MiZpBA-UFWp0bf8pkAp6a.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v16/mem8YaGs126MiZpBA-UFW50bf8pkAp6a.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v16/mem8YaGs126MiZpBA-UFVZ0bf8pkAg.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

html{position:relative;min-height:100%;background:#fafafa;}
body{margin-bottom:150px;margin:0;overflow-x:hidden;}

header,footer{width:100%;}
header{
  height: 65px;
  position: fixed;
  top: 0;
  background: #fff;
  opacity: .95;
  box-shadow: 0 2px 6px 6px #cacaca25;
  z-index: 1;
}

#header{ 
  display: flex;
  align-items: center;
}
#header::after {
  content: '';
  clear: both;
  display: table;
}
#header div.brand {
  line-height: 0;
}
#header div.brand, 
#header div.languages {
  display: inline-block;
  font-family: 'Open Sans';
  color: black;
}
#header div.brand img{height:35px;}
#header div.brand a,
#header div.languages a {
  text-decoration: none;
  color: black;
}
#header div.languages {
  margin-left: auto;
  font-family: 'Open Sans';
  font-weight: 400;
  font-size: 0.8em;
  color: black;
}
#header div.languages a:link,
#header p a:visited,
#header p a:hover,
#header p a:active {
  text-decoration: none;
  color: black;
  padding-bottom: .1em;
}
#header div.languages a:hover {
  border-bottom: 1px solid black;
}
#header div.languages a.active {
  border-bottom: 1px solid black;
}
#header aside.social-links {
  position: fixed;
  margin-top: 200px;
  padding-left: 6.5px;
  width: 35px;
  font-size: 22px;
}
#header aside.social-links a:link,
#header aside.social-links a:visited,
#header aside.social-links a:hover,
#header aside.social-links a:active {
  text-decoration: none;
  color: #525252;
}
#header aside ul li {
  padding-bottom: 22px;
}

nav{}

.white-background {
  width: 100%;
  background: white;
  /* padding-bottom: 5em; */
}

article{
  margin: 0 auto;
  padding-top: 65px;
}

article h1 {
  padding-bottom: 20px;
}

article p, article li, article th, article td {
    font-size: 19px;
    line-height: 1.8em;
}

article h1, article h2, article h3, article h4, article h5, article h6 {
    color: black;
    font-family: 'Adamina';
}

article p, article li, article th, article td {
    color: black;
    font-family: 'Lora';
    font-weight: 400;
}

article strong {
    font-weight: bold;
}

article code {
    color: red;
}

article img.row {
    width: 100%;
}

article img.fullrow {
    width: 100vw;
    margin-top: 3em;
    margin-bottom: 3em;
    position: relative;
    margin-left: -50vw;
    left: 50%;
}

article img.top {
    margin-top: 0;
    margin-bottom: 0;
}

article .gallery img {
    width: 100%;
}

article .gallery img.left {
    float: left;
    padding: 0 .5em 1.3em 0;
}

article .gallery img.right {
    float: right;
    padding: 0 0 1.3em .5em;
}

article .gallery::after {
    content: '';
    clear: both;
    display: table;
}

article .map-responsive.fullrow {
    position: relative;
    overflow: hidden;
    margin-left: -50vw;
    left: 50%;
    top: 0;
    width: 100vw;
    padding-bottom: 56.25%;
}

article .map-responsive.fullrow iframe {
    width: 100vw;
    position: relative;
    padding-bottom: 3em;
}

article .map-responsive.row {
    position: relative;
    overflow: hidden;
    width: 100%;
    padding-bottom: 56.25%;
}

article .map-responsive.row iframe {
    width: 100%;
    position: relative;
    padding-bottom: 3em;
}

article img.fullrow {}

article ul {
    padding-left: 2rem;
    list-style-type: none;
}

/* Footer */

footer {
    padding: 2em 0;
}

#footer {
    margin: 0 auto;
    display: table;
}

#footer p {
    font-family: 'Open Sans';
    color: #687a86;
    font-weight: 400;
    font-size: 0.75em;
    line-height: 1.5em;
    display: table-cell;
    text-align: center;
    vertical-align: middle;
    height: 1em;
}

#footer a:link, #footer a:visited, #footer a:hover, #footer a:active {
    text-decoration: none;
    color: #000;
}

#header div.languages a:link {
    margin-left: 10px;
}

@media screen and (max-width:1099px) {
    #header aside.social-links {
        display: none;
    }
    header {
        height: 56px;
    }
    #header {
        height: 56px;
        margin: 0 auto;
    }
    article {
        padding-top: 56px;
    }
}

/* vertical smartphones */

@media screen and (min-width:360px) and (max-width:752px) {
    article {
        padding-bottom: 40px;
    }
    #header, #footer, article {
        max-width: 90%;
    }
    #disqus_thread {
        margin: auto;
        max-width: 90%;
        padding-bottom: 40px;
    }
    article h1 {
        margin: 40px 0 .4em 0;
        font-size: 2em;
    }
    article h2 {
        margin: 1.3em 0 .4em 0;
        font-size: 1.8em;
    }
    article h3 {
        margin: 1.2em 0 .3em 0;
        font-size: 1.6em;
    }
    article h4 {
        margin: 1.1em 0 .2em 0;
        font-size: 1.3em;
    }
    article h5 {
        margin: 1em 0 .3em 0;
        font-size: 1.2em;
    }
    article h6 {
        margin: 1em 0 .3em 0;
        font-size: 1.1em;
    }
    article p, article ul, article ol {
        padding-bottom: 1.2em;
    }
    article .gallery {
        margin-bottom: 1.4em;
    }
}

/* horizontal smartphones and vertical tablets */

@media screen and (min-width:753px) and (max-width:1099px) {
    article {
        padding-bottom: 75px;
    }
    #header, #footer, article {
        max-width: 80%;
    }
    #disqus_thread {
        margin: auto;
        max-width: 80%;
        padding-bottom: 75px;
    }
    article h1 {
        margin: 40px 0 .5em 0;
        font-size: 2.3em;
    }
    article h2 {
        margin: 1.5em 0 .5em 0;
        font-size: 2.2em;
    }
    article h3 {
        margin: 1.3em 0 .5em 0;
        font-size: 2em;
    }
    article h4 {
        margin: 1.2em 0 .3em 0;
        font-size: 1.6em;
    }
    article h5 {
        margin: 1em 0 .3em 0;
        font-size: 1.3em;
    }
    article h6 {
        margin: 1em 0 .3em 0;
        font-size: 1.2em;
    }
    article p, article ul, article ol {
        padding-bottom: 1.2em;
    }
    article .gallery {
        margin-bottom: 2em;
    }
    article .gallery img {
        width: 48.2%;
    }
}

/* big desktops */

@media screen and (min-width:1100px) {
    #header {
        height: 65px;
        margin: 0 auto;
    }
    article {
        max-width: 700px;
        padding-bottom: 75px;
    }
    #header, #footer {
        max-width: 1032px;
    }
    #disqus_thread {
        margin: auto;
        max-width: 700px;
        padding-bottom: 75px;
    }
    article h1 {
        margin: 40px 0 .5em 0;
        font-size: 2.3em;
    }
    article h2 {
        margin: 1.5em 0 .5em 0;
        font-size: 2.2em;
    }
    article h3 {
        margin: 1.3em 0 .5em 0;
        font-size: 2em;
    }
    article h4 {
        margin: 1.2em 0 .3em 0;
        font-size: 1.6em;
    }
    article h5 {
        margin: 1em 0 .3em 0;
        font-size: 1.3em;
    }
    article h6 {
        margin: 1em 0 .3em 0;
        font-size: 1.2em;
    }
    article p, article ul, article ol {
        padding-bottom: 1.2em;
    }
    article .gallery {
        margin-bottom: 2em;
    }
    article .gallery img {
        width: 48.6%;
    }
}

CSS;
?>
