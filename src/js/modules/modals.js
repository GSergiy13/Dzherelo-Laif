const modalsPlayers = (triggerSelectors, modalSeelctors) => {
  const triggers = document.querySelector(triggerSelectors);
  const modal = document.querySelector(modalSeelctors);

  gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
  
  triggers.addEventListener('click', function(e) {
    document.querySelector('body').style.overflow = 'hidden';

    gsap.fromTo(modal, {opacity:0, zIndex: -1}, {
      opacity:1, zIndex: 100,
      duration: 0.6
    });
  });


  modal.querySelector('.modal__close').addEventListener('click', function(e) {
    document.querySelector('body').style.overflow = '';
    gsap.fromTo(modal, {opacity:1, zIndex: 100}, {
      opacity:0, zIndex: -1,
      duration: 0.6
    });
  });
}

export default modalsPlayers;