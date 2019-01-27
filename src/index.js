require('./style.css');

{
  const handleClickHamburger = () => {
    const $sitenav = document.querySelector(`.site__nav`);
    const $siteheader = document.querySelector(`.site-header`);
    if ($sitenav.classList.contains(`nav--full`)) {
      $sitenav.classList.add(`nav--responsive`);
      $siteheader.classList.add(`site-header--responsive`);

      $sitenav.classList.remove(`nav--full`);
    } else {
      $sitenav.className = `site__nav nav--full`;
      $siteheader.className = `site-header container`;
    }
  };
  const initgoogle = () => {
    const $googlemap = document.querySelector(`.google-map`);
    if ($googlemap !== null) {
      const cord1 = parseFloat(document.querySelector(`.cord1`).textContent);
      const cord2 = parseFloat(document.querySelector(`.cord2`).textContent);
      const uluru = {
        //put coordinates in html with php
        //select query text
        //enter here
        //200 iq idea
        lat: cord1,
        lng: cord2
      };
      const map = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        center: uluru
      });
      const marker = new google.maps.Marker({
        position: uluru,
        map: map
      });
    }
  };
  const $filterForm = document.querySelector(`.filter__form`),
    $voorstellingen = document.querySelector(`.move-container`),
    $search = document.querySelector(`.zoeken-input`);

  const init = () => {
    const $hamburger = document.querySelector(`.hamburger`);
    $hamburger.addEventListener(`click`, handleClickHamburger);

    initgoogle();

    if ($filterForm) {
      $filterForm.addEventListener(`change`, handleSubmitFilterForm);
      $search.addEventListener(`keyup`, handleSubmitFilterForm);
      const $btnsave = document.querySelector(`.btn-save`);
      $btnsave.classList.add(`vishidden`);
    }
  };
  let friday = true;
  let saturday = true;
  let sunday = true;

  const handleLoadVoorstellingen = data => {
    friday = true;
    saturday = true;
    sunday = true;

    if (data == '') {
      $voorstellingen.innerHTML = `<p class='voorstellingen__undertitle'>Geen voorstellingen gevonden</p>`;
    } else {
      $voorstellingen.innerHTML = data
        .map(voorstelling => createVoorstellingListItem(voorstelling))
        .join(``);
    }
  };

  const createVoorstellingListItem = voorstelling => {
    let streturn = ``;
    if (voorstelling === '') {
      streturn += `<p class='voorstellingen__undertitle'>Geen voorstellingen gevonden</p>`;
      friday = true;
      saturday = true;
      sunday = true;
      return streturn;
    } else {
      if (voorstelling['day'] == 'Vrijdag' && friday == true) {
        streturn += `<h3 class="heading-2 show__h2">Vrijdag</h3>`;
        friday = false;
      }
      if (voorstelling['day'] == 'Zaterdag' && saturday == true) {
        streturn += `<h3 class="heading-2 show__h2">Zaterdag</h3>`;
        saturday = false;
      }
      if (voorstelling['day'] == 'Zondag' && sunday == true) {
        streturn += `<h3 class="heading-2 show__h2">Zondag</h3>`;
        sunday = false;
      }
      streturn += `
      <article class="show__article">
                          <div class="show__heading">
                              <h4 class="show__title">${
  voorstelling['name']
}</h4>
                              <p class="show__undertitle">${
  voorstelling['performance']
}
                              ${voorstelling['country']}
                              </p>
                          </div>
                          <div class="show__image-container">
                              <picture>
                                  <source media="(max-width: 767px)"
                                      srcset="assets/img/thumbnails_mobile/${
  voorstelling['img']
}.webp"
                                      type="image/webp">
                                  <source media="(max-width: 3840px)"
                                      srcset="assets/img/thumbnails_desktop/${
  voorstelling['img']
}.webp"
                                      type="image/webp">
                                  <source media="(max-width: 767px)"
                                      srcset="assets/img/thumbnails_mobile/${
  voorstelling['img']
}.jpg">
                                  <source media="(max-width: 3840px)"
                                      srcset="assets/img/thumbnails_desktop/${
  voorstelling['img']
}.jpg">
                                  <img class="show__image"
                                      src="assets/img/thumbnails_desktop/${
  voorstelling['img']
}.jpg"
                                      alt="${voorstelling['alt']}" />
                              </picture>
                          </div>
                          <div class="show__info">
                              <ul>`;
      if (voorstelling['start_hour'] != null) {
        streturn += `

                              <li class="show__list">
                                  <div class="show__clock"></div> `;
        let strStart = voorstelling['start_hour'];
        strStart = strStart.substring(0, strStart.length - 3);
        streturn += `

                                      ${strStart}
                                  - `;
        let strEnd = voorstelling['end_hour'];
        strEnd = strEnd.substring(0, strEnd.length - 3);
        streturn += `
                                  ${strEnd}
                                  (${voorstelling['min_duration']}min.)
                              </li> `;
      }
      streturn += `
                                  <li class="show__list">
                                      <div class="show__location"></div> ${
  voorstelling['location']
}
                                  </li>
                                  <li class="show__list">
                                      <div class="show__type"></div> ${
  voorstelling['type']
}
                                  </li> `;
      if (voorstelling['website'] !== '') {
        streturn += `
                                  <li class="show__list show__web">
                                      <div class="show__website"></div> <a class="show__link">
                                          ${voorstelling['website']}</a>
                                  </li> `;
      }
      streturn += `
                              </ul>
                          </div>
                          <div class="info-container">
                              <a href="index.php?page=details&amp;id=${
  voorstelling['id']
}"
                                  class="btn btn--animated show__btn">Meer
                                  info
                              </a>
                          </div>
                      </article>    `;
      return streturn;
    }
  };
  const handleSubmitFilterForm = e => {
    e.preventDefault();
    const qs = new URLSearchParams([
      ...new FormData($filterForm).entries()
    ]).toString();
    fetch(`${$filterForm.getAttribute('action')}?${qs}`, {
      headers: new Headers({
        Accept: `application/json`
      }),
      method: 'get'
    })
      .then(r => r.json())
      .then(data => handleLoadVoorstellingen(data));
    window.history.pushState(
      {},
      '',
      `${window.location.href.split('?')[0]}?${qs}`
    );
  };

  /*
  const $filterForm = document.querySelector(`.filter__form`),
    $players = document.querySelector(`.players__list`);

  const init = () => {
    if ($filterForm) {
      $filterForm.addEventListener(`submit`, handleSubmitFilterForm);
    }
  };

  const handleLoadPlayers = data => {
    $players.innerHTML = data
      .map(player => createPlayerListItem(player))
      .join(``);
  };

  const createPlayerListItem = player => {
    return ` <li class='player'>
    <img src="${player['Photo'].replace('/4/', '/10/')}" alt="Profile picture ${
  player['Name']
}" class="player__pic">
    <span class='player__name'>${player['Name']}</span>
    <span class='player__stat'>${player['Age']} ${player['Nationality']}</span>
    <span class='player__info'>${player['Club']}</span>
    <span class='player__more'>more</span>
</li>`;
  };

  const handleSubmitFilterForm = e => {
    console.log();
    e.preventDefault();
    const qs = new URLSearchParams([
      ...new FormData($filterForm).entries()
    ]).toString();
    fetch(`${$filterForm.getAttribute('action')}?${qs}`, {
      headers: new Headers({
        Accept: `application/json`
      }),
      method: 'get'
    })
      .then(r => r.json())
      .then(data => handleLoadPlayers(data));
    window.history.pushState(
      {},
      '',
      `${window.location.href.split('?')[0]}?${qs}`
    );
  };



*/
  init();
}
