
$('.tema_slider').slick({
  dots: false,
  arrows: false, 
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  prevArrow: '<div class="slick-prev"><svg width="43" height="33" viewBox="0 0 43 33" fill="none" xmlns="http://www.w3.org/2000/svg"> <g opacity="0.5"><path fill-rule="evenodd" clip-rule="evenodd" d="M43 16.6191C43 17.7499 42.0832 18.6667 40.9524 18.6667H2.04762C0.916748 18.6667 0 17.7499 0 16.6191C0 15.4882 0.916748 14.5714 2.04762 14.5714H40.9524C42.0832 14.5714 43 15.4882 43 16.6191Z" fill="black"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8288 32.4003C17.0292 33.1999 15.7327 33.1999 14.9331 32.4003L0.59972 18.0669C-0.199926 17.2673 -0.199926 15.9708 0.59972 15.1712L14.9331 0.83783C15.7327 0.0381813 17.0292 0.0381813 17.8288 0.83783C18.6285 1.63747 18.6285 2.93395 17.8288 3.7336L4.94338 16.619L17.8288 29.5045C18.6285 30.3041 18.6285 31.6006 17.8288 32.4003Z" fill="black"/></g> </svg></div>',
  nextArrow: '<div class="slick-next"><svg width="43" height="33" viewBox="0 0 43 33" fill="none" xmlns="http://www.w3.org/2000/svg"> <g opacity="0.5"> <path fill-rule="evenodd" clip-rule="evenodd" d="M0 16.6191C0 17.7499 0.91675 18.6667 2.04762 18.6667H40.9524C42.0833 18.6667 43 17.7499 43 16.6191C43 15.4882 42.0833 14.5714 40.9524 14.5714H2.04762C0.91675 14.5714 0 15.4882 0 16.6191Z" fill="black"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M25.1711 32.4003C25.9708 33.1999 27.2673 33.1999 28.0669 32.4003L42.4002 18.0669C43.1999 17.2673 43.1999 15.9708 42.4002 15.1712L28.0669 0.83783C27.2673 0.0381813 25.9708 0.0381813 25.1711 0.83783C24.3715 1.63747 24.3715 2.93395 25.1711 3.7336L38.0566 16.619L25.1711 29.5045C24.3715 30.3041 24.3715 31.6006 25.1711 32.4003Z" fill="black"/> </g> </svg></div>',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    
  ]
});


$('.clients_slider').slick({
         autoplay: true,
            dots: false,
            prevArrow: '<div class="slick-prev"><svg width="34" height="9" viewBox="0 0 34 9" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M33 4.5H1H33Z" fill="#D8D8D8"/> <path d="M33 4H33.5V5H33V4ZM0.646446 4.85355C0.451183 4.65829 0.451183 4.34171 0.646446 4.14645L3.82843 0.964466C4.02369 0.769204 4.34027 0.769204 4.53553 0.964466C4.7308 1.15973 4.7308 1.47631 4.53553 1.67157L1.70711 4.5L4.53553 7.32843C4.7308 7.52369 4.7308 7.84027 4.53553 8.03553C4.34027 8.2308 4.02369 8.2308 3.82843 8.03553L0.646446 4.85355ZM33 5H1V4H33V5Z" fill="#0F1C49"/> </svg></div>',
  nextArrow: '<div class="slick-next"><svg width="34" height="9" viewBox="0 0 34 9" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M1 4.5H33H1Z" fill="#D8D8D8"/> <path d="M1 4H0.5V5H1V4ZM33.3536 4.85355C33.5488 4.65829 33.5488 4.34171 33.3536 4.14645L30.1716 0.964466C29.9763 0.769204 29.6597 0.769204 29.4645 0.964466C29.2692 1.15973 29.2692 1.47631 29.4645 1.67157L32.2929 4.5L29.4645 7.32843C29.2692 7.52369 29.2692 7.84027 29.4645 8.03553C29.6597 8.2308 29.9763 8.2308 30.1716 8.03553L33.3536 4.85355ZM1 5H33V4H1V5Z" fill="#0F1C49" fill-opacity="0.4"/> </svg></div>',
  
            arrows: true,
            centerMode: true,
            centerPadding: '10%',
            infinite: true,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                 
                  
                }
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                 
                }
              },
              {
                breakpoint: 480,
                settings: {
                 
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
              // You can unslick at a given breakpoint now by adding:
              // settings: "unslick"
              // instead of a settings object
            ]
          });