<main>
  <div class="left-border">
    <section class="main-container container">
      <div class="main-header">
        <p class="main-header__gratis">Gratis</p>
        <h1 class="main-header__title">Internationaal Straatfestival Beveren</h1>
        <p class="main-header__date">24-25-26 Augustus 2018</p>
        <p class="main-header__undertitle">
          Save the date! <br />
          Alle ogen gericht op <br />
          24, 25, en 26 augustus 2018
        </p>
        <a class="cta-btn btn--animated" href="#">Bekijk Het Programma</a>
        <div class="scroll-link" href="#content">
          <svg class="mouse" xmlns="http://www.w3.org/2000/svg" viewBox="-10 -10 100 150" preserveAspectRatio="xMidYMid meet">
            <g fill="none" fill-rule="evenodd">
              <rect width="70" height="118" x="1.5" y="1.5" stroke="#f9e88c" stroke-width="6" rx="36"></rect>
              <circle class="scroll" cx="36.5" cy="31.5" r="8" fill="#f16b68"></circle>
            </g>
          </svg>
        </div>
      </div>
      <div class="hero-image"></div>
    </section>
</div>
  <section class="top-voorstellingen">
    <div class="extra1"></div>
    <h2 class="heading-2">Niet te missen voorstellingen</h2>
    <div class="scrolling-wrapper">
      <?php foreach($top_voorstellingen as $voorstelling){ ?>
        <a class="top__article <?php echo $voorstelling["class"];?>">
            <div class="top__container">
              <h3 class="top__title"><?php echo $voorstelling["name"];?></h3>
              <p class="font--bold"><?php echo $voorstelling["country"];?></p>
              <p class="font--regular"><?php echo $voorstelling["performance"];?></p>
            </div>
              <div class="top__info">
                <span><?php echo $voorstelling["date"];?></span>
                <span><?php echo $voorstelling["time"];?></span>
                <span><?php echo $voorstelling["location"];?></span>
            </div>
        </a>
      <?php } ?>
    </div>
    <div class="extra2-grid">
      <div class="extra2"></div>
    </div>
  </section>
  <section class="spiegelbeeld">
    <div class="container spiegelbeeld__container">
      <div class="spiegelbeeld__title-container">
          <h2 class="heading-2 spiegelbeeld__heading">Spiegelbeeld</h2>
          <p class="spiegelbeeld__undertitle">Zaterdag 25 augustus op het Oud Atletiekplein</p>
      </div>
      <picture class="spiegelbeeld__image1">
        <source media="(max-width: 767px)" srcset="assets/img/spiegelbeeld/spiegelbeeld1_1.webp">
        <source media="(max-width: 1023px)" srcset="assets/img/spiegelbeeld/spiegelbeeld1_2.webp">
        <source media="(max-width: 1439px)" srcset="assets/img/spiegelbeeld/spiegelbeeld1_3.webp">
        <source media="(max-width: 767px)" srcset="assets/img/spiegelbeeld/spiegelbeeld1_1.png">
        <source media="(max-width: 1023px)" srcset="assets/img/spiegelbeeld/spiegelbeeld1_2.png">
        <source media="(max-width: 1439px)" srcset="assets/img/spiegelbeeld/spiegelbeeld1_3.png">
        <img
          src="assets/img/spiegelbeeld/spiegelbeeld1_4.png"
          alt="Spiegelbeeld foto 1. 4 bandleden naast elkaar"
        />
      </picture>
      <p class="spiegelbeeld__text">Spiegelbeeld is een <span class="font--bold">muzikaal feest</span> met vooral veel sfeer, ambiance en gezelligheid zoals dat van park- en pleinfeesten verwacht kan worden. De <span class="font--bold">legendarische optredens</span> die in het geheugen van Spiegelbezoekers gegrift zitten, krijgen bij deze een vervolg. Hiermee vullen we een leemte in het programma van de Beverse feesten en presenteren we u – uiteraard in alle bescheidenheid – net dat tikkeltje meer…</p>
      <a class="btn btn--animated spiegelbeeld__btn" href="#">Meer info</a>
      <picture class="spiegelbeeld__image2">
        <source media="(max-width: 767px)" srcset="assets/img/spiegelbeeld/spiegelbeeld2_1.webp">
        <source media="(max-width: 1023px)" srcset="assets/img/spiegelbeeld/spiegelbeeld2_2.webp">
        <source media="(max-width: 767px)" srcset="assets/img/spiegelbeeld/spiegelbeeld2_1.png">
        <source media="(max-width: 1023px)" srcset="assets/img/spiegelbeeld/spiegelbeeld2_2.png">
        <img
          src="assets/img/spiegelbeeld/spiegelbeeld2_3.png"
          alt="Spiegelbeeld foto 2. Man staat voor zijn auto. text: 'SENS UNIQUE'"
        />
      </picture>
    </div>
  </section>
</main>
