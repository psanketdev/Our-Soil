console.log('code');


$(function () {
  // functinn for fixed header
  $(window).on('scroll', function () {
    $('header').toggleClass('stickey', window.scrollY > 0);
  });

  $('.card-group').slick({
    arrows: true,
    centerMode: true,
    slidesToShow: 5,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });

})
// $(document).ready(function () {

//   $('.items').slick({
//     dots: false,
//     centerMode: true,
//     slidesToShow: 4,
//     autoplay: true,
//     autoplaySpeed: 2000,
//     responsive: [
//       {
//         breakpoint: 1024,
//         settings: {
//           arrows: false,
//           centerMode: true,
//           centerPadding: '40px',
//           slidesToShow: 3
//         }
//       },

//       {
//         breakpoint: 600,
//         settings: {
//           arrows: false,
//           centerMode: true,
//           centerPadding: '40px',
//           slidesToShow: 1
//         }
//       },
//       {
//         breakpoint: 480,
//         settings: {
//           arrows: false,
//           centerMode: true,
//           centerPadding: '40px',
//           slidesToShow: 1
//         }
//       }
//     ]
//   });



// });
