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
  const init = () => {
    const $hamburger = document.querySelector(`.hamburger`);
    $hamburger.addEventListener(`click`, handleClickHamburger);

    initgoogle();
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
