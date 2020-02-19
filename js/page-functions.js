
// global vars
var $wrapper;
var $body;
var $html;
var $htmlBody;
var $window;
var $header;
var $content;
var $footer;
var WH;
var WW;
var HH;

// ---

// the magic begins
$(document).ready(function() {
	
	// global vars
	$wrapper = $('#wrapper');
	$body = $('body');
	$html = $('html');
	$htmlBody = $('html,body');
	$header = $('.main__header');
	$footer = $('#main_footer');
	$window = $(window);
	$menu__icon = $('.site-header__menu-icon');
	$menu = $('.header__menu');
	
	// ---
	
	// global resize
	globalResize();
	$window.resize(globalResize);
	
	// ---
	
	// pages
	pages = new pages();

	// Menu Mobile

	$menu__icon.on('click', function(){
		$(this).toggleClass('active');
		$menu.toggleClass('show');
	});

	$(window).on('load resize', function(){
		
		var marginValue = $('.title .container').css('margin-left');
		$('.title__line').css('width', marginValue);
		
	});

	// Hero
	
	$('.entrega').css('margin-right', $('.title .container').css('margin-right'));

	// Galeria

	var swiper = new Swiper('.swiper-gallery', {
		slidesPerView: 1,
		spaceBetween: 30,
		speed: 2000,
		loop: true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			// when window width is >= 320px
			992: {
				slidesPerView: 'auto',
			},
		},
		on: {

			init: function () {
			  $('.swiper-slide-next').addClass('more');
			},
	  
			transitionStart: function () {
				setTimeout(function(){
					$('.swiper-slide-next').addClass('more');
				  }, 200);
				
			},

		}
	});

	// Header

	if(WW > 992){
		window.onscroll = function() {
			var _ = this;
			var currentScrollPos = window.pageYOffset;
		
			if (_.$prevScrollpos > currentScrollPos) {
				_.$header.css('top', '0');
			} else if(_.$prevScrollpos < currentScrollPos && $(window).scrollTop() > _.$header.outerHeight()){
				_.$header.css('top', -_.$header.outerHeight() + "px");
			}
			_.$prevScrollpos = currentScrollPos;

			// if(currentScrollPos != 0){
			// 	_.$header.addClass("back");
			// } else {_.$header.removeClass("back");}

		}
	}


	$('.header__menu .header__menu__wrapper nav ul a').on('click', function(e){
		e.preventDefault();

		$('html, body').animate({
			scrollTop: $($(this).attr('href')).offset().top - 80,
		},900 ,'linear');

		$('.site-header__menu-icon').removeClass('active');
		$('.header__menu').removeClass('show');

	});

	// Animations

	
});

// ---

// global resize
function globalResize() {
	
	// set window size
	WH = $window.height();
	WW = $window.width();
	HH = 0;
	
}

