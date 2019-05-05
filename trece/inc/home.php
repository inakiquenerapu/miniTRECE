<?php /* html
[title]:              # "[en]miniTRECE demo site|[es]Sitio demo de miniTRECE|[gal]Sitio demo de miniTRECE"
[datetime]:           # "2018-02-10 20:47:00"
[description]:        # "[en]Description in English|[es]Descripción en español|[gal]Descripción en galego"
[keywords]:           # "words, palabras e máis palabras"
[image_file]:         # "https://mini.trece.io/img/og/trece.jpg"
[image_description]:  # "[en]Image description|[es]Descripción de la imagen|[gal]Descripción da imaxe"

*/ ?>

<?php if(LANG=="en"): ?>

<p style="background:pink;padding:2em;">Looking for <strong>TRECE</strong>, the simplest multilingual CMS and UMS? <a href="https://trece.io/en" class="btn btn-success" role="button">Click here</a></p>

<h1>miniTRECE <small>Demo site</small></h1>

<p>A very simple, lightweight, minimalist, free (<a href="https://choosealicense.com/licenses/mit/">MIT License</a>) CMS or Website builder tool based on documents on the server (no database) and, this is important, <strong>multilingual-ready and multilingual-friendly</strong> from the very first moment (no plugins needed). Contents can be written with markdown or hmtl syntax.</p>

<div class="alert alert-success" role="alert">
  <p>The best way to understand and customize <strong>miniTRECE</strong> is <i class="fa fa-file-archive-o" aria-hidden="true"></i> <a href="https://github.com/quenerapu/miniTRECE/archive/master.zip" class="alert-link">downloading the files from GitHub</a> and play with them.</p>
</div>

<h4><strong>Ok, some light:</strong></h4>
<p>Files <code>.htaccess</code>, <code>index.php</code> and <code>trece/conf.php</code> (<code>conf.php</code> inside a folder named <code>trece</code>) are the important ones. The remaining files are just content or for customization. Let me suggest you to start a fresh installation of miniTRECE using only these three files and then begin building, adding the other files from the .zip, one by one.</p>

<p><strong>Important:</strong> in order to use Markdown as markup language, constant <code>MARKDOWN</code> must be set to <code>"true"</code> in <code>trece/conf.php</code> line 60, and the Parsedown library (<a href="https://github.com/erusev/parsedown/blob/master/Parsedown.php">Parsedown.php</a>, <a href="https://github.com/erusev/parsedown-extra/blob/master/ParsedownExtra.php">ParsedownExtra.php</a> and <a href="https://github.com/tovic/parsedown-extra-plugin/blob/master/ParsedownExtraPlugin.php">ParsedownExtraPlugin.php</a>) installed in the <code>trece/lib/parsedown/</code> folder. All those files are included in the .zip which can be downloaded GitHub.</p>

<p>Folder <code>trece/inc/</code> is where all the content is stored. For instance: place at <code>trece/inc/</code> a file named <code>test.php</code> with a simple «Hello» as content and then add <code>test</code> to the url at your browser (something like <code>yourdomain.com/en/test</code> if your site is multilingual or <code>yourdomain.com/test</code> if your site is monolingual). You're done! Demo here: <a href="https://mini.trece.io/en/test">https://mini.trece.io/en/test</a>.</p>

<p>Files <code>trece/inc/html-sample.php</code> (<a href="<?=REALPATHLANG;?>html-sample">link</a>), <code>trece/inc/markdown-sample.php</code> (<a href="<?=REALPATHLANG;?>markdown-sample">link</a>) and <code>trece/inc/demo.php</code> (<a href="<?=REALPATHLANG;?>demo">link</a>) will show you how to build content in both markup languages. In these two files pay special attention to the first 7 lines. What you write there is the content for the <code>meta</code> fields in the header, needed to successfuly share your page in places like Facebook and Twitter. Idea: test these pages in <a href="https://developers.facebook.com/tools/debug">Facebook debugger</a> and <a href="https://cards-dev.twitter.com/validator">Twitter card validator</a>.</p>

<p>Files <code>trece/inc/minimal_header.php</code>, <code>trece/inc/minimal_footer.php</code> and <code>css/minimal_style.php</code> show you the minimal theme, a starting point for developing your own miniTRECE theme.</p>

<?php endif; ?>



<?php if(LANG=="es"): ?>

<p style="background:pink;padding:2em;">¿Buscas <strong>TRECE</strong>, el más simple CMS y UMS plurilingüe? <a href="https://trece.io/es" class="btn btn-success" role="button">Clic aquí</a></p>

<h1>miniTRECE <small>Sitio demo</small></h1>

<p>Una muy simple, ligera, minimalista, libre y gratuita (<a href="https://choosealicense.com/licenses/mit/">MIT License</a>) herramienta para construir sitios web o CMS basado en documentos en el servidor (no base de datos) y, esto es importante, <strong>preparado y amistoso para crear sitios web multilingües</strong> desde el primer momento (no hay que añadir plugins). Los contenidos pueden ser escritos usando sintaxis markdown o hmtl.</p>

<div class="alert alert-success" role="alert">
  <p>El mejor modo de comprender y personalizar <strong>miniTRECE</strong> es <i class="fa fa-file-archive-o" aria-hidden="true"></i> <a href="https://github.com/quenerapu/miniTRECE/archive/master.zip" class="alert-link">descargando los archivos de GitHub</a> y jugando con ellos.</p>
</div>

<h4><strong>Ok, un poco de luz:</strong></h4>
<p>Los archivos <code>.htaccess</code>, <code>index.php</code> y <code>trece/conf.php</code> (<code>conf.php</code> dentro de una carpeta llamada <code>trece</code>) son los importantes. Todos los demás archivos son simplemente contenido o para personalización. Permíteme sugerirte que comiences una instalación desde cero de miniTRECE usando sólo estos tres archivos y comienza a construir añadiendo los otros archivos del .zip, uno a uno.</p>

<p><strong>Importante:</strong> para poder usar Markdown como lenguaje de marcado, la constante <code>MARKDOWN</code> debe ser puesta como <code>"true"</code> en <code>trece/conf.php</code> línea 60, y la biblioteca Parsedown (<a href="https://github.com/erusev/parsedown/blob/master/Parsedown.php">Parsedown.php</a>, <a href="https://github.com/erusev/parsedown-extra/blob/master/ParsedownExtra.php">ParsedownExtra.php</a> y <a href="https://github.com/tovic/parsedown-extra-plugin/blob/master/ParsedownExtraPlugin.php">ParsedownExtraPlugin.php</a>) instalada en la carpeta <code>trece/lib/parsedown/</code>. Todos estos archivos están incluídos en el .zip que puedes descargar de GitHub.</p>

<p>La carpeta <code>trece/inc/</code> es donde se almacena todo el contenido. Por ejemplo: coloca en <code>trece/inc/</code> un archivo llamado <code>test.php</code> con un simple «Hello» como contenido y entonces añade <code>test</code> a la url de tu navegador (algo como <code>tudominio.com/es/test</code> si tu sitio web es multilingüe o <code>tudominio.com/test</code> si tu sitio es monolingüe). ¡Y ya está! Demo aquí: <a href="https://mini.trece.io/en/test">https://mini.trece.io/es/test</a>.</p>

<p>Los archivos <code>trece/inc/html-sample.php</code> (<a href="<?=REALPATHLANG;?>html-sample">link</a>), <code>trece/inc/markdown-sample.php</code> (<a href="<?=REALPATHLANG;?>markdown-sample">link</a>) e <code>trece/inc/demo.php</code> (<a href="<?=REALPATHLANG;?>demo">link</a>) te mostrarán como construir contenido en ambos lenguajes de marcado. En esos dos archivos presta especial atención a las 7 primeras líneas. Lo que escribas allí es el contenido para los campos <code>meta</code> del header, necesarios para compartir con éxito tu página en sitios como Facebook y Twitter. Idea: prueba estas páginas en <a href="https://developers.facebook.com/tools/debug">Facebook debugger</a> y <a href="https://cards-dev.twitter.com/validator">Twitter card validator</a>.</p>

<p>Los archivos <code>trece/inc/minimal_header.php</code>, <code>trece/inc/minimal_footer.php</code> y <code>css/minimal_style.php</code> muestran un tema de mínimos, un punto de partida para desarrollar tu propio tema para miniTRECE.</p>

<?php endif; ?>



<?php if(LANG=="gal"): ?>

<p style="background:pink;padding:2em;">Buscas <strong>TRECE</strong>, o máis simple CMS e UMS plurilingüe? <a href="https://trece.io/gal" class="btn btn-success" role="button">Clic aquí</a></p>

<h1>miniTRECE <small>Sitio demo</small></h1>

<p>Unha moi simple, lixeira, minimalista, libre e gratuita (<a href="https://choosealicense.com/licenses/mit/">MIT License</a>) ferramenta para construir sitios web ou CMS baseado en documentos no servidor (non base de datos) e (isto é importante) <strong>listo e amistoso para crear sitios web multilingües</strong> desde o primeiro momento (non hai que engadir plugins). Os contidos poden ser escritos usando sintaxe markdown ou hmtl.</p>

<div class="alert alert-success" role="alert">
  <p>O millor modo de comprender e personalizar <strong>miniTRECE</strong> é <i class="fa fa-file-archive-o" aria-hidden="true"></i> <a href="https://github.com/quenerapu/miniTRECE/archive/master.zip" class="alert-link">descargando os archivos de GitHub</a> e xogando con eles.</p>
</div>

<h4><strong>Ok, un chisco de luz:</strong></h4>
<p>Os archivos <code>.htaccess</code>, <code>index.php</code> e <code>trece/conf.php</code> (<code>conf.php</code> dentro dun cartafol chamado <code>core</code>) son os importantes. Todos os demáis arquivos son simplemente contido ou para personalización. Déixame suxerir que comeces cunha instalación desde cero de miniTRECE usando só estes tres arquivos e logo comeza a construir engadindo os outros arquivos do .zip, un a un.</p>

<p><strong>Importante:</strong> para poder usar Markdown coma linguaxe de marcado, a constante <code>MARKDOWN</code> debe ser posta como <code>"true"</code> en <code>index.php</code> liña 8, e a biblioteca Parsedown (<a href="https://github.com/erusev/parsedown/blob/master/Parsedown.php">Parsedown.php</a>, <a href="https://github.com/erusev/parsedown-extra/blob/master/ParsedownExtra.php">ParsedownExtra.php</a> e <a href="https://github.com/tovic/parsedown-extra-plugin/blob/master/ParsedownExtraPlugin.php">ParsedownExtraPlugin.php</a>) instalada no cartafol <code>trece/lib/parsedown/</code>. Todos estes arquivos están incluídos no .zip que podes descargar de GitHub.</p>

<p>O cartafol <code>trece/inc</code> é onde se almacena todo o contenido. Por exemplo: deixa en <code>trece/inc/</code> un arquivo chamado <code>test.php</code> cun simple «Hello» como contido e de seguido engade <code>test</code> á url no teu navegador (algo como <code>oteudominio.gal/gal/test</code> se o teu tu sitio web é multilingüe ou <code>oteudominio.gal/test</code> se o teu sitio é monolingüe). E xa está! Demo aquí: <a href="<?=REALPATHLANG;?>test"><?=REALPATHLANG;?>test</a>.</p>

<p>Os arquivos <code>trece/inc/html-sample.php</code> (<a href="<?=REALPATHLANG;?>html-sample">ligazón</a>), <code>trece/inc/markdown-sample.php</code> (<a href="<?=REALPATHLANG;?>markdown-sample">ligazón</a>) e <code>trece/inc/demo.php</code> (<a href="<?=REALPATHLANG;?>demo">ligazón</a>) ensinarante como construir contido en ambas as dúas linguaxes de marcado. Neses dous arquivos préstalle especial atención ás 7 primeiras líneas. O que escribas alí é o contenido para os campos <code>meta</code> do header, necesarios para compartir con éxito a túa páxina en sitios como Facebook e Twitter. Idea: proba estas páxinas en <a href="https://developers.facebook.com/tools/debug">Facebook debugger</a> y <a href="https://cards-dev.twitter.com/validator">Twitter card validator</a>.</p>

<p>Os arquivos <code>trece/inc/minimal_header.php</code>, <code>trece/inc/minimal_footer.php</code> e <code>css/minimal_style.php</code> amosan como sería un tema de mínimos, un punto de partida para desenvolver o teu propio tema para miniTRECE.</p>

<?php endif; ?>
