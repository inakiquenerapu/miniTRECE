

    <div id="disqus_thread"></div>
<?php if(!$noComments) : ?>
    <script>

    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

    var disqus_config = function () {
    this.page.url = "<?=$conf["site"]["fullpath"];?>";  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = "<?=$conf["site"]["fullpath"];?>"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    this.page.title = "<?=$conf["meta"]["title"][LANG];?>";
    };

    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://quenerapu.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<?php endif; ?>

  </article>

  <footer>

    <div id="contact">

      <h4 class="trece">[
        <a href="https://trece.io">
        <img src="<?=
          file_exists($conf["dir"]["images"]."logo.svg") ?
          $conf["dir"]["images"]."logo.svg?".time() :
          (file_exists($conf["dir"]["images"]."logo.png") ?
          $conf["dir"]["images"]."logo.png?".time() :
          "data:image/svg+xml;base64,".str_replace("[COLOR]",$conf["trece"]["logo"]["white"],$conf["trece"]["logo"]["img"]))
          ;?>" alt="<?=$conf["meta"]["title"][LANG];?>" class="img-responsive">
        </a>
      ]</h4>
      <h4>[
        <a href="https://twitter.com/quenerapu"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="https://facebook.com/quenerapu"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
        <a href="https://instagram.com/quenerapu"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="https://t.me/quenerapu"><i class="fa fa-telegram" aria-hidden="true"></i></a>
        <a href="https://github.com/quenerapu"><i class="fa fa-github" aria-hidden="true"></i></a>
        <a href="mailto:q@boaidea.com"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
        <a href="tel"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a>
      ]</h4>

    </div>

  </footer>

<?=BEGRATEFUL;?>
</body>
</html>
