<main class="voorstellingen">
    <section class="voorstellingen__container">
        <div class="container">
            <h2 class="voorstellingen__title">Straatfestival Programma 2018
            </h2>
            <p class="voorstellingen__undertitle">Het volledige programma van het Straattheaterfestival wordt <span
                    class="font--bold">gratis</span>
                aangeboden!
            </p>
            <form>
                <div class="filters-container">
                    <div class="extra7"></div>
                    <div class="dagen-container">
                        <span class="filter-title">Dagen</span>
                        <ul class="dagen__inputs">
                            <li class="dagen__li">
                                <input id="alledagen" type="radio" name="dagen">
                                <label for="alledagen">Alle Dagen</label>
                            </li>
                            <li class="dagen__li">
                                <input id="vrijdag" type="radio" name="dagen">
                                <label for="vrijdag">Vrijdag</label>
                            </li>
                            <li class="dagen__li">
                                <input id="zaterdag" type="radio" name="dagen">
                                <label for="zaterdag">Zaterdag</label>
                            </li>
                            <li class="dagen__li">
                                <input id="zondag" type="radio" name="dagen">
                                <label for="zondag">Zondag</label>
                            </li>
                        </ul>
                    </div>
                    <div class="filter-voorstellingen-container">
                        <span class="filter-title">Voorstellingen</span>
                        <div class="voorstellingen-inputs">
                            <input type="checkbox" name="voorstellingen" id="alles"><label for="alles"
                                class="label">Toon
                                Alles</label>
                            <input type="checkbox" name="voorstellingen" id="voorstellingen"><label for="voorstellingen"
                                class="label">Voorstellingen</label>
                            <input type="checkbox" name="voorstellingen" id="straatacts"><label for="straatacts"
                                class="label">Straatacts</label>
                            <input type="checkbox" name="voorstellingen" id="familievoorstellingen"><label
                                for="familievoorstellingen" class="label">Familievoorstellingen</label>
                        </div>
                    </div>
                    <div class="searchsort-container">
                        <div class="zoeken-container">
                            <span class="filter-title">Zoeken</span>
                            <div>
                                <input placeholder="titel" class="zoeken-input" type="text" name="search">
                            </div>
                        </div>
                        <div class="sorteren-container">
                            <span class="filter-title">Sorteren</span>
                            <div>
                                <select class="sorteren-input" name="sort">
                                    <option value="asc">
                                        Starttijd &uarr;
                                    </option>
                                    <option value="desc">
                                        Starttijd &darr;
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="submit-container">
                        <button type="submit" class="btn--animated btn btn-save">Opslaan</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="voorstelling__days">
        <div class="move-container">
            <?php
            $friday = true;
            $saturday = true;
            $sunday = true;
            foreach($shows as $show){
            if($show['day'] == 'Vrijdag' && $friday == true){   ?>
            <h2 class="heading-2 show__h2">Vrijdag</h2>
            <?php
              $friday = false;
            }
            if($show['day'] == 'Zaterdag' && $saturday == true){   ?>
            <h2 class="heading-2 show__h2">Zaterdag</h2>
            <?php
            $saturday = false; }
            if($show['day'] == 'Zondag' && $sunday == true){   ?>
            <h2 class="heading-2 show__h2">Zondag</h2>
            <?php
              $sunday = false; }
            ?>
            <article class="show__article">
                <div class="show__heading">
                    <h3 class="show__title"><?php echo $show['name']; ?></h3>
                    <p class="show__undertitle"><?php echo $show['performance']; ?> <?php echo $show['country']; ?></p>
                </div>
                <div class="show__image-container">
                    <picture>
                        <source media="(max-width: 767px)"
                            srcset="assets/img/thumbnails_mobile/<?php echo $show['img']; ?>.webp" type="image/webp">
                        <source media="(max-width: 3840px)"
                            srcset="assets/img/thumbnails_desktop/<?php echo $show['img']; ?>.webp" type="image/webp">
                        <source media="(max-width: 767px)"
                            srcset="assets/img/thumbnails_mobile/<?php echo $show['img']; ?>.jpg">
                        <source media="(max-width: 3840px)"
                            srcset="assets/img/thumbnails_desktop/<?php echo $show['img']; ?>.jpg">
                        <img class="show__image" src="assets/img/thumbnails_desktop/<?php echo $show['img']; ?>.jpg"
                            alt="" />
                    </picture>
                </div>
                <div class="show__info">
                    <ul>
                        <?php if(!is_null($show['start_hour'])){ ?>
                        <li class="show__list">
                            <div class="show__clock"></div> <?php echo substr($show['start_hour'], 0, -3);?> -
                            <?php echo substr($show['end_hour'], 0, -3);?>
                            (<?php echo $show['min_duration'];?>min.)
                        </li>
                        <?php } ?>
                        <li class="show__list">
                            <div class="show__location"></div> <?php echo $show['location'];?>
                        </li>
                        <li class="show__list">
                            <div class="show__type"></div> <?php echo $show['type'];?>
                        </li>
                        <?php if(!empty($show['website'])){ ?>
                        <li class="show__list show__web">
                            <div class="show__website"></div> <a class="show__link"> <?php echo $show['website'];?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="info-container">
                    <a href="details?id=<?php echo $show['id'];?>" class="btn btn--animated show__btn">Meer info</a>
                </div>
            </article>
            <?php } ?>
        </div>
    </section>
</main>