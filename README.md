# miniTRECE

A very simple, lightweight, minimalist, free (GNU GPLv3) CMS or Website builder tool based on documents on the server (no database) and (this is important) multilingual-ready and multilingual-friendly from the very first moment (no plugins needed). Contents can be written with markdown or hmtl syntax.

Files `.htaccess`, `index.php` and `core/conf.php` are the important ones. All the other files are just for content or customization. Let me suggest you to start a fresh install of miniTRECE using only these three files and then begin building, adding the other files from the .zip, one by one.

Folder `inc` is where all the content is stored. For instance: place at `inc/` a file named `test.php` with a simple «Hello» as content and then add test to the url at your browser (something like `yourdomain.com/en/test` if your site is multilingual or `yourdomain.com/test` if your site is monolingual). You're done! (Demo here: https://mini.trece.io/en/test).

Files `inc/html-sample.php` and `inc/markdown-sample.php` will show you how to build content in both markup languages. In these two files pay special attention to the first 7 lines. What you write there is the content for the meta fields in the header, needed to successfuly share your page in places like Facebook and Twitter. Idea: test these pages in Facebook debugger https://developers.facebook.com/tools/debug and Twitter card validator https://cards-dev.twitter.com/validator.

Important: in order to use Markdown as markup language, constant MARKDOWN must be set to "true" in index.php and the Parsedown library (Parsedown.php, ParsedownExtra.php and ParsedownExtraPlugin.php) installed in the `lib/` folder. All those files are included in the .zip you can download from GitHub.

Files `inc/spartan_header.php`, `inc/spartan_footer.php` and `css/spartan_style.php` show you the minimal theme, a starting point for developing your own miniTRECE theme.

Files `inc/bootstrap3_header.php`, `inc/bootstrap3_footer.php` and `css/bootstrap3_style.php` show you a basic/minimalistic theme based on Bootstrap 3.

In a few more days I will free, with a license GNU GPLv3 too, my framework and content manager TRECE, of which miniTRECE is just a small foretaste. TRECE is also lightweight and minimalist, works with databases and contains all tools required to successfuly manage users and contents.

:) Quenerapú
