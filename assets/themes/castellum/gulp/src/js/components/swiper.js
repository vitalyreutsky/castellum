import { type } from "jquery";
import Swiper, {
  Keyboard,
  Pagination,
  Navigation,
  EffectFade,
  Autoplay,
  EffectCreative,
} from "swiper";

Swiper.use([
  Pagination,
  Navigation,
  Keyboard,
  EffectFade,
  Autoplay,
  EffectCreative,
]);

//!hero-swiper
const heroSlider = document.querySelectorAll(".hero__slider");
heroSlider.forEach((slider) => {
  const heroSlider = slider.querySelector(".hero__main-items");
  const heroAffiliatesSlider = slider.querySelector(".hero__affiliates-items");

  const heroSwiper = new Swiper(heroSlider, {
    slidesPerView: 1,
    speed: 1000,
    loop: true,
    effect: "creative",
    creativeEffect: {
      prev: {
        translate: heroAffiliatesSlider ? ["100%", 0, 0] : ["-100%", 0, 0],
      },
      next: {
        translate: heroAffiliatesSlider ? ["-100%", 0, 0] : ["100%", 0, 0],
      },
    },
    autoplay: {
      delay: 1000,
    },
    keyboard: {
      enabled: true,
      onlyInViewport: true,
    },
  });
});

// !mission-swiper
const aboutSwiper = new Swiper(".about-us__items", {
  slidesPerView: 1,
  spaceBetween: 30,
  speed: 1000,
  loop: true,
  keyboard: {
    enabled: true,
    onlyInViewport: true,
  },
  autoplay: {
    delay: 2000,
  },
  pagination: {
    el: ".about-us__btns",
    clickable: true,
    dynamicBullets: false,
  },
});

//!hero-swiper
const heroAdvertisersSwiper = new Swiper(".hero__advertisers-items ", {
  slidesPerView: 1,
  speed: 1000,
  effect: "fade",
  creativeEffect: {
    prev: {
      translate: [0, "-100%", -1],
    },
    next: {
      translate: [0, "100%", 0],
    },
  },
  autoplay: {
    delay: 1000,
  },
  keyboard: {
    enabled: true,
    onlyInViewport: true,
  },
});

//!hero-rewards-swiper
const progress = document.querySelector(".progress");
const heroRewardsSwiper = new Swiper(".hero__rewards-items", {
  effect: "fade",
  loop: true,
  loopedSlides: 3,
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  on: {
    init: function () {
      progress.classList.remove("animate");
      progress.classList.add("animate");
    },
    slideChangeTransitionStart: function () {
      progress.classList.remove("animate");
    },
    slideChangeTransitionEnd: function () {
      progress.classList.add("animate");
    },
  },
});

//! main-slider
const mainSliders = document.querySelectorAll(".main-slider");
mainSliders.forEach((slider) => {
  const initSlider = slider.querySelector(".main-slider__items");
  const productsSlider = slider.querySelector(".products__cards");

  const mainSlider = new Swiper(initSlider, {
    spaceBetween: productsSlider ? 60 : 20,
    speed: 700,
    loop: true,
    initialSlide: 1,

    keyboard: {
      enabled: true,
      onlyInViewport: true,
    },
    navigation: {
      nextEl: ".main-nav-item--next",
      prevEl: ".main-nav-item--prev",
    },

    breakpoints: {
      0: {
        slidesPerView: 1.2,
        spaceBetween: 16,
      },

      1024: {
        slidesPerView: 3,
        spaceBetween: productsSlider ? 60 : 20,
      },
    },

    on: {
      init: function () {
        document.querySelectorAll(".main-nav-item").forEach((item) => {
          item.classList.remove("active");
        });
      },
      slideNextTransitionStart: function () {
        document.querySelectorAll(".main-nav-item--prev").forEach((item) => {
          item.classList.remove("active");
        });

        document.querySelectorAll(".main-nav-item--next").forEach((item) => {
          item.classList.add("active");
        });
      },
      slidePrevTransitionStart: function () {
        document.querySelectorAll(".main-nav-item--prev").forEach((item) => {
          item.classList.add("active");
        });

        document.querySelectorAll(".main-nav-item--next").forEach((item) => {
          item.classList.remove("active");
        });
      },
    },
  });
});
