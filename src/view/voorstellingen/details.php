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
                <img class="details__image" src="assets/img/details_desktop/<?php echo $detail['img']; ?>.jpg"
                    alt="<?php echo $detail['alt']; ?>" />
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
            <?php if(!empty($detail['youtube'])){ ?>
            <div class="details__video">
                <embed
                    src="http://www.youtube.com/v/<?php echo $detail['youtube'];?>?version=3&amp;hl=en_US&amp;rel=0&amp;autohide=1&amp;autoplay=0"
                    wmode="transparent" type="application/x-shockwave-flash" width="100%" height="100%"
                    allowfullscreen="true" title="Adobe Flash Player">
            </div>
            <div class="details__map">
                <h3 class="heading-2 show__h2">Locatie</h3>
                <div class="map-container">
                    <span class="cord1 hidden"><?php echo $detail['lat'];?></span>
                    <span class="cord2 hidden"><?php echo $detail['lng'];?></span>
                    <div id="map" class="google-map"></div>
                    <!-- Replace the value of the key parameter with your own API key. -->
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZnxQFSxp7tbhA0JtzC2qod5Z7nzOQq4w">
                    </script>
                </div>
                <div class="extra10"></div>
            </div>
            <?php } ?>
        </article>
    </section>
    <section class="other-shows">
        <h2 class="heading-2">Andere Voorstellingen</h2>
        <div class="scrolling-wrapper andere__wrapper">
            <?php foreach($others as $andere){  ?>
            <a href="?page=details&id=<?php echo $andere['id']; ?>">
                <article class="other-shows__article">
                    <picture>
                        <source media="(max-width: 3840px)"
                            srcset="assets/img/thumbnails_desktop/<?php echo $andere['img']; ?>.webp" type="image/webp">
                        <source media="(max-width: 3840px)"
                            srcset="assets/img/thumbnails_desktop/<?php echo $andere['img']; ?>.jpg">
                        <img class="" src="assets/img/thumbnails_desktop/<?php echo $andere['img']; ?>.jpg"
                            alt="<?php echo $andere['alt']; ?>" />
                    </picture>
                    <h3 class="andere__h3"><?php echo $andere['name']; ?></h3>
                    <?php
                  $originalDate2 = $andere['date'];
                  $newDate2 = date("d/m", strtotime($originalDate2));
                ?>
                    <p class="andere__p"><?php echo $andere['day']; ?> <?php echo $newDate2; ?></p>
                </article>
            </a>
            <?php } ?>
        </div>
    </section>
</main>
