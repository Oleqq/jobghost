document.querySelector('.header__burger').addEventListener('click', function() {
    this.classList.toggle('burger--active');
    document.querySelector('.header__menu').classList.toggle('menu--active');
});

$(document).ready(function () {

    const swiper = new Swiper('.testimonials__slider ', {
        slidesPerView: 3, 

        speed: 600,
        spaceBetween: 20,
        navigation: {
            nextEl: '.testimonials__slider__button-next',
            prevEl: '.testimonials__slider__button-prev',
        },
        
        breakpoints: {
          2560: {
            slidesPerView: 3,
          },
          1920: {
            slidesPerView: 3,
          },
          1440: {
            slidesPerView: 3,
          },
          1280: {
            slidesPerView: 3,
          },
          1099: {
            slidesPerView: 3,
          },
          767: {
            slidesPerView: 2,
          },
          567: {
            slidesPerView: 1,
          },
          0: {
            slidesPerView: 1,
          },
        }

    });


    function updateClasses() {
       
        $('.swiper-slide').removeClass(function (index, className) {
            return (className.match(/swiper-slide-(next|prev)(-next|-prev){0,2}/g) || []).join(' ');
        });

        
        for (let i = 1; i <= 3; i++) {
            const nextIndex = (swiper.activeIndex + i) % swiper.slides.length;
            const prevIndex = (swiper.activeIndex - i + swiper.slides.length) % swiper.slides.length;

            $(swiper.slides[nextIndex]).addClass(`swiper-slide-next${'-next'.repeat(i - 1)}`);
            $(swiper.slides[prevIndex]).addClass(`swiper-slide-prev${'-prev'.repeat(i - 1)}`);
        }
    }

   
    swiper.on('slideChange', updateClasses);

  
    updateClasses();
});
