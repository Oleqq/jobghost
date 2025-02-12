document.querySelector('.header__burger').addEventListener('click', function() {
  this.classList.toggle('burger--active');
  document.querySelector('.header__menu').classList.toggle('menu--active');
});

$(document).ready(function () {
  const swiper = new Swiper('.testimonials__slider', {
      slidesPerView: 3,
      speed: 600,
      spaceBetween: 20,
      navigation: {
          nextEl: '.testimonials__slider__button-next',
          prevEl: '.testimonials__slider__button-prev',
      },
      pagination: {
          el: '.testimonials__pagination',
          clickable: true,
      },
      breakpoints: {
          2560: { slidesPerView: 3 },
          1920: { slidesPerView: 3 },
          1440: { slidesPerView: 3 },
          1280: { slidesPerView: 3 },
          1099: { slidesPerView: 3 },
          767: { slidesPerView: 2 },
          567: { slidesPerView: 1 },
          0: { slidesPerView: 1 },
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



document.addEventListener('DOMContentLoaded', function() {
  const tabs = document.querySelectorAll('.company-single__tab');
  const contents = document.querySelectorAll('[data-content]');

  tabs.forEach(tab => {
      tab.addEventListener('click', function() {
         
          tabs.forEach(t => t.classList.remove('active'));

       
          contents.forEach(content => {
              content.style.display = 'none';
          });

        
          this.classList.add('active');

         
          const target = this.getAttribute('data-target');
          const contentToShow = document.querySelector(`[data-content="${target}"]`);
          if (contentToShow) {
              contentToShow.style.display = 'block';
          }
      });
  });


  if (tabs.length > 0) {
      tabs[0].click();
  }
});

document.addEventListener("DOMContentLoaded", () => {

  document.querySelectorAll(".slider-container").forEach(container => {
    const slider = container.querySelector("input[type='range']");
    const numbers = container.querySelectorAll(".numbers span");

    function updateSlider() {
      const value = parseInt(slider.value);
      numbers.forEach(num => {
        num.classList.toggle("active", parseInt(num.dataset.value) === value);
      });
    }

   
    slider.addEventListener("input", updateSlider);
    updateSlider(); 
  });
});
