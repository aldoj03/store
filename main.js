
    
    var mySwiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 50,
        grabCursor: true,
      
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        breakpoints: {
          2000: {
            slidesPerView: 4,
            spaceBetween: 30,
          },
          1440: {
            slidesPerView: 4,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 25,
          },
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          600:{
            slidesPerView: 2,
            spaceBetween: 15,
          },
          440:{
            slidesPerView: 1,
            spaceBetween: 10,
          },
          320: {
            slidesPerView: 1,
            spaceBetween: 5,
          }
        }
      })
      
