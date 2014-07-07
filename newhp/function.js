$(document).ready(function(){

	$(window).scroll(function() {
		if ($(window).scrollTop() > 1140) {
			$('#droplet').css({'position':'fixed', 'left': 'auto', 'top': '265px', 'marginLeft': '20px'})
		}

		if ($(window).scrollTop() < 1140) {
			$('#droplet').css({'position':'absolute', 'left': '20px', 'top': '-45px', 'marginLeft': '0px'})
		}
	});

	var yPos = -120;
  var scrollPos = window.pageYOffset;

  function MouseWheelHandler(e) {
    if ($(window).scrollTop() > 1870) {
     if (scrollPos < window.pageYOffset) {
      yPos += 40;
      if(yPos > 0) {
       yPos = 0;
     }
     $('.cross-vert').css('background-position', '0 '+yPos);
     $('.cross-horz').css('background-position', '0 '+(yPos-40));
   } else {
    yPos -= 40;
    if(yPos < -120) {
      yPos = -120;
    }
    $('.cross-vert').css('background-position', '0 '+yPos);
    $('.cross-horz').css('background-position', '0 '+(yPos-40));
  }
}
scrollPos = window.pageYOffset;
}

window.onscroll = MouseWheelHandler;


$('.slide-bank').nivoSlider({
    effect: 'random',               // Specify sets like: 'fold,fade,sliceDown'
    slices: 15,                     // For slice animations
    boxCols: 8,                     // For box animations
    boxRows: 4,                     // For box animations
    animSpeed: 500,                 // Slide transition speed
    pauseTime: 3000,                // How long each slide will show
    startSlide: 0,                  // Set starting Slide (0 index)
    directionNav: false,             // Next & Prev navigation
    controlNav: true,               // 1,2,3... navigation
    controlNavThumbs: false,        // Use thumbnails for Control Nav
    pauseOnHover: true,             // Stop animation while hovering
    manualAdvance: false,           // Force manual transitions
    prevText: 'Prev',               // Prev directionNav text
    nextText: 'Next',               // Next directionNav text
    randomStart: false,             // Start on a random slide
    beforeChange: function(){
    },     // Triggers before a slide transition
    afterChange: function(){
    },      // Triggers after a slide transition
    slideshowEnd: function(){},     // Triggers after all slides have been shown
    lastSlide: function(){},        // Triggers when last slide is shown
    afterLoad: function(){}         // Triggers when slider has loaded
  });


$('.product-bank').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  swipe: false,
  draggable: false,
  arrows: true
});

$('.vid-mod .mask').click(function(){
  $('.lightbox').show();
  $('.lightbox-overlay').show();
});

$('.signup').click(function(){
  $('.signup-form').toggle();
});

$('.lightbox-overlay').click(function(){
  $('.lightbox').hide();
  $('.lightbox-overlay').hide();
});

$('.product').click(function(){
  if($(this).hasClass('left')) {
    $('.divet.left').animate({left: '158.5px'});
  }
  if($(this).hasClass('mid')) {
    $('.divet.left').animate({left: '478.5px'});
  }
  if($(this).hasClass('right')) {
    $('.divet.left').animate({left: '794.5px'});
  }
  var title = $(this).find('h3').text();
  $('.product-display h3').text(title);
  var img = $(this).find('.thumb').attr('src');
  $('.ft-img img').attr('src', img);
  var text = $(this).find('p').text();
  $('.product-display p').text(text);
  var price = $(this).find('.price').text();
  $('.product-display .price').text(price);
});


});

