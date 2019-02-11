<?php if(!defined("TRECE")):header("location:/");die();endif; ?>
<?php

return [

  "trece"             =>  [
# --------------------------------------------------------------------
    "flavour"   =>  "mini",  # http://mini.trece.io/
    "version"   =>  "0.13.13",  # http://mini.trece.io/changelog
    "motto"     =>  "A humble start", # In other words: "Nailing perfection" ;-)
    "theme"     =>  $theme="bootstrap3",
  ],



  "dir"         =>  [
# --------------------------------------------------------------------
    "core"      =>  THE_NAME_OF_THE_CORE_DIR."/",
    "fonts"     =>  "ttf/",
    "includes"  =>  "inc/",
    "libraries" =>  "lib/",
    "images"    =>  "img/",
    "scripts"   =>  "js/",
    "styles"    =>  "css/",
  ],



  "file"                =>  [
# --------------------------------------------------------------------
    "conf"              =>  THE_NAME_OF_THE_CONFIGURATION_FILE,
    "index"             =>  "index",
    "homepage"          =>  "home",
    "homepage_redirect" =>  "",
    "the404"            =>  "404",
    "header"            =>  ($theme==""?"":$theme."_")."header",
    "footer"            =>  ($theme==""?"":$theme."_")."footer",
    "style"             =>  ($theme==""?"":$theme."_")."style",
  ],



  "markdown"  =>  [
# --------------------------------------------------------------------
    "lib"     =>  "parsedown",
    "files"   =>  "Parsedown.php|ParsedownExtra.php|ParsedownExtraPlugin.php",
  ],



  "site"                =>  [
# --------------------------------------------------------------------
    "charset"           =>  "utf-8",  # Ref: http://htmlpurifier.org/docs/enduser-utf8.html
    "x_ua_compatible"   =>  "IE=edge",  # Ref: https://stackoverflow.com/a/14611323
    "viewport"          =>  "width=device-width, initial-scale=1", # Ref: https://developer.mozilla.org/en-US/docs/Mozilla/Mobile/Viewport_meta_tag
    "generator"         =>  "Your favourite code editor",  # Ref: https://creativebloq.com/advice/5-top-code-editors-for-programmers
    "robots"            =>  "index, follow", # Ref: https://www.searchenginejournal.com/best-practices-setting-meta-robots-tags-robots-txt/
    "langs"             =>  "en en-US|es es-ES|gal gl-ES",  # Order matters. First language is the main language
                                                            # Examples: en en-US|es es-ES|gal gl-ES|ar ar-MA rtl|zh zh-CN ttb
//  "langs"             =>  "en en-US",                     # Order matters. First language is the main language
                                                            # Examples: en en-US|es es-ES|gal gl-ES|ar ar-MA rtl|zh zh-CN ttb
    "sections"          =>  [
               "github" =>  [
                 "link" =>  "https://github.com/quenerapu/miniTRECE",
                   "en" =>  "miniTRECE en GitHub",
                   "es" =>  "miniTRECE en GitHub",
                  "gal" =>  "miniTRECE en GitHub",
                            ],
             "download" =>  [
                 "link" =>  "https://github.com/quenerapu/miniTRECE/archive/master.zip",
                   "en" =>  "Download",
                   "es" =>  "Descargar",
                  "gal" =>  "Descargar",
                            ],
                            ],
  ],



  "meta"                =>  [
# --------------------------------------------------------------------
    "name"              =>  [
                   "en" =>  "Site name",
                   "es" =>  "Nombre del sitio web",
                  "gal" =>  "Nome do sitio web",
                            ],
    "title"             =>  [
                   "en" =>  "Site title",
                   "es" =>  "Título del sitio web",
                  "gal" =>  "Título do sitio web",
                            ],
    "description"       =>  [
                   "en" =>  "Description for my website",
                   "es" =>  "Descripción de mi sitio web",
                  "gal" =>  "Descripción do meu sitio web",
                            ],
    "keywords"          =>  "word, another word, three more words, etc",
    "image"             =>  [
                 "file" =>  "https://ep01.epimg.net/elpais/imagenes/2019/02/10/portada/1549801004_128473_1549814932_portada_normal.jpg",
          "description" =>  [
                   "en" =>  "Image description",
                   "es" =>  "Descripción de la imagen",
                  "gal" =>  "Descripción da imaxe",
                            ],
                            ],
  ],



  "contact"         =>  [
# --------------------------------------------------------------------
    "address_line1" =>  "Where the streets have no name",
    "address_line2" =>  "12345 City",
    "address_line3" =>  [
               "en" => "Country (State)",
               "es" => "Región (País)",
              "gal" => "Rexión (País)",
                        ],
    "phone_no"      =>  "+xx xxxxxxxxx",
    "email"         =>  "info@yoursite.com",
    "twitter"       =>  "@yourtwitterusername",
    "instagram"     =>  "@yourinstagramusername",
    "facebook"      =>  "@yourfacebookusername",
    "fb_app_id"     =>  "123456789012345",  # Get yours at https://developers.facebook.com/apps
    "geo"           =>  [
           "region" =>  "xx",         # Georegion http://geo-tag.de/generator
         "latitude" =>  "00.000000",  # Geoposition (latitude) http://geo-tag.de/generator
        "longitude" =>  "00.000000",  # Geoposition (longitude) (ICBM) http://geo-tag.de/generator
        "placename" =>  "City",       # Website's placename http://geo-tag.de/generator
                        ],
  ],



  "version"                             =>  [
# --------------------------------------------------------------------
    "min_php"                           =>  "5.5.0",          # 2013 vintage version of PHP
    "animatecss"                        =>  "3.7.0",          # Animate CSS http://daneden.github.io/animate.css/
    "blueimp_file_upload"               =>  "9.28.0",         # Blueimp jQuery File Upload https://blueimp.github.io/jQuery-File-Upload/
    "blueimp_gallery"                   =>  "2.33.0",         # Blueimp Gallery https://blueimp.github.io/Gallery/
    "blueimp_javascript-canvas-to-blob" =>  "3.14.0",         # Blueimp JavaScript Canvas to Blob https://github.com/blueimp/JavaScript-Canvas-to-Blob/
    "blueimp_JavaScript_Templates"      =>  "3.11.0",         # Blueimp JavaScript Templates https://blueimp.github.io/JavaScript-Templates/
    "blueimp_load_image"                =>  "2.20.1",         # Blueimp JavaScript Load Image https://blueimp.github.io/JavaScript-Load-Image/
    "bootstrap"                         =>  "3.4.0",          # Bootstrap https://getbootstrap.com/
    "bootstrap_colorpicker"             =>  "2.5.3",          # Bootstrap Colortimepicker https://farbelous.io/bootstrap-colorpicker/
    "bootstrap_datetimepicker"          =>  "4.17.47",        # Bootstrap Datetimepicker http://eonasdan.github.io/bootstrap-datetimepicker/
    "bootstrap_maxlength"               =>  "1.7.0",          # Bootstrap MaxLength http://mimo84.github.io/bootstrap-maxlength/
    "bootstrap_select"                  =>  "1.13.5",         # Bootstrap Select https://developer.snapappointments.com/bootstrap-select/
    "bootstrap_switch"                  =>  "3.3.4",          # Bootstrap Switch http://bootstrapswitch.site/
    "bootstrap_toggle"                  =>  "2.2.2",          # Bootstrap Toggle http://bootstraptoggle.com/
    "bootswatch"                        =>  "united",         # Bootswatch theme http://bootswatch.com/
    "croppie"                           =>  "2.6.3",          # Croppie http://foliotek.github.io/Croppie/
    "exif_js"                           =>  "2.3.0",          # Exif.js https://github.com/exif-js/exif-js
    "fontawesome"                       =>  "4.7.0",          # Font Awesome http://fontawesome.io/
    "fullcalendar"                      =>  "3.10.0",         # Fullcalendar https://fullcalendar.io/
    "html5shiv"                         =>  "3.7.3",          # HTML5 Shiv http://github.com/aFarkas/html5shiv
    "hideshowpassword"                  =>  "2.1.1",          # hideShowPassword https://github.com/cloudfour/hideShowPassword
    "i18next"                           =>  "14.0.1",         # i18next https://www.i18next.com/
    "jquery"                            =>  "3.3.1",          # jQuery http://jquery.com/
    "jqueryui"                          =>  "1.12.1",         # jQuery UI http://jqueryui.com/
    "jquery_confirm"                    =>  "3.3.4",          # jQuery Confirm http://craftpip.github.io/jquery-confirm/
    "jquery_form_validator"             =>  "2.3.79",         # jQuery Form Validator http://www.formvalidator.net/
    "jquery_iframe_transport"           =>  "1.0.1",          # jQuery Iframe Transport https://cmlenz.github.io/jquery-iframe-transport/
    "modernizr"                         =>  "2.8.3",          # Modernizr https://modernizr.com/
    "moment"                            =>  "2.24.0",         # Moment JS http://momentjs.com/
    "multiscroll_js"                    =>  "0.2.2",          # Multiscroll JS http://alvarotrigo.com/multiScroll/
    "normalize_css"                     =>  "8.0.1",          # Normalize CSS http://necolas.github.io/normalize.css/
    "pwstrength_bootstrap"              =>  "3.0.2",          # jQuery Password Strength Meter https://github.com/ablanco/jquery.pwstrength.bootstrap
    "respond_js"                        =>  "1.4.2",          # Respond JS http://github.com/scottjehl/Respond/
    "responsive_toolkit"                =>  "2.6.3",          # Responsive Bootstrap Toolkit https://github.com/maciej-gurban/responsive-bootstrap-toolkit
    "selectize"                         =>  "0.12.6",         # Selectize https://selectize.github.io/selectize.js/
    "sprintf"                           =>  "1.1.2",          # sprintf.js https://github.com/alexei/sprintf.js.git
    "tinymce"                           =>  "4.9.3",          # TinyMCE http://www.tinymce.com/
    "touchswipe"                        =>  "1.6.19",         # touchSwipe http://labs.skinkers.com/touchSwipe
    "x-editable"                        =>  "1.5.1",          # X-editable https://vitalets.github.io/x-editable/
  ],



  "css"               =>  [
# --------------------------------------------------------------------
    "stickyfooter_h"  =>  150, # Height (pixels) for the Bootstrap Sticky Footer
  ],




  "logo"      =>  [
# --------------------------------------------------------------------
    "white"   =>  "ZmZj",
    "garnet"  =>  "M0MDI2OD",
    "img"     =>  "PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+PHN2ZyAgIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgICB4bWxuczpjYz0iaHR0cDovL2NyZWF0aXZlY29tbW9ucy5vcmcvbnMjIiAgIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyIgICB4bWxuczpzdmc9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiAgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgICB2aWV3Qm94PSIwIDAgMjgzLjQ1OTY1IDk3LjkwMzQ2OSIgICBoZWlnaHQ9Ijk3LjkwMzQ2NSIgICB3aWR0aD0iMjgzLjQ1OTY2IiAgIHhtbDpzcGFjZT0icHJlc2VydmUiICAgaWQ9InN2ZzM3MTMiICAgdmVyc2lvbj0iMS4xIj48bWV0YWRhdGEgICAgIGlkPSJtZXRhZGF0YTM3MTkiPjxyZGY6UkRGPjxjYzpXb3JrICAgICAgICAgcmRmOmFib3V0PSIiPjxkYzpmb3JtYXQ+aW1hZ2Uvc3ZnK3htbDwvZGM6Zm9ybWF0PjxkYzp0eXBlICAgICAgICAgICByZGY6cmVzb3VyY2U9Imh0dHA6Ly9wdXJsLm9yZy9kYy9kY21pdHlwZS9TdGlsbEltYWdlIiAvPjxkYzp0aXRsZT48L2RjOnRpdGxlPjwvY2M6V29yaz48L3JkZjpSREY+PC9tZXRhZGF0YT48ZGVmcyAgICAgaWQ9ImRlZnMzNzE3IiAvPjxnICAgICB0cmFuc2Zvcm09Im1hdHJpeCgxLjMzMzMzMzMsMCwwLC0xLjMzMzMzMzMsLTI1NC43NDQ1Niw2MDguNzQ0MTIpIiAgICAgaWQ9ImczNzIxIj48ZyAgICAgICB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTY5MiwtMTU4NCkiICAgICAgIGlkPSJnMzcyMyI+PHBhdGggICAgICAgICBpZD0icGF0aDM3MjUiICAgICAgICAgc3R5bGU9ImZpbGw6I2[COLOR]tmaWxsLW9wYWNpdHk6MTtmaWxsLXJ1bGU6ZXZlbm9kZDtzdHJva2U6bm9uZSIgICAgICAgICBkPSJtIDIwODIuMjQ3NSwxOTkxLjY2IGMgMC40NjA3LDEuNDk3MSAxLjM2NzYsMi41NjIzIDIuNzIwNywzLjE5NTcgMS4zNTMxLDAuNjMzNCAyLjcwNjMsMC44NDkzIDQuMDU5NCwwLjY0NzggMS4zNTMxLC0wLjIwMTUgMi40NDcyLC0wLjc5MTcgMy4yODIxLC0xLjc3MDYgMC44MzQ5LC0wLjk3ODkgMC45NjQ0LC0yLjMzMjEgMC4zODg2LC00LjA1OTUgLTEuNDM5NSwtNC4xNDU4IC0zLjMxMDgsLTcuNjQzOSAtNS42MTQsLTEwLjQ5NDEgLTIuMzAzMywtMi44NTAzIC00Ljg2NTYsLTUuMTY3OSAtNy42ODcsLTYuOTUyOSAtMi44MjE0LC0xLjc4NSAtNS43ODY4LC0zLjA4MDYgLTguODk2MSwtMy44ODY3IC0zLjEwOTQsLTAuODA2MiAtNi4xNjExLC0xLjIwOTIgLTkuMTU1MywtMS4yMDkyIC0zLjE2NjksMCAtNi4xMDM1LDAuMzg4NiAtOC44MDk4LDEuMTY2IC0yLjcwNjIsMC43NzczIC01LjA1MjYsMS45MDAyIC03LjAzOTIsMy4zNjg1IC0xLjQ1MDksMS4wNzI0IC0yLjY3OTIsMi4zMDYxIC0zLjY4NDgsMy43MDExIC0xLjAxMzEsLTAuOTI0NSAtMi4wNzA3LC0xLjc2OTUgLTMuMTcyNiwtMi41MzUxIC0yLjczNTEsLTEuOTAwMiAtNS42NTczLC0zLjMxMDkgLTguNzY2NiwtNC4yMzIyIC0zLjEwOTQsLTAuOTIxMyAtNi4yNDc1LC0xLjM4MiAtOS40MTQ0LC0xLjM4MiAtMy4xNjY5LDAgLTYuMDYwMywwLjQzMTkgLTguNjgwMiwxLjI5NTYgLTIuNjE5OSwwLjg2MzcgLTQuODY1NSwyLjA0NDEgLTYuNzM2OSwzLjU0MTIgLTEuMjI5MSwwLjk4MzMgLTIuMjc4MSwyLjA5NyAtMy4xNDcxLDMuMzQxMiAtMS4zMTEzLC0xLjE5NjQgLTIuNjkwOCwtMi4yNTI1IC00LjEzODUsLTMuMTY4NCAtMi44MjE0LC0xLjc4NSAtNS43ODY4LC0zLjA4MDYgLTguODk2MSwtMy44ODY3IC0zLjEwOTQsLTAuODA2MiAtNi4xNjExLC0xLjIwOTIgLTkuMTU1MywtMS4yMDkyIC0zLjE2NjksMCAtNi4xMDM1LDAuMzg4NiAtOC44MDk4LDEuMTY2IC0yLjcwNjIsMC43NzczIC01LjA1MjYsMS45MDAyIC03LjAzOTIsMy4zNjg1IC0xLjA5NzgsMC44MTE0IC0yLjA2ODIsMS43MTUyIC0yLjkxMTEsMi43MTEzIC0wLjM1MywtMC4zODQ3IC0wLjcxMjEsLTAuNzU1OCAtMS4wNzc1LC0xLjExMzUgLTQuMDU5NCwtMy45NzMgLTguNDQ5OSwtNS45NTk2IC0xMy4xNzE1LC01Ljk1OTYgLTEuNzg1LDAgLTMuNDY5MiwwLjI5OTggLTUuMDUyNywwLjg5OTUgLTEuNTgzNCwwLjU5OTYgLTIuOTc5OCwxLjQyNzYgLTQuMTg4OSwyLjQ4MzggLTEuMjA5MiwxLjA1NjMgLTIuMTU5MywyLjM0MTEgLTIuODUwMywzLjg1NDQgLTAuNjkwOSwxLjUxMzMgLTEuMDM2NCwzLjIxNzcgLTEuMDM2NCw1LjExMzQgMCwxLjY2OTkgMC4zNDU1LDMuNTEyNSAxLjAzNjQsNS41Mjc4IGwgMy44MDAzLDEwLjUzNzMgYyAwLjM0NTUsMS4wMzY1IDAuMzg4NywxLjg4NTggMC4xMjk2LDIuNTQ4IC0wLjI1OTEsMC42NjIyIC0wLjY3NjYsMS4yMDkyIC0xLjI1MjQsMS42NDEgLTAuNTc1OCwwLjQzMTkgLTEuMjUyNCwwLjc2MyAtMi4wMjk3LDAuOTkzMyAtMC43NzczLDAuMjMwMyAtMS41MTE1LDAuNDYwNyAtMi4yMDI0LDAuNjkxIGwgLTQuMjk2LC0xMS41MDcgYyAtMC4wNDEsLTAuMTYzIC0wLjA5LC0wLjMyOTIgLTAuMTQ2MywtMC40OTg2IC0yLjQ3NiwtNy4xNDAxIC01LjkwMiwtMTIuNjM5MSAtMTAuMjc4MSwtMTYuNDk3IC00LjM3NjEsLTMuODU3OSAtOS4zNTY4LC01Ljc4NjkgLTE0Ljk0MjEsLTUuNzg2OSAtMi4yNDU2LDAgLTQuMzcsMC4zMTY3IC02LjM3MzIsMC45NTAxIC0yLjAwMzEsMC42MzM0IC0zLjc2MjQsMS41NTQ3IC01LjI3OCwyLjc2MzkgLTEuNTE1NSwxLjIwOTIgLTIuNzMwOCwyLjY3NzUgLTMuNjQ1Nyw0LjQwNDkgLTAuOTE1LDEuNzI3NCAtMS4zNzI1LDMuNjg1MiAtMS4zNzI1LDUuODczMyAwLDEuNzg1IDAuMzQzMiwzLjcxMzkgMS4wMjk3LDUuNzg2OSAwLjYyODgsMS43NTYyIDEuMjI5MiwzLjQ2OTIgMS44MDA5LDUuMDUyNyAwLjU3MTgsMS41ODM1IDEuMTI5NCwzLjE1MjYgMS42NzI4LDQuNzA3MyAwLjM5MTMsMS4xMTk1IDcuMjg5NCwyMC41MTMyIDExLjEyLDMxLjI4MTUgaCAtMTMuMDY0OSBjIC04LjI4OTMsMCAtOC4yODkzLDEyLjQzNDMgMCwxMi40MzQzIGggMjAwLjE2MDggYyA4LjI4OTMsMCA4LjI4OTMsLTEyLjQzNDMgMCwtMTIuNDM0MyBoIC0xNzQuMDM3IGwgLTE1LjgxMzEsLTQ0LjQ3ODggYyAtMC4yMzA0LC0wLjUxOTIgLTAuMzQ1NSwtMS4xNTQ0IC0wLjM0NTUsLTEuOTA1NiAwLC0xLjE1NTIgMC40NDYyLC0yLjEzNyAxLjMzODcsLTIuOTQ1NCAwLjg5MjUsLTAuODA4NCAyLjExNjEsLTEuMjEyNiAzLjY3MDgsLTEuMjEyNiAyLjUzMzUsMCA1LjA1MjYsMS4xMzcyIDcuNTU3NCwzLjQxMTcgMi41MDQ3LDIuMjc0NCA0LjYyMDgsNS44MDEzIDYuMzQ4MiwxMC41ODA1IGwgMC4xNDE0LDAuMzQ5NSA1Ljg1NTUsMTUuODAyIGMgLTEuNDM5NSwxLjc4NSAtMi4xNTkyLDMuODI5MSAtMi4xNTkyLDYuMTMyMyAwLDAuNjMzNCAwLjA3MiwxLjMyNDQgMC4yMTU5LDIuMDczIDAuMTQzOSwwLjc0ODUgMC4zNTk4LDEuNDM5NSAwLjY0NzgsMi4wNzI5IDAuNDYwNiwxLjU1NDYgMS4zMzg3LDIuODIxNCAyLjYzNDMsMy44MDAzIDEuMjk1NSwwLjk3ODkgMi44MzU4LDEuNDY4NCA0LjYyMDgsMS40Njg0IDEuMTUxNiwwIDIuMjQ1NiwtMC4yNzM2IDMuMjgyMSwtMC44MjA2IDEuMDM2NCwtMC41NDcgMS45MDAxLC0xLjI2NjggMi41OTEsLTIuMTU5MyAwLjY5MSwtMC44OTI1IDEuMTY2MSwtMS45MDAyIDEuNDI1MiwtMy4wMjMgMC4yNTkxLC0xLjEyMjggMC4xODcxLC0yLjI4ODggLTAuMjE2LC0zLjQ5OCAxLjIwOTIsLTAuMzQ1NSAyLjY3NzUsLTAuODQ5NCA0LjQwNDksLTEuNTExNSAxLjcyNzQsLTAuNjYyMiAzLjM5NzMsLTEuNTExNSA1LjAwOTUsLTIuNTQ4IDEuNjEyMywtMS4wMzY0IDIuOTc5OCwtMi4yODg4IDQuMTAyNiwtMy43NTcyIDEuMTIyOCwtMS40NjgzIDEuNjg0MiwtMy4yMzg5IDEuNjg0MiwtNS4zMTE4IDAsLTAuNzQ4NiAtMC4wNzIsLTEuNTExNSAtMC4yMTU5LC0yLjI4ODggLTAuMTQzOSwtMC43Nzc0IC0wLjM1OTksLTEuNTk3OSAtMC42NDc4LC0yLjQ2MTYgbCAtNS4wOTU4LC0xNC4xNjUgYyAtMC4yMzAzLC0wLjYzMzQgLTAuMzQ1NSwtMS4yNjY3IC0wLjM0NTUsLTEuOTAwMSAwLC0wLjYzMzQgMC4xNDM5LC0xLjE2NiAwLjQzMTgsLTEuNTk3OSAwLjI4OCwtMC40MzE5IDAuNzQ4NiwtMC42NDc4IDEuMzgyLC0wLjY0NzggMC45MjEzLDAgMS44NzEzLDAuMzc0MyAyLjg1MDIsMS4xMjI4IDAuOTc4OCwwLjc0ODYgMS45NTc3LDEuNzcwNiAyLjkzNjYsMy4wNjYyIDAuOTc4OCwxLjI5NTYgMS45NDMzLDIuODM1OSAyLjg5MzQsNC42MjA5IDAuOTUwMSwxLjc4NSAxLjgyODIsMy43NDI4IDIuNjM0Myw1Ljg3MzMgMC4xMjEsMC40MDgzIDAuMjcyNywwLjc4MSAwLjQ1NTMsMS4xMTc4IGwgMy45NjUyLDExLjQ5MjQgYyAwLjc0ODYsMi4xMzA1IDEuNzU2Miw0LjAxNjMgMy4wMjMsNS42NTczIDEuMjY2OCwxLjY0MTEgMi43MDYyLDMuMDIzMSA0LjMxODUsNC4xNDU5IDEuNjEyMywxLjEyMjggMy4zNTQsMS45NTc3IDUuMjI1NCwyLjUwNDggMS44NzE0LDAuNTQ3IDMuNzU3MSwwLjgyMDUgNS42NTczLDAuODIwNSAyLjQxODMsMCA0LjYzNTIsLTAuMzc0MyA2LjY1MDUsLTEuMTIyOCAyLjAxNTMsLTAuNzQ4NiAzLjcyODMsLTEuNzcwNyA1LjEzOSwtMy4wNjYyIDEuNDEwNywtMS4yOTU2IDIuNTA0OCwtMi44MjE1IDMuMjgyMSwtNC41Nzc3IDAuNzc3MywtMS43NTYyIDEuMTY2LC0zLjY3MDggMS4xNjYsLTUuNzQzNyAwLC0xLjQzOTYgLTAuMjMwMywtMy4wMjMgLTAuNjkwOSwtNC43NTA1IC0wLjU3NTksLTEuOTU3NyAtMS40MjUyLC0zLjcxMzkgLTIuNTQ4LC01LjI2ODYgLTEuMTIyOCwtMS41NTQ3IC0yLjQzMjcsLTIuODc5MSAtMy45Mjk4LC0zLjk3MzEgLTEuNDk3MSwtMS4wOTQxIC0zLjE1MjYsLTEuOTQzNCAtNC45NjYzLC0yLjU0OCAtMS44MTM4LC0wLjYwNDYgLTMuNjk5NiwtMC45MDY5IC01LjY1NzMsLTAuOTA2OSAtMS43Mjc0LDAgLTMuMzU0LDAuMjMwMyAtNC44Nzk5LDAuNjkxIC0xLjUyNTksMC40NjA2IC0yLjkyMjIsMS4wOTQgLTQuMTg5LDEuOTAwMiBsIC0wLjY5MDksLTEuNjQxMSBjIC0wLjI4OCwtMC43NDg2IC0wLjQzMTksLTEuNTU0NyAtMC40MzE5LC0yLjQxODQgMCwtMi4wMTUzIDAuOTIxMywtMy43MTQgMi43NjM4LC01LjA5NTkgMS44NDI2LC0xLjM4MiA0LjM0NzQsLTIuMDcyOSA3LjUxNDMsLTIuMDcyOSAxLjg0MjUsMCAzLjc1NzEsMC4yNzM1IDUuNzQzNiwwLjgyMDUgMS45ODY1LDAuNTQ3IDMuODg2NywxLjM5NjMgNS43MDA1LDIuNTQ4IDEuODEzNywxLjE1MTYgMy40ODM2LDIuNjE5OSA1LjAwOTQsNC40MDQ5IDEuNTA1NSwxLjc2MTEgMi43NDQ4LDMuODg2NyAzLjcxNzgsNi4zNzY1IGwgNC41MTc5LDEzLjMxNjIgYyAwLjc0ODUsMi4yNDU3IDEuNzcwNiw0LjIwMzQgMy4wNjYxLDUuODczMyAxLjI5NTYsMS42Njk4IDIuNzM1MSwzLjAzNzQgNC4zMTg1LDQuMTAyNiAxLjU4MzUsMS4wNjUzIDMuMjgyMSwxLjg1NyA1LjA5NTksMi4zNzUyIDEuODEzOCwwLjUxODMgMy42NDIsMC43Nzc0IDUuNDg0NSwwLjc3NzQgMi4zNjA4LDAgNC41MDU3LC0wLjUxODIgNi40MzQ2LC0xLjU1NDcgMS45MjksLTEuMDM2NSAzLjQ4MzYsLTIuNDQ3MiA0LjY2NCwtNC4yMzIyIDEuMTgwNCwtMS43ODUgMS45MDAyLC0zLjgyOTEgMi4xNTkzLC02LjEzMjQgMC4yNTkxLC0yLjMwMzIgLTAuMDcyLC00Ljc1MDQgLTAuOTkzMywtNy4zNDE2IC0wLjk3ODgsLTIuNTMzNSAtMi4zMTc2LC00LjE2MDIgLTQuMDE2MiwtNC44OCAtMS42OTg2LC0wLjcxOTcgLTMuMjgyMSwtMC44MjA1IC00Ljc1MDQsLTAuMzAyMyAtMS40NjgzLDAuNTE4MyAtMi41NzY3LDEuNDgyNyAtMy4zMjUyLDIuODkzNSAtMC43NDg2LDEuNDEwNyAtMC42OTEsMi45Nzk4IDAuMTcyNyw0LjcwNzIgMC44MDYxLDEuNDk3MSAxLjA5NCwyLjc5MjcgMC44NjM3LDMuODg2NyAtMC4yMzAzLDEuMDk0MSAtMS4wMDc2LDEuNjk4NyAtMi4zMzIsMS44MTM5IC0wLjc0ODUsMC4wNTcgLTEuNDk3MSwtMC4yMTYgLTIuMjQ1NiwtMC44MjA2IC0wLjc0ODYsLTAuNjA0NiAtMS4zMjQ0LC0xLjQ1MzkgLTEuNzI3NCwtMi41NDc5IGwgLTUuMzU1LC0xNC45NDIzIGMgLTAuMzQ1NSwtMS4xNTE2IC0wLjUxODIsLTIuMTg4MSAtMC41MTgyLC0zLjEwOTQgMCwtMi4xODgxIDAuODc4MSwtNC4wMzA3IDIuNjM0MywtNS41Mjc4IDEuNzU2MiwtMS40OTcxIDQuMTMxNCwtMi4yNDU2IDcuMTI1NSwtMi4yNDU2IDEuNjEyMywwIDMuMzI1MywwLjI3MzUgNS4xMzkxLDAuODIwNSAxLjgxMzgsMC41NDcgMy41ODQzLDEuNDI1MSA1LjMxMTgsMi42MzQzIDEuNzI3NCwxLjIwOTIgMy4zNjg0LDIuNzc4MyA0LjkyMzEsNC43MDczIDEuNDEwNywxLjc1MDMgMi42MzE2LDMuODQ0NCAzLjY2MzEsNi4yODIxIGwgNC40MDM1LDEyLjc2MjggYyAwLjc0ODYsMi4xMzA1IDEuNzU2Miw0LjAxNjMgMy4wMjMsNS42NTczIDEuMjY2NywxLjY0MTEgMi43MDYyLDMuMDIzMSA0LjMxODUsNC4xNDU5IDEuNjEyMiwxLjEyMjggMy4zNTQsMS45NTc3IDUuMjI1NCwyLjUwNDggMS44NzE0LDAuNTQ3IDMuNzU3MSwwLjgyMDUgNS42NTczLDAuODIwNSAyLjQxODMsMCA0LjYzNTIsLTAuMzc0MyA2LjY1MDUsLTEuMTIyOCAyLjAxNTMsLTAuNzQ4NiAzLjcyODMsLTEuNzcwNyA1LjEzOSwtMy4wNjYyIDEuNDEwNywtMS4yOTU2IDIuNTA0NywtMi44MjE1IDMuMjgyMSwtNC41Nzc3IDAuNzc3MywtMS43NTYyIDEuMTY2LC0zLjY3MDggMS4xNjYsLTUuNzQzNyAwLC0xLjQzOTYgLTAuMjMwMywtMy4wMjMgLTAuNjkxLC00Ljc1MDUgLTAuNTc1OCwtMS45NTc3IC0xLjQyNTEsLTMuNzEzOSAtMi41NDc5LC01LjI2ODYgLTEuMTIyOCwtMS41NTQ3IC0yLjQzMjgsLTIuODc5MSAtMy45Mjk5LC0zLjk3MzEgLTEuNDk3LC0xLjA5NDEgLTMuMTUyNSwtMS45NDM0IC00Ljk2NjIsLTIuNTQ4IC0xLjgxMzgsLTAuNjA0NiAtMy42OTk2LC0wLjkwNjkgLTUuNjU3MywtMC45MDY5IC0xLjcyNzQsMCAtMy4zNTQxLDAuMjMwMyAtNC44Nzk5LDAuNjkxIC0xLjUyNTksMC40NjA2IC0yLjkyMjIsMS4wOTQgLTQuMTg5LDEuOTAwMiBsIC0wLjY5MSwtMS42NDExIGMgLTAuMjg3OSwtMC43NDg2IC0wLjQzMTgsLTEuNTU0NyAtMC40MzE4LC0yLjQxODQgMCwtMi4wMTUzIDAuOTIxMywtMy43MTQgMi43NjM4LC01LjA5NTkgMS44NDI2LC0xLjM4MiA0LjM0NzMsLTIuMDcyOSA3LjUxNDMsLTIuMDcyOSAxLjg0MjUsMCAzLjc1NzEsMC4yNzM1IDUuNzQzNiwwLjgyMDUgMS45ODY1LDAuNTQ3IDMuODg2NywxLjM5NjMgNS43MDA0LDIuNTQ4IDEuODEzOCwxLjE1MTYgMy40ODM2LDIuNjE5OSA1LjAwOTUsNC40MDQ5IDEuNTI1OSwxLjc4NSAyLjc3ODMsMy45NDQzIDMuNzU3MSw2LjQ3NzkgeiBtIC0xMDAuNjQzLDE2LjA2NTEgYyAtMC45Nzg4LDAgLTEuOTQzMywtMC4zNTk5IC0yLjg5MzMsLTEuMDc5NyAtMC45NTAxLC0wLjcxOTcgLTEuNjg0MywtMS43NDE4IC0yLjIwMjUsLTMuMDY2MiBsIC0xLjgxMzgsLTUuMTgyMiBjIDAuODA2MiwtMC40NjA3IDEuNzQxOCwtMC43Nzc0IDIuODA3MSwtMC45NTAxIDEuMDY1MiwtMC4xNzI4IDIuMTE2LC0wLjE3MjggMy4xNTI1LDAgMS4wMzY0LDAuMTcyNyAxLjk3MjEsMC41NjE0IDIuODA3LDEuMTY2IDAuODM0OSwwLjYwNDYgMS40MjUxLDEuNDgyNyAxLjc3MDYsMi42MzQzIDAuMjMwMywwLjYzMzQgMC4zNDU1LDEuMzI0NCAwLjM0NTUsMi4wNzI5IDAsMS4yMDkyIC0wLjM1OTksMi4yNDU3IC0xLjA3OTYsMy4xMDk0IC0wLjcxOTgsMC44NjM3IC0xLjY4NDMsMS4yOTU2IC0yLjg5MzUsMS4yOTU2IHogbSA4MS42NDE1LDAgYyAtMC45Nzg4LDAgLTEuOTQzMywtMC4zNTk5IC0yLjg5MzQsLTEuMDc5NyAtMC45NSwtMC43MTk3IC0xLjY4NDIsLTEuNzQxOCAtMi4yMDI0LC0zLjA2NjIgbCAtMS44MTM4LC01LjE4MjIgYyAwLjgwNjEsLTAuNDYwNyAxLjc0MTgsLTAuNzc3NCAyLjgwNzEsLTAuOTUwMSAxLjA2NTIsLTAuMTcyOCAyLjExNiwtMC4xNzI4IDMuMTUyNSwwIDEuMDM2NCwwLjE3MjcgMS45NzIxLDAuNTYxNCAyLjgwNywxLjE2NiAwLjgzNDksMC42MDQ2IDEuNDI1MSwxLjQ4MjcgMS43NzA2LDIuNjM0MyAwLjIzMDMsMC42MzM0IDAuMzQ1NSwxLjMyNDQgMC4zNDU1LDIuMDcyOSAwLDEuMjA5MiAtMC4zNTk5LDIuMjQ1NyAtMS4wNzk3LDMuMTA5NCAtMC43MTk3LDAuODYzNyAtMS42ODQyLDEuMjk1NiAtMi44OTM0LDEuMjk1NiB6IiAvPjwvZz48L2c+PC9zdmc+",
],

];
