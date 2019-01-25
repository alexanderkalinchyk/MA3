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
                    <div>
                        <button type="submit" class="btn--animated btn btn-save">Opslaan</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="voorstelling__days">
        <div class="move-container">
            <h2 class="heading-2">Vrijdag</h2>
            <article class="show__article">
                <div class="show__heading">
                    <h3 class="show__title">The Flying Dutchmen</h3>
                    <p class="show__undertitle">The sky is the limit (NL/CAN)</p>
                </div>
                <div class="show__image-container">
                    <picture>
                        <source media="(max-width: 767px)"
                            srcset="assets/img/thumbnails_mobile/ciedescieuxgalvanises.webp" type="image/webp">
                        <source media="(max-width: 3840px)"
                            srcset="assets/img/thumbnails_desktop/ciedescieuxgalvanises.webp" type="image/webp">
                        <source media="(max-width: 767px)"
                            srcset="assets/img/thumbnails_mobile/ciedescieuxgalvanises.jpg">
                        <source media="(max-width: 3840px)"
                            srcset="assets/img/thumbnails_desktop/ciedescieuxgalvanises.jpg">
                        <img class="show__image" src="assets/img/thumbnails_desktop/ciedescieuxgalvanises.jpg" alt="" />
                    </picture>
                </div>
                <div class="show__info">
                    <ul>
                        <li class="show__list">
                            <div class="show__clock"></div> 18:00 - 18:40 (40min.)
                        </li>
                        <li class="show__list">
                            <div class="show__location"></div> Locatie 1: KA / BS De Bever
                        </li>
                        <li class="show__list">
                            <div class="show__type"></div> Voorstelling
                        </li>
                        <li class="show__list">
                            <div class="show__website"></div><a class="show__link"> www.the-flying-dutchmen.com</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <a href="#" class="btn btn--animated show__btn">Meer info</a>
                </div>
            </article>
        </div>
    </section>
</main>