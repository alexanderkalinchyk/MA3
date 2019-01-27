<main class="voorstellingen">
    <div class="background--blue"></div>
    <section class="zindex1">
        <div class="container voorstellingen__container">
            <h2 class="voorstellingen__title">Straatfestival Programma 2018</h2>
            <p class="voorstellingen__undertitle">Het volledige programma van het Straattheaterfestival wordt <span
                    class="font--bold">gratis</span>
                aangeboden!
            </p>
        </div>
        <div class="voorstellingen__grid--lg">
            <div class="voorstellingen__filters">
                <div class="container">
                    <form class="filter__form" method="get" action="index.php">
                        <input type="hidden" name="page" value="voorstellingen">
                        <input type="hidden" name="action" value="filter">
                        <div class="filters-container">
                            <div class="extra7"></div>
                            <div class="dagen-container">
                                <span class="filter-title">Dagen</span>
                                <ul class="dagen__inputs">
                                    <li class="dagen__li">
                                        <input value="" <?php if(isset($checkedAll)) echo $checkedAll; ?> id="alledagen"
                                            type="radio" name="day">
                                        <label for="alledagen">Alle Dagen</label>
                                    </li>
                                    <li class="dagen__li">
                                        <input <?php if(isset($checkedVrijdag)) echo $checkedVrijdag; ?> value="Vrijdag"
                                            id="vrijdag" type="radio" name="day">
                                        <label for="vrijdag">Vrijdag</label>
                                    </li>
                                    <li class="dagen__li">
                                        <input <?php if(isset($checkedZaterdag)) echo $checkedZaterdag; ?>
                                            value="Zaterdag" id="zaterdag" type="radio" name="day">
                                        <label for="zaterdag">Zaterdag</label>
                                    </li>
                                    <li class="dagen__li">
                                        <input <?php if(isset($checkedZondag)) echo $checkedZondag; ?> value="Zondag"
                                            id="zondag" type="radio" name="day">
                                        <label for="zondag">Zondag</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter-voorstellingen-container">
                                <span class="filter-title title-voorstellingen">Voorstellingen</span>
                                <div class="voorstellingen-inputs">
                                    <input value="Voorstelling" <?php if(isset($checkedtype1)) echo $checkedtype1; ?>
                                        type="checkbox" class="checkbox" name="type[]" id="voorstellingen"><label
                                        for="voorstellingen" class="label">Voorstellingen</label>
                                    <input value="Straatact" class="checkbox"
                                        <?php if(isset($checkedtype2)) echo $checkedtype2; ?> type="checkbox"
                                        name="type[]" id="straatacts"><label for="straatacts"
                                        class="label">Straatacts</label>
                                    <input value="Familie Voorstelling" class="checkbox"
                                        <?php if(isset($checkedtype3)) echo $checkedtype3; ?> type="checkbox"
                                        name="type[]" id="familievoorstellingen"><label for="familievoorstellingen"
                                        class="label">Familievoorstellingen</label>
                                </div>
                            </div>
                            <div class="searchsort-container">
                                <div class="zoeken-container">
                                    <span class="filter-title zoeken-title">Zoeken</span>
                                    <div>
                                        <input type="search" value='<?php echo $search; ?>' id="search" name="search"
                                            placeholder="titel" class="zoeken-input">
                                    </div>
                                </div>
                                <div class="sorteren-container">
                                    <span class="filter-title zoeken-title">Sorteren</span>
                                    <div>
                                        <select class="sorteren-input" name="sort">
                                            <option <?php if(isset($selectedDESC)) echo $selectedDESC; ?> value="DESC">
                                                Starttijd &darr;
                                            </option>
                                            <option <?php if(isset($selectedASC)) echo $selectedASC; ?> value="ASC">
                                                Starttijd &uarr;
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-container">
                                <button type="submit" class="btn btn--animated btn-save">Opslaan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <section class="voorstelling__days">
                <div class="move-container">
                    <?php
                            $friday = true;
                            $saturday = true;
                            $sunday = true;
                            if(empty($shows)){
                              echo "<p class='voorstellingen__undertitle'>Geen voorstellingen gevonden</p>";
                            }
                            foreach($shows as $show){
                            if($show['day'] == 'Vrijdag' && $friday == true){   ?>
                    <h3 class="heading-2 show__h2">Vrijdag</h3>
                    <?php
                              $friday = false;
                            }
                            if($show['day'] == 'Zaterdag' && $saturday == true){   ?>
                    <h3 class="heading-2 show__h2">Zaterdag</h3>
                    <?php
                            $saturday = false; }
                            if($show['day'] == 'Zondag' && $sunday == true){   ?>
                    <h3 class="heading-2 show__h2">Zondag</h3>
                    <?php
                              $sunday = false; }
                            ?>
                    <article class="show__article">
                        <div class="show__heading">
                            <h4 class="show__title"><?php echo $show['name']; ?></h4>
                            <p class="show__undertitle"><?php echo $show['performance']; ?>
                                <?php echo $show['country']; ?>
                            </p>
                        </div>
                        <div class="show__image-container">
                            <picture>
                                <source media="(max-width: 767px)"
                                    srcset="assets/img/thumbnails_mobile/<?php echo $show['img']; ?>.webp"
                                    type="image/webp">
                                <source media="(max-width: 3840px)"
                                    srcset="assets/img/thumbnails_desktop/<?php echo $show['img']; ?>.webp"
                                    type="image/webp">
                                <source media="(max-width: 767px)"
                                    srcset="assets/img/thumbnails_mobile/<?php echo $show['img']; ?>.jpg">
                                <source media="(max-width: 3840px)"
                                    srcset="assets/img/thumbnails_desktop/<?php echo $show['img']; ?>.jpg">
                                <img class="show__image"
                                    src="assets/img/thumbnails_desktop/<?php echo $show['img']; ?>.jpg"
                                    alt="<?php echo $show['alt']; ?>" />
                            </picture>
                        </div>
                        <div class="show__info">
                            <ul>
                                <?php if(!is_null($show['start_hour'])){ ?>
                                <li class="show__list">
                                    <div class="show__clock"></div> <?php echo substr($show['start_hour'], 0, -3);?>
                                    -
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
                                    <div class="show__website"></div> <a href="http://<?php echo $show['website'];?>" target="_blank" class="show__link">
                                        <?php echo $show['website'];?></a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="info-container">
                            <a href="index.php?page=details&amp;id=<?php echo $show['id'];?>"
                                class="btn btn--animated show__btn">Meer
                                info
                            </a>
                        </div>
                    </article>
                    <?php } ?>
                </div>
            </section>
        </div>
    </section>
</main>
