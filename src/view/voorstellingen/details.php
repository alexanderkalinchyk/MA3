<main class="details">
    <section>
        <div class="details__heading">
            <h2 class="details__title"><?php echo $detail['name']; ?></h2>
            <p class="details__undertitle"><?php echo $detail['performance']; ?> <?php echo $detail['country']; ?>
            </p>
            <picture>
                <source media="(max-width: 767px)" srcset="assets/img/details_mobile/<?php echo $detail['img']; ?>.webp"
                    type="image/webp">
                <source media="(max-width: 3840px)"
                    srcset="assets/img/details_desktop/<?php echo $detail['img']; ?>.webp" type="image/webp">
                <source media="(max-width: 767px)" srcset="assets/img/details_mobile/<?php echo $detail['img']; ?>.jpg">
                <source media="(max-width: 3840px)"
                    srcset="assets/img/details_desktop/<?php echo $detail['img']; ?>.jpg">
                <img class="details__image" src="assets/img/details_desktop/<?php echo $detail['img']; ?>.jpg" alt="" />
            </picture>
        </div>
        <article>
            <div class="extra8"></div>
            <div class="details__meer-container">
                <div class="details__meer">
                    <h3 class="details__meer-h3">Meer over <?php echo $detail['name']; ?></h3>
                    <p class="details__meer-p">
                        <?php echo $detail['text']; ?>
                    </p>
                </div>
                <div class="detail__info-container">
                    <div class="detail__info">
                        <ul>
                            <li class="show__list">
                                <?php $originalDate = $detail['date'];
                                $newDate = date("d/m", strtotime($originalDate));
                              ?>
                                <div class="show__date"></div><?php echo $detail['day'];?> <?php echo $newDate;?>
                            </li>
                            <?php if(!is_null($detail['start_hour'])){ ?>
                            <li class="show__list">
                                <div class="show__clock2"></div> <?php echo substr($detail['start_hour'], 0, -3);?>
                                -
                                <?php echo substr($detail['end_hour'], 0, -3);?>
                                (<?php echo $detail['min_duration'];?>min.)
                            </li>
                            <?php } ?>
                            <li class="show__list">
                                <div class="show__location2"></div> <?php echo $detail['location'];?>
                            </li>
                            <li class="show__list">
                                <div class="show__type2"></div> <?php echo $detail['type'];?>
                            </li>
                            <?php if(!empty($detail['website'])){ ?>
                            <li class="show__list show__web2">
                                <div class="show__website2"></div> <a class="show__link">
                                    <?php echo $detail['website'];?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="extra9"></div>
            </div>

            <div class="details__video">
                <embed
                    src="http://www.youtube.com/v/<?php echo $detail['youtube'];?>?version=3&amp;hl=en_US&amp;rel=0&amp;autohide=1&amp;autoplay=0"
                    wmode="transparent" type="application/x-shockwave-flash" width="100%" height="100%"
                    allowfullscreen="true" title="Adobe Flash Player">
            </div>
            <div>
                <h3 class="heading-2 show__h2">Locatie</h3>
                <div class="map-container">

                </div>
                <div class="extra10"></div>
            </div>
        </article>
    </section>
    <section class="other-shows">
        <h2 class="heading-2 show__h2">Andere Voorstellingen</h2>
        <article class="other-shows__article scrolling-wrapper">
            <img>
            <h3>Kunst op stelten</h3>
            <p>Zaterdag 25/08</p>
        </article>
    </section>
</main>