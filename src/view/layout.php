<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INTERNATIONAAL STRAATFESTIVAL BEVEREN - <?php echo $title; ?></title>

    <!--
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
 -->

    <script>
    WebFontConfig = {
        custom: {
            families: ["Montserrat", "Hind"],
            urls: ["style.css"]
        }
    };

    (function(d) {
        var wf = d.createElement("script"),
            s = d.scripts[0];
        wf.src =
            "https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js";
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
    })(document);
    </script>


    <?php echo $css;?>
</head>

<body>
    <h1 class="hidden">Internationaal Straatfestival Beveren</h1>
    <header class="site-header container">
        <a href="home" class="site__logo"></a>
        <nav>
            <ul class="site__nav nav--full">
                <li><a href="home" class="nav__item <?php if($currentPage == 'home') echo 'a--active';?>">Home</a></li>
                <li>
                    <a href="index.php?page=voorstellingen"
                        class="nav__item  <?php if($currentPage == 'voorstellingen') echo 'a--active';?>">
                        Programma
                    </a>
                </li>
                <li><a href="#" class="nav__item">Praktisch</a></li>
                <li><a href="#" class="nav__item">Spiegelbeeld</a></li>
                <li><a href="#" class="nav__item">Vrijwilligers</a></li>
                <li><a href="#" class="nav__item">Contact</a></li>
                <li>
                    <div class="hamburger"></div>
                </li>
            </ul>
        </nav>
    </header>
    <?php echo $content; ?>

    <footer
        class="footer <?php if($currentPage == 'home') echo 'footer-home'; if($currentPage == 'details') echo 'footer-details';?>">
        <div class="footer--big">
            <article class="container footer__article">
                <h3 class="footer__h3">
                    <div class="icon-location"></div> Locaties Voorstellingen
                </h3>
                <address class="text">
                    Oud Atletiekplein in de Diederik Van Beverenlaan.<br>
                    De speelplaats van BS De Bever en KA Beveren in de Donkvijverstraat.
                </address>
            </article>
            <article class="container footer__article">
                <h3 class="footer__h3">
                    <div class="icon-location"></div> Locaties Straatacts
                </h3>
                <address class="text address2">
                    Donkvijverstraat, Yzerhand, Vrasenestraat, Warande, N70 en op de Grote Markt.
                </address>
            </article>
            <article class="footer__article">
                <h3 class="footer__h3 no-width">Volg Ons</h3>
                <a href="https://www.facebook.com/straattheaterfestivalbeveren/" target="_blank" class="btn-follow">
                    <div class="icon-fb"></div>Follow
                </a>
                <div class="icon-mail1"></div>
                <p class="text--inschrijven">Schrijf je in voor onze nieuwsbrief</p>
                <div class="email__div">
                    <input type="email" class="email-inschrijving" placeholder="Jouw email adres">
                    <a class="btn-inschrijven" href="#">Inschrijven</a>
                </div>
            </article>
            <article class="footer__article">
                <h3 class="footer__h3 no-width">Meer Info</h3>
                <p class="text contact-info">
                    Erik Apers<br>
                    03 750 16 29<br>
                    erik.apers@beveren.be<br>
                    Beveren Waas 9190
                </p>
                <a class="btn-inschrijven btn-contacteer" href="#">Contacteer ons</a>
            </article>
        </div>
        <div class="footer--small">
            <div class="footer__links">
                <a href="#">Cookie Statement</a>
                <a href="#">Privacy-beleid</a>
                <a href="#">Algemene Voorwaarden</a>
            </div>
            <div class="footer__border"></div>
            <span class="copyright">&copy; 2019 Alexander Kalinchyk</span>
        </div>

    </footer>
    <?php echo $js; ?>
</body>

</html>