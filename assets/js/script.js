$(function () {
  // function for fixed header
  $(window).on('scroll', function () {
    $('header').toggleClass('stickey', window.scrollY > 0);
  });

  // $('.card-group').slick({
  //   arrows: true,
  //   centerMode: true,
  //   slidesToShow: 4,
  //   responsive: [
  //     {
  //       breakpoint: 768,
  //       settings: {
  //         arrows: false,
  //         centerMode: true,
  //         slidesToShow: 3,
  //       }
  //     },
  //     {
  //       breakpoint: 480,
  //       settings: {
  //         arrows: false,
  //         centerMode: true,
  //         centerPadding: '40px',
  //         slidesToShow: 1,
  //       }
  //     }
  //   ]
  // });

$('.card-group').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  arrows: true,
});
  

  $('.error-text').hide();
  $('input.form-control').blur(function () {
    $(this).parent().find('.error-text').show();
  });

})







