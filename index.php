<?php

# -----------------------------------------------------------------------------------


/*
if($_SERVER["REMOTE_ADDR"]!="0.0.0.0"):

  echo "<h1>Maintenance mode.</h1>";
  die();

endif;
*/


# -----------------------------------------------------------------------------------



  define("TRECE"                                , true);            # Aaaaaaamen brothers and sisters!
  define("THE_NAME_OF_THE_CORE_DIR"             , "trece");         # CHANGE THIS and name the real folder accordingly
  define("THE_NAME_OF_THE_CONFIGURATION_FILE"   , "conf");          # CHANGE THIS and name the real file accordingly
  define("NPE"                                  , false);           # Shows or not the Non-Production Environment flag
  define("DEBUG"                                , false);           # Debuggable or not



# -----------------------------------------------------------------------------------



  if((NPE) || (DEBUG)) :

    header("Cache-Control: no-cache, must-revalidate"); # HTTP/1.1
    header("Expires: Sat, 1 Jul 2000 05:00:00 GMT");    # Date in the past

    ini_set("display_startup_errors",1);
    ini_set("display_errors",1);
    error_reporting(E_ALL);
//  error_reporting(E_ALL ^ E_NOTICE);
//  error_reporting(E_ALL | E_STRICT);
//  error_reporting(E_ERROR | E_WARNING | E_PARSE | E_COMPILE_ERROR);

  else:

    ini_set("display_errors",0);
    ini_set("display_startup_errors",0);
    error_reporting(0);

  endif;



# -----------------------------------------------------------------------------------



  if(!file_exists(THE_NAME_OF_THE_CORE_DIR."/".THE_NAME_OF_THE_CONFIGURATION_FILE.".php")) : # configuration file is required

    echo "<h3>Defined configuration file not found. Bye.</h3>"; die();

  endif;

  $conf = require(THE_NAME_OF_THE_CORE_DIR."/".THE_NAME_OF_THE_CONFIGURATION_FILE.".php");



# -----------------------------------------------------------------------------------



  if (!file_exists($conf["dir"]["images"])    &&  !is_dir($conf["dir"]["images"]))    :   mkdir($conf["dir"]["images"]);      endif;
  if (!file_exists($conf["dir"]["scripts"])   &&  !is_dir($conf["dir"]["scripts"]))   :   mkdir($conf["dir"]["scripts"]);     endif;
  if (!file_exists($conf["dir"]["styles"])    &&  !is_dir($conf["dir"]["styles"]))    :   mkdir($conf["dir"]["styles"]);      endif;
  if (!file_exists($conf["dir"]["includes"])  &&  !is_dir($conf["dir"]["includes"]))  :   mkdir($conf["dir"]["includes"]);    endif;

  if (!file_exists($conf["dir"]["styles"].$conf["file"]["style"].".css"))  :
    $style = fopen($conf["dir"]["styles"].$conf["file"]["style"].".css","w") or die();
    fwrite($style,"/* Thank you Håkon Wium Lie (@wiumlie) for inventing CSS. */\n\n");
    fclose($style);
  endif;

  if (!file_exists($conf["dir"]["scripts"].$conf["file"]["script"].".js"))  :
    $script = fopen($conf["dir"]["scripts"].$conf["file"]["script"].".js","w") or die();
    fwrite($script,"/* Thank you Brendan Eich (@BrendanEich) for inventing JavaScript. */\n\n");
    fclose($script);
  endif;

  if (!file_exists($conf["dir"]["includes"].$conf["site"]["homepage"].".php"))  :
    $home = fopen($conf["dir"]["includes"].$conf["site"]["homepage"].".php","w") or die();
    fwrite($home,"<?php /* html\n*/ ?>\n<h1>Hello World.</h1>\n");
    fclose($home);
  endif;

  if (!file_exists($conf["dir"]["includes"].$conf["file"]["header"].".php"))  :
    $header = fopen($conf["dir"]["includes"].$conf["file"]["header"].".php","w") or die();
    fwrite($header,"[HEADER]\n<hr>\n");
    fclose($header);
  endif;

  if (!file_exists($conf["dir"]["includes"].$conf["file"]["footer"].".php"))  :
    $footer = fopen($conf["dir"]["includes"].$conf["file"]["footer"].".php","w") or die();
    fwrite($footer,"<hr>\n[FOOTER]");
    fclose($footer);
  endif;



# -----------------------------------------------------------------------------------



  if (version_compare(phpversion(),$conf["version"]["min_php"],"<")) : # Minimum PHP version is required

    echo "<h3>PHP version must be ".$conf["version"]["min_php"]." or higher. Bye.</h3>"; die();

  endif;



# -----------------------------------------------------------------------------------



  define("BEGRATEFUL", "

<!--
 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
   @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
            @@@@@
           @@@@@@
          @@@@@@     @@@@@@
          @@@@@      @@@@@@                @@@@@@@@          @@@@@@@@          @@@@@@@@@
         @@@@@       @@@@@@@@@           @@@@@@@@@@@@      @@@@@@@@@@@@      @@@@@@@@@@@@@
        @@@@@@       @@@@@@@@@@@@      @@@@@@    @@@@@    @@@@@@  @@@@@     @@@@@    @@@@@@
        @@@@@       @@@@@  @@@@@@@     @@@@@     @@@@@   @@@@@@   @@@@@    @@@@@@    @@@@@@
       @@@@@        @@@@    @@@@@     @@@@@@@  @@@@@@@  @@@@@@    @@@@    @@@@@@@  @@@@@@@
      @@@@@@       @@@@@   @@@@@@    @@@@@@@@@@@@@@@    @@@@@             @@@@@@@@@@@@@@@   @@@@@
     @@@@@@       @@@@@    @@@@@    @@@@@@  @@@@@      @@@@@@            @@@@@  @@@@@@     @@@@@
     @@@@@       @@@@@    @@@@@    @@@@@@@           @@@@@@@@          @@@@@@@            @@@@@
     @@@@@     @@@@@@     @@@@@   @@@@@@@@@        @@@@@@@@@@@       @@@@@@@@@@        @@@@@@@
      @@@@@@@@@@@@@       @@@@@@@@@@@ @@@@@@@@@@@@@@@@@  @@@@@@@@@@@@@@@@ @@@@@@@@@@@@@@@@@@
        @@@@@@@@            @@@@@@@      @@@@@@@@@@         @@@@@@@@@        @@@@@@@@@@@


# TRECE: A multilingual boilerplate framework for the brave.
# BECAUSE WHAT COULD GO WRONG?
# Version mini_".$conf["trece"]["version"]." '".$conf["trece"]["motto"]."' https://mini.trece.io
# Created by Iñaki Quenerapú (@quenerapu)
# MIT License https://choosealicense.com/licenses/mit/


  BE GRATEFUL. Make someone happy by tweeting at least one of these lines
  =======================================================================
  Thank you Adam Shaw for inventing FullCalendar. https://fullcalendar.io/
  Thank you Alexandru Mărășteanu for porting sprintf to Javascript. https://github.com/alexei/sprintf.js/
  Thank you Alexis Deveria (@fyrd) for inventing Can I use. https://caniuse.com/
  Thank you Anita H Klock for inventing the syntax highlighting. https://en.wikipedia.org/wiki/Syntax_highlighting
  Thank you André Ruffert (@andreruffert) for inventing Rangeslider. http://rangeslider.js.org/
  Thank you Ashley White for inventing Lightbox for Bootstrap (aka ekko-lightbox). http://ashleydw.github.io/lightbox/
  Thank you? Aza Raskin (@aza) for inventing the infinite scroll. https://bit.ly/343v4oR
  Thank you Blake Ross (@blakeross) for inventing Firefox. https://www.firefox.com/
  Thank you Boniface Pereira (@craftpip) for inventing jQuery Confirm. https://craftpip.github.io/jquery-confirm/
  Thank you Brendan Eich (@BrendanEich) for inventing JavaScript. https://www.javascript.com/
  Thank you Brent Matzelle (@bmatzelle) for inventing PHPMailer. https://github.com/PHPMailer/PHPMailer/
  Thank you Brian Reavis (@brianreavis) for inventing Selectize http://selectize.github.io/selectize.js/
  Thank you Caleb Curry (@CalebCurry) for your wonderful tutorials. https://www.youtube.com/user/CalebTheVideoMaker2/
  Thank you Christian Robertson (@cr64) for inventing the Roboto fontface. https://fonts.google.com/specimen/Roboto/
  Thank you Ciarán Walsh (@joomla51) for inventing the Imagehover.css library. http://imagehover.io/
  Thank you CJ Patoilo (@cjpatoilo) for inventing Milligram. https://milligram.io/
  Thank you Cloud Four (@cloudfour) for inventing hideShowPassword. https://cloudfour.github.io/hideShowPassword/
  Thank you Daniel Eden (@_dte) for inventing Animate.css. https://daneden.github.io/animate.css/
  Thank you Daniel Ha (@danielha) and Jason Yan (@jasonyan) for inventing Disqus. https://disqus.com/
  Thank you Dave Gandy (@davegandy) for inventing FontAwesome. https://fontawesome.com/
  Thank you Denis Ineshin (@IonDen666) for inventing Ion RangeSlider. http://ionden.com/a/plugins/ion.rangeSlider
  Thank you Douglas Crockford for inventing JSON. https://www.json.org/
  Thank you Dries Buytaert (@Dries) for inventing Drupal. https://www.drupal.org/
  Thank you Eduardo D. (@eduardo_dx) for creating the Sermepa\Tpv class. https://github.com/ssheduardo/sermepa/
  Thank you Emanuil Rusev (@erusev) for inventing Parsedown. http://parsedown.org/
  Thank you Eric Meyer (@meyerweb) for inventing Eric Meyer’s CSS Reset https://meyerweb.com/eric/tools/css/reset/
  Thank you Fabien Potencier (@fabpot) for inventing Symfony. https://www.symfony.com/
  Thank you Håkon Wium Lie (@wiumlie) for inventing CSS. https://www.w3.org/Style/CSS/
  Thank you Ian Lunn (@IanLunn) for inventing Hover.css. https://ianlunn.co.uk/portfolio/hover-css/
  Thank you Igor Escobar (@igorescobar) for inventing jQuery Mask Plugin. https://igorescobar.github.io/jQuery-Mask-Plugin/
  Thank you Jakob Nielsen (@nngroup) for writing 'Be Succinct! (Writing for the Web)' https://bit.ly/24g1PJn and 'How Users Read on the Web' https://bit.ly/1plpY1w
  Thank you Jakub Vrána (@jakubvrana) for inventing Adminer. https://www.adminer.org/
  Thank you Javi Aguilar (@itsjaviaguilar) for inventing Bootstrap Colorpicker. https://farbelous.io/bootstrap-colorpicker/
  Thank you Jeff Atwood (@codinghorror) and Joel Spolsky (@spolsky) for inventing Stack Overflow. https://stackoverflow.com/
  Thank you Johan Sörlin (@spocke) for inventing TinyMCE. https://www.tinymce.com/
  Thank you John Gruber (@gruber) for inventing Markdown. https://daringfireball.net/projects/markdown/
  Thank you John Resig (@jeresig) for inventing jQuery. https://jquery.com/
  Thank you Josh Buchea (@joshbuchea) for creating HEAD, A free guide to HTML5 <head> elements. https://htmlhead.dev/
  Thank you Justin Hall (@jah) for inventing the blog. http://links.net/vita/web/original.html
  Thank you Linus Torvalds (@Linus__Torvalds) for inventing Linux. https://github.com/torvalds/linux/
  Thank you Maciej Gurban (@maciej_gurban) for inventing Responsive Bootstrap Toolkit. https://github.com/maciej-gurban/responsive-bootstrap-toolkit/
  Thank you Mark Otto (@mdo) and Jacob Thornton (@fat) for inventing Bootstrap. https://getbootstrap.com/
  Thank you Mathias Bynens for inventing he. https://mths.be/he/
  Thank you Matt Delac (@mattdelac_) for inventing WOW.js and Thomas Grainger (@graingert) for bringing it into MIT license. https://wowjs.uk/
  Thank you Matt Mullenweg (@photomatt) for inventing WordPress. https://wordpress.org/
  Thank you Min Hur (@minhur) for inventing Bootstrap Toggle. http://bootstraptoggle.com/
  Thank you Nicolas Gallagher (@necolas) for inventing Normalize.css. https://necolas.github.io/normalize.css/
  Thank you Pasquale Vitiello (@pacovitiello) for inventing Sneakpeekit. https://sneakpeekit.com/
  Thank you Rasmus Lerdorf (@rasmus) for inventing PHP. http://php.net/
  Thank you Richard Stallman for founding the Free Software Foundation. https://www.fsf.org/
  Thank you Rik Schennink (@rikschennink) for inventing Fitty. https://rikschennink.github.io/fitty/
  Thank you Ryan Kirkman (@ryan_kirkman) and Ajax Davis (@ajaxdavis) for inventing cdnjs. https://cdnjs.com/
  Thank you Savoul Pelister (@techlister) for inventing Simple Folder tree with PHP and jQuery. http://techlister.com/
  Thank you Sebastian Tschan for inventing jQuery File Upload. https://github.com/blueimp/jQuery-File-Upload/
  Thank you Silvio Moreto (@silviomoreto) for inventing Bootstrap-Select. https://silviomoreto.github.io/bootstrap-select/
  Thank you Stefan Bohacek (@fourtonfish) for inventing Simple Sharing Buttons Generator. https://simplesharingbuttons.com/
  Thank you Stephen Cole Kleene for inventing regular expressions. https://regex101.com/
  Thank you Silktide (@silktide) for inventing Cookie Consent by Insites https://cookieconsent.insites.com/
  Thank you Ted Nelson (@TheTedNelson) for inventing the hypertext. http://www.hyperland.com/
  Thank you Thomas Boutell (@boutell) for inventing the GD Graphics Library. https://libgd.github.io/
  Thank you Tim Berners-Lee (@timberners_lee) for inventing the Web and HTML. https://www.w3.org/html/
  Thank you Tim Kosse (@TimKosse) for inventing FileZilla. https://filezilla-project.org/
  Thank you Tom Preston-Werner (@mojombo) for inventing GitHub. https://github.com/
  Thank you Unicode Consortium (@unicode) for inventing the Unicode standard. https://unicode.org/
  Thank you Vinton Cerf (@vgcerf) for inventing the Internet. https://es.wikipedia.org/wiki/Vinton_Cerf/
  Thank you Vitaliy Potapov (@vitpotapov) for inventing X-editable. https://vitalets.github.io/x-editable/
  Thank you Ward Cunningham (@WardCunningham) for inventing the wiki. http://wiki.c2.com/
  Thank you Zeno Rocha (@zenorocha) for inventing clipboard.js. https://clipboardjs.com/

-->

");



# -----------------------------------------------------------------------------------



  $conf["site"]["langs"] = explode("|",$conf["site"]["langs"]);

  foreach($conf["site"]["langs"] as $key=>$lang) :

    $langArray = explode(" ",$lang);
    unset($conf["site"]["langs"][$key]);
    $halfCultureName = explode("-",$langArray[1]);
    $cultureName2 = str_replace("-","_",$langArray[1]);
    $conf["site"]["langs"][$langArray[0]] = [
      "ref-name"          => $langArray[0],       # example: gal
      "url-name"          => $langArray[0]."/",   # example: gal/
      "culture-name1"     => $langArray[1],       # example: gl-ES
      "culture-name2"     => $cultureName2,       # example: gl_ES
      "half-culture-name" => $halfCultureName[0], # example: gl
      "date-format"       => $dateformat=(isset($langArray[2])?$langArray[2]:"d/m/Y H:i:s"),
      "date-format2"      => str_replace(array("d","m","Y","-"),array("DD","MM","YYYY","/"),$dateformat),
      "direction"         => (isset($langArray[3])?$langArray[3]:"ltr"),
      ];

  endforeach;

  unset($key,$lang,$langArray,$cultureName2,$halfCultureName);

  $conf["site"]["main_lang"] = array_keys($conf["site"]["langs"])[0];
  $conf["site"]["all_langs"] = implode("|",array_keys($conf["site"]["langs"]));

  if(count($conf["site"]["langs"])>1) : define("MULTILANG",true); endif;



# -----------------------------------------------------------------------------------



  $conf["site"]["dir"] =                dirname(__FILE__);
  if (getenv("DOCKER")) :
  $conf["site"]["scheme"] =             getenv("SITE_SCHEME").":";
  else :
  $conf["site"]["scheme"] =             isset($_SERVER["HTTPS"])&&filter_var($_SERVER["HTTPS"],FILTER_VALIDATE_BOOLEAN)?"https:":"http:";
  endif;
  $conf["site"]["uri"] =                "{$conf["site"]["scheme"]}//{$_SERVER["HTTP_HOST"]}".$_SERVER["REQUEST_URI"];
  $conf["site"]["query"] =              isset($_SERVER["QUERY_STRING"])?$_SERVER["QUERY_STRING"]:""; parse_str($conf["site"]["query"],$conf["site"]["queryArray"]);
  $conf["site"]["queryq"] =             $conf["site"]["query"]!=""?"?".$conf["site"]["query"]:null;
  $conf["site"]["realpath"] =           "{$conf["site"]["scheme"]}//{$_SERVER["HTTP_HOST"]}/".ltrim(str_replace_plus("lo",basename($_SERVER["PHP_SELF"]),"",$_SERVER["SCRIPT_NAME"]),"/");
  unset($conf["site"]["scheme"]);
  $conf["site"]["virtualpath"] =        strcasecmp($conf["site"]["realpath"],str_replace_plus("lo",$conf["site"]["queryq"],"",$conf["site"]["uri"]))!=0?
                                        substr(
                                          str_replace_plus("lo",$conf["site"]["queryq"],"",$conf["site"]["uri"]),
                                          strcasecmp($conf["site"]["realpath"],
                                            str_replace_plus("lo",$conf["site"]["queryq"],"",$conf["site"]["uri"])
                                          )
                                        ):"";
  $conf["site"]["fullpath"] =           $conf["site"]["realpath"].$conf["site"]["virtualpath"];
  $conf["site"]["virtualpathArray"] =   array_values(array_filter(explode("/",$conf["site"]["virtualpath"])));
                                        if(!defined("MULTILANG")):array_unshift($conf["site"]["virtualpathArray"],$conf["site"]["main_lang"]);endif;
  $conf["site"]["lang"] =               array_shift($conf["site"]["virtualpathArray"]);
  $conf["site"]["lang"] =               in_array($conf["site"]["lang"],array_column($conf["site"]["langs"],"ref-name"))?$conf["site"]["lang"]:null;
  $conf["site"]["virtualpathNoLang"] =  implode("/",$conf["site"]["virtualpathArray"]);
  $conf["site"]["realpathLang"] =       $conf["site"]["realpath"].(
                                          !is_null($conf["site"]["lang"])?
                                          (defined("MULTILANG")&&(in_array($conf["site"]["lang"],array_column($conf["site"]["langs"],"ref-name")))?
                                            $conf["site"]["langs"][$conf["site"]["lang"]]["url-name"]:""
                                          )
                                          :"");



# -----------------------------------------------------------------------------------



  define("MARKDOWN",      $conf["site"]["markdown"]);       # Use or not the Markdown syntax
  define("REALPATH",      $conf["site"]["realpath"]);       # example: REALPATH."/css"
  define("REALPATHLANG",  $conf["site"]["realpathLang"]);   # example: REALPATHLANG."/es/user"
  define("LANG",          $conf["site"]["lang"]);           # example: es
  define("QUERYQ",        $conf["site"]["queryq"]);         # example: First with ?, next with &



# -----------------------------------------------------------------------------------



  if(MARKDOWN) :

    $markdownFilesArray = explode("|",$conf["markdown"]["files"]);

    foreach ($markdownFilesArray as $lib) :

      if(!file_exists($conf["dir"]["libraries"].$conf["markdown"]["lib"]."/".$lib)) : # Markdown libraries are required

        echo "<h3>Markdown is set to true but Parsedown library was not found. Bye.</h3><p>Install the Parsedown library OR set markdown to <code>\"false\"</code> in <code>trece/conf.php</code>, line 59.</p>"; die();

      endif;

      require_once($conf["dir"]["libraries"].$conf["markdown"]["lib"]."/".$lib);

    endforeach;

  endif;



# -----------------------------------------------------------------------------------



  if (
      defined("MULTILANG") && (
      is_null(LANG) ||
      !in_array(LANG,array_keys($conf["site"]["langs"]))
      )
     ) : # Stop the presses! It's a MULTILANG site but no language found @ the URL. Reload using $conf["site"]["main_lang"] instead.

      header("location:".REALPATH.$conf["site"]["main_lang"]
//      QUERYQ
        );
      die();

  endif;

  if (
      $conf["site"]["homepage_redirect"] != ""
      && (!isset($conf["site"]["virtualpathArray"][0]))
     ) : # Stop the presses! $conf["site"]["homepage_redirect"] is set, but naked address found @ the URL. Redirecting to $conf["site"]["homepage_redirect"]

      header("location:".REALPATHLANG.$conf["site"]["homepage_redirect"]
//      QUERYQ
      );
      die();

  endif;



# -----------------------------------------------------------------------------------



  header("Content-Type: text/html; charset=".$conf["site"]["charset"]);
  setlocale(LC_ALL,$conf["site"]["langs"][LANG]["culture-name2"]);



# -----------------------------------------------------------------------------------



  $page = false;
  $noComments = false;

  if(!isset($conf["site"]["action"])) :

    $conf["site"]["action"] = !empty($conf["site"]["virtualpathArray"]) ?
                              $conf["site"]["virtualpathArray"][0] :
                              $conf["site"]["homepage"];
                              false;

  endif;

  if($conf["site"]["action"]) :

    if(!$page && file_exists($conf["dir"]["includes"].$conf["site"]["action"]."/".$conf["file"]["index"].".php")) :

      $page = $conf["dir"]["includes"].$conf["site"]["action"]."/".$conf["file"]["index"].".php";

    endif;

    if(!$page && file_exists($conf["dir"]["includes"].implode("-",$conf["site"]["virtualpathArray"]).".php")) :

      $page = $conf["dir"]["includes"].implode("-",$conf["site"]["virtualpathArray"]).".php";

    endif;

    if(!$page && file_exists($conf["dir"]["includes"].implode("/",$conf["site"]["virtualpathArray"]).".php")) :

      $page = $conf["dir"]["includes"].implode("/",$conf["site"]["virtualpathArray"]).".php";

    endif;

    if(!$page && (!isset($conf["site"]["virtualpathArray"][0]) || $conf["site"]["virtualpathArray"][0] == "") && file_exists($conf["dir"]["includes"].$conf["site"]["homepage"].".php")) :

      define("ISHOMEPAGE", true);
      $page = $conf["dir"]["includes"].$conf["site"]["homepage"].".php";
      $noComments = true;

    endif;

    if(!$page && file_exists($conf["dir"]["includes"].$conf["file"]["the404"].".php")) :

      $page = $conf["dir"]["includes"].$conf["file"]["the404"].".php";
      $noComments = true;

    endif;

  endif;



  if(file_exists($page)):

    $syntax = array_slice(file($page),0,1);
    $syntax = explode("<?php /* ",$syntax[0]);
    $syntax = isset($syntax[1])?trim($syntax[1]):"php";
    $metadt = false; #$page does not contain metadata

    if(in_array($syntax,array("html","md"))) :

      $metalines = ["[title]","[datetime]","[description]","[keywords]","[image_file]","[image_description]"];
      $lines = array_slice(file($page,FILE_IGNORE_NEW_LINES),1,6); $metacount = 0;
      foreach($lines as $line) : foreach ($metalines as $metaline) : if (stripos($line,$metaline) !== FALSE) : $metacount++; endif; endforeach; endforeach;

      if($metacount==6) :

        $metalines = str_replace(["[","]"],"",$metalines);
        foreach($lines as $line) :
          $line = explode(":",$line,2);
          if($line[0]!="" && substr($line[0],0,1)=="[") :
            $line[0] = trim($line[0]," [] ");
            $line[1] = trim($line[1]); $line[1] = trim($line[1],"()"); $line[1] = ltrim($line[1],"# "); $line[1] = trim($line[1],'"');
            if(in_array($line[0],$metalines)) : $metadt = true; $conf["meta"]["temp"][$line[0]] = $line[1]; endif;
          endif;
        endforeach;

      endif;

      if($metadt) :

        if($conf["meta"]["temp"]) :

          $langs = explode("|",$conf["site"]["all_langs"]);

          $titles = explode("|",$conf["meta"]["temp"]["title"]);
          $descriptions = explode("|",$conf["meta"]["temp"]["description"]);
          $image_descriptions = explode("|",$conf["meta"]["temp"]["image_description"]);

          foreach ($titles as $title) :

            $lang = preg_match('#\[(.*?)\]#',$title,$lang) ? $lang[1] : LANG;
            $conf["meta"]["title"][$lang] = str_replace_plus("fo","[".$lang."]","",$title);

          endforeach;

          foreach ($descriptions as $description) :

            $lang = preg_match('#\[(.*?)\]#',$description,$lang) ? $lang[1] : LANG;
            $conf["meta"]["description"][$lang] = str_replace_plus("fo","[".$lang."]","",$description);

          endforeach;

          foreach ($image_descriptions as $image_description) :

            $lang = preg_match('#\[(.*?)\]#',$image_description,$lang) ? $lang[1] : LANG;
            $conf["meta"]["image"]["description"][$lang] = str_replace_plus("fo","[".$lang."]","",$image_description);

          endforeach;

          if(isset($conf["meta"]["temp"]["keywords"]))   : $conf["meta"]["keywords"]       = $conf["meta"]["temp"]["keywords"]; endif;
          if(isset($conf["meta"]["temp"]["image_file"])) : $conf["meta"]["image"]["file"]  = $conf["meta"]["temp"]["image_file"];  unset($conf["meta"]["image_file"]); endif;
          if(isset($conf["meta"]["temp"]["datetime"]))   :
                                                           $conf["meta"]["datetime"] = $conf["meta"]["temp"]["datetime"];
                                                           define("DATE",date('Y-m-d', strtotime(str_replace('-', '/', $conf["meta"]["datetime"]))));
          endif;

          unset($conf["meta"]["temp"]);

        endif;

      endif;

      if(file_exists($conf["dir"]["includes"].$conf["file"]["header"].".php")): require_once($conf["dir"]["includes"].$conf["file"]["header"].".php"); else : echo "<!DOCTYPE html>\n<body>\n<pre>\n[ fake header here ] → Build your own in ".$conf["dir"]["includes"].$conf["file"]["header"].".php\n----\n</pre>\n"; endif;
      if(file_exists($conf["dir"]["includes"].$conf["file"]["nav"].".php")): require_once($conf["dir"]["includes"].$conf["file"]["nav"].".php"); endif;

      if($syntax == "md" && MARKDOWN) :

          $page = file($page,FILE_IGNORE_NEW_LINES);
          array_shift($page);
          $page = implode("\n",$page);
          $page = str_replace_plus("fo","*/","",$page);

          if(defined("MULTILANG")) :

            if(strpos($page,"[--".LANG."--]")) :

              $page = strstr($page,"[--".LANG."--]");
              $page = strstr($page,"[--/".LANG."--]",true);
              $page = str_replace_plus("fo","[--".LANG."--]","",$page);

            endif;

          endif;

          if($metadt) : $page = str_replace("[[DATE]]",DATE,$page); endif;

          $markdownStuff = new ParsedownExtraPlugin();
          $markdownStuff->code_block_attr_on_parent = true;
          $markdownStuff->code_text = '<span class="my-code">%s</span>';
          $markdownStuff->table_class = "table table-bordered table-condensed short";
          $markdownStuff = $markdownStuff->text($page);

          if(file_exists($conf["dir"]["includes"].$conf["file"]["md-container"].".php")): require_once($conf["dir"]["includes"].$conf["file"]["md-container"].".php"); else : echo $markdownStuff; endif;

        else :

          require_once($page);

      endif;

      if(file_exists($conf["dir"]["includes"].$conf["file"]["footer"].".php")):
        require_once($conf["dir"]["includes"].$conf["file"]["footer"].".php");
      else :
        echo "\n<pre>\n----\n
+-------------+\n
| FAKE FOOTER |\n
+-------------+\n\n
 ↳ Build a real one in ".$conf["dir"]["includes"].$conf["file"]["footer"].".php\n
 ↳ Build a css file in ".$conf["dir"]["includes"].$conf["file"]["css"].".php\n
 \n</pre>".BEGRATEFUL."\n</body>\n</html>"; endif;

    else :

      require_once($page);

    endif;

  else :

    echo "<pre>404\n</pre>";

  endif;



# -----------------------------------------------------------------------------------



function str_replace_plus($fl,$search,$replace,$subject) { # Replaces FIRST or LAST occurence of a string in a string
  $pos=($fl=="lo"?strrpos($subject,$search):strpos($subject,$search)); # fo = strpos = first occurrence | lo = strrpos = last occurrence
  if($pos!==false) :
    $subject=substr_replace($subject,$replace,$pos,strlen($search));
  endif;
  return $subject;
  }



?>
