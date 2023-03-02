const projectsSwiper = () => {
  const projectsSwiperInit = new Swiper(".swiper.card-section", {
    autoHeight: true,
    spaceBetween: 16,

    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      1024: {
        slidesPerView: 2,
      },
    },
  });
};

projectsSwiper();