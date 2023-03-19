const lazyLoadYoutube = () => {
  const startButtton = document.querySelectorAll('.youtube-lazy-button');
  const iframe = document.querySelectorAll('.iframe-youtube');
  let width = document.documentElement.clientWidth;
  let youPrevie = document.querySelectorAll('.youtube-lazy-image');

  youPrevie.forEach((item, i) => {
    if (width > 640) {
      item.style.backgroundImage = `url(https://img.youtube.com/vi/${startButtton[i].getAttribute('data-url')}/maxresdefault.jpg)`;
    } else if (width > 480) {
      item.style.backgroundImage = `url(https://img.youtube.com/vi/${startButtton[i].getAttribute('data-url')}/sddefault.jpg)`;
    } else if (width > 320) {
      item.style.backgroundImage = `url(https://img.youtube.com/vi/${startButtton[i].getAttribute('data-url')}/hqdefault.jpg)`;
    } else if (width > 120) {
      item.style.backgroundImage = `url(https://img.youtube.com/vi/${startButtton[i].getAttribute('data-url')}/mqdefault.jpg)`;
    } else if (width == 0) {
      item.style.backgroundImage = `url(https://img.youtube.com/vi/${startButtton[i].getAttribute('data-url')}/hqdefault.jpg)`;
    } else {
      item.style.backgroundImage = `url(https://img.youtube.com/vi/${startButtton[i].getAttribute('data-url')}/default.jpg)`;
    }
  });

  startButtton.forEach((btnsStart, i) => {
    btnsStart.addEventListener('click', function() {
      iframe[i].innerHTML = `<iframe width="560" height="315" src="https://www.youtube.com/embed/${btnsStart.getAttribute('data-url')}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
      setTimeout(() => youPrevie.style.display = 'none', 1000);
    });
  })
}

export default lazyLoadYoutube;