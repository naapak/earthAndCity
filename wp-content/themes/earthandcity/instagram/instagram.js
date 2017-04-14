(function($) {
// Get Photos from Instagram using JavaScript API: https://rudrastyh.com/javascript/get-photos-from-instagram.html
$(document).ready(function(){
// Instagram feed
var token = user.token,
    username = user.username,
    num_photos = 24,
    slickAnimClass = 'slick-animate',
    $carousel = $('.Instagramcarousel'),
    $blockFeed = $('#instagram-feeds'),
    carouselSettings, item, image, imgSource, imgAlt;

$carousel.hide();

// Carousel created with slick.js
carouselSettings = {
  // infinite: false,
  // autoplay: true,
  // autoplaySpeed: 3000,
  dots: true,
  // centerMode: true,
  infinite: true,
  // pauseOnHover: false,
  slidesToShow: 5,
  slidesToScroll: 5,
  speed: 800,

  responsive: [
  {       breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
    },
   {
      breakpoint: 900,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
      }
    }
  ]
};

$.ajax({
  url: 'https://api.instagram.com/v1/users/search',
  dataType: 'jsonp',
  type: 'GET',
  data: {
    access_token: token,
    q: username,
  },
  success: function(data) {
    $.ajax({
      url: 'https://api.instagram.com/v1/users/' + data.data[0].id + '/media/recent', 
      dataType: 'jsonp',
      type: 'GET',
      data: { 
        access_token: token,
        count: num_photos
      },
      success: function(data2) {
        for(item in data2.data) {
          // console.log(data2);
          imgSource = data2.data[item].images.standard_resolution.url;
          imgAlt = '';
          image = '<img src="' + imgSource + '" />';
          item = '<div class="carouselItem">' + image + '</div>';
          $blockFeed.append(item);
        }
        // Create carousel
        $carousel
          .slick(carouselSettings)
          .fadeIn(800);

      }
    });
  }
});

// Carousel events to fix jump when looped
$carousel.on('init', function() {
  $('.slick-current').addClass(slickAnimClass);
}).on('beforeChange', function() {
  $(".item").removeClass(slickAnimClass);
}).on('afterChange', function() {
  $('.slick-current').addClass(slickAnimClass);
});

});
  })(jQuery);