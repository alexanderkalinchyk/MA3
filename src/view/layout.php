<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INTERNATIONAAL STRAATFESTIVAL BEVEREN - <?php echo $title; ?></title>
    <script>
      WebFontConfig = {
        custom: {
          families: ["Montserrat", "Hind"],
          urls: ["assets/fonts/fonts.css"]
        }
      };

      (function(d) {
        var wf = d.createElement("script"),
          s = d.scripts[0];
        wf.src = "js/webfont.js";
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
      })(document);
    </script>
    <?php echo $css;?>
  </head>
  <body>
    <header class="site-header container">
        <a href="#" class="site__logo"></a>
        <nav>
          <ul class="site__nav nav--full">
            <li><a href="#" class="nav__item a--active">Home</a></li>
            <li><a href="#" class="nav__item">Programma</a></li>
            <li><a href="#"class="nav__item">Praktisch</a></li>
            <li><a href="#"class="nav__item">Spiegelbeeld</a></li>
            <li><a href="#"class="nav__item">Vrijwilligers</a></li>
            <li><a href="#"class="nav__item">Contact</a></li>
            <li class=""><span class="hamburger" href="#">H</span></li>
          </ul>
        </nav>
    </header>
        <?php echo $content; ?>
    <footer>
    </footer>
    <?php echo $js; ?>
  </body>
</html>
