import toggleClass from "./modules/toggleClass.js";
import tabs from "./modules/tabs.js";
import modalsPlayers from "./modules/modals.js";

window.addEventListener('DOMContentLoaded', function() {

  const anchors = document.querySelectorAll('a[href*="#"]')

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()
    
    const blockID = anchor.getAttribute('href').substr(1)
    
    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}


try {
  modalsPlayers('.video__play', '.about__modal');
  modalsPlayers('.box-video__btn', '.modal__reviews');
} catch(e) {}
  try {
  toggleClass('.bars', '.navigation');
} catch(e) {}

  try {
    tabs('.filter-doctors .accordions__nav-item', '.filter-doctors .content');
  } catch(e) {}

  try {
    $('.slider').slick({
      slidesToShow: 1,
      arrows: false,
      focusOnSelect: false,
      accessibility: false,
      dots: true,
      fade: true,
      autoplay: true,
      autoplaySpeed: 4000,
      pauseOnHover: false,
      asNavFor: '.slider-nav'
    });


    $('.slick-dots').on('click', function() {
      $('.slider').slick('slickPlay');
  });

    const video = document.querySelectorAll('video');
    video[0].play()

    $('.slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
        video[currentSlide].play();
    });

    $('.slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
          video[currentSlide].pause();
          video[currentSlide].currentTime = 0;
    });

    $('.slider-nav').slick({
      slidesToShow: 2,
      asNavFor: '.slider',
      arrows: false,
    });

    $('.slider-gallery').slick({
      centerPadding: '20%',
      centerMode: true,
      slidesToShow: 1,
      arrows: true,
      autoplay: true,
      autoplaySpeed: 4000,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            centerPadding: '20%',
          }
        },

        {
          breakpoint: 580,
          settings: {
            centerPadding: '0%',
          }
        }
      ]
    });
    
  } catch(e) {}
      
  let sumArrNumvers = 0;
  
  function sortrArrRcursive(arr, index = 0) {
    if(arr.length > index) {
      sumArrNumvers += arr[index];
      sortrArrRcursive(arr,++index);
    }
    
    return sumArrNumvers;
  }
  
  console.log( sortrArrRcursive([1, 23, 34, 26, 54, 20]));


  const loader = document.querySelector('.preloader');

  window.onload = () => {
    gsap.fromTo(loader, {opacity:1, zIndex: 9999}, {
      opacity:0, zIndex: -1,
      duration: 0.6,
      delay: 6
    });
  };

  const loader7Timeline = new TimelineMax({repeat: -1});

loader7Timeline.staggerTo('.loader7 circle', 0.4, {
  attr: {
    "fill-opacity": 1
  }
}, 0.2)
.staggerTo('.loader7 circle', 0.4, {
  attr: {
    "fill-opacity": 0
  }
}, 0.2, 0.4);



    //   GSAP - animation (Left, Right, Top)
    gsap.registerPlugin(ScrollTrigger, ScrollSmoother)

    if (ScrollTrigger.isTouch !== 1) {


        let itemsL = gsap.utils.toArray('.effects__left'),
            itemsT = gsap.utils.toArray('.effects__top'),
            itemsR = gsap.utils.toArray('.effects__right');

        itemsL.forEach(item => {
            gsap.fromTo(item, { opacity: 0, x: -50 }, {
                opacity: 1, x: 0,
                scrollTrigger: {
                    trigger: item,
                    start: '-850',
                    end: 'top',
                    scrub: true
                }
            })
        })

        itemsR.forEach(item => {
            gsap.fromTo(item, { opacity: 0, x: 50 }, {
                opacity: 1, x: 0,
                scrollTrigger: {
                    trigger: item,
                    start: '-850',
                    end: 'top',
                    scrub: true
                }
            })
        })

        itemsT.forEach(item => {
            gsap.fromTo(item, { opacity: 0, y: 50 }, {
                opacity: 1, y: 0,
                scrollTrigger: {
                    trigger: item,
                    start: '-850',
                    end: 'top',
                    scrub: true
                }
            })
        })
    };



})