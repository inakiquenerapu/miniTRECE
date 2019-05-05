<?php /* html
[title]:              # "[en]Title in English|[es]Título en español|[gal]Título en galego"
[datetime]:           # "2018-02-10 20:47:00"
[description]:        # "[en]Description in English|[es]Descripción en español|[gal]Descripción en galego"
[keywords]:           # "words, palabras e máis palabras"
[image_file]:         # "https://mini.trece.io/img/og/trece.jpg"
[image_description]:  # "[en]Image description|[es]Descripción de la imagen|[gal]Descripción da imaxe"

*/ ?>

<?php if(LANG=="en"): ?>

<h1>Hello world!!</h1>

<p>This page was written in English using <strong>html</strong>.</p>

<?php endif; ?>



<?php if(LANG=="es"): ?>

<h1>¡Hola mundo!</h1>

<p>Esta página está escrita en español usando <strong>html</strong>.</p>

<?php endif; ?>



<?php if(LANG=="gal"): ?>

<h1>Ola mundo!</h1>

<p>Esta páxina foi escrita en galego usando <strong>html</strong>.</p>

<?php endif; ?>
