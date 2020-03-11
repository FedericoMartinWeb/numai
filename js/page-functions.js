
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

	var swiper = new Swiper('.swiper-gallery1', {
		slidesPerView: 1.5,
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
				slidesPerView: 4,
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

	var swiper = new Swiper('.otros-gallery', {
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
				slidesPerView: 4,
			},
		},
		on: {

			init: function () {
			  $('.swiper-slide-active').addClass('more');
			},
	  
			transitionStart: function () {
				setTimeout(function(){
					$('.swiper-slide-active').addClass('more');
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
		},800 ,'linear');

		$('.site-header__menu-icon').removeClass('active');
		$('.header__menu').removeClass('show');

	});

	$('.header__logo').on('click', function(e){
		e.preventDefault();
		$('html, body').animate({
			scrollTop: 0,
		},800 ,'linear');
	});

	// Mapping

	function left(){
		$('.map__info__container').css('padding-left', $('.container').css('margin-left'));
	}

	left();

	$(window).on('resize', function(){
		left();
	});

	// $('.build__img img').mapster( { 
	// 	fillColor: 'ff0000', 
	// 	stroke: true, 
	// 	singleSelect: true
	// });

	   // a cross reference of area names to text to be shown for each area
	   var xref = {
		piso1: 
			"<div class='map__info__detail'> "+
				"<div class='piso'>piso 1</div>"+
				"<div class='unidad'>"+
					"<h6>unidad a</h6>"+
					"<ul>"+
						"<li>Cub. <b>69.70 m<sup>2</sup></b></li>"+
						"<li>Desc. <b>5.50 m<sup>2</sup></b></li>"+
						"<li>Total. <b>75.20 m<sup>2</sup></b></li>"+
					"</ul>"+
				"</div>"+
				"<div class='unidad'>"+
					"<h6>unidad b</h6>"+
					"<ul>"+
						"<li>Cub. <b>71.00 m<sup>2</sup></b></li>"+
						"<li>Semicub. <b>9.30 m<sup>2</sup></b></li>"+
						"<li>Desc. <b>5.60 m<sup>2</sup></b></li>"+
						"<li>Total. <b>85.90 m<sup>2</sup></b></li>"+
					"</ul>"+
				"</div><div class='unidad'>"+
					
				"</div>"+
			"</div>"+

			"<div class='map__img'>"+
				"<a href='img/planos/planos-1.jpg' data-lightbox='pland'>"+
					"<img src='img/planos/planos-1.jpg' alt=''>"+
				"</a>"+
			"</div>",
		piso2: 
			"<div class='map__info__detail'> "+
				"<div class='piso'>piso 2</div>"+
				"<div class='unidad'>"+
					"<h6>unidad a</h6>"+
					"<ul>"+
						"<li>Cub. <b>70.00 m<sup>2</sup></b></li>"+
						"<li>Desc. <b>9.60 m<sup>2</sup></b></li>"+
						"<li>Total. <b>79.60 m<sup>2</sup></b></li>"+
					"</ul>"+
				"</div>"+
				"<div class='unidad'>"+
					"<h6>unidad b</h6>"+
					"<ul>"+
						"<li>Cub. <b>27.80 m<sup>2</sup></b></li>"+
						"<li>Semicub. <b>4.00 m<sup>2</sup></b></li>"+
						"<li>Total. <b>31.80 m<sup>2</sup></b></li>"+
					"</ul>"+
				"</div><div class='unidad'>"+
					"<h6>unidad c</h6>"+
					"<ul>"+
						"<li>Cub. <b>43.00 m<sup>2</sup></b></li>"+
						"<li>Semicub. <b>5.32 m<sup>2</sup></b></li>"+
						"<li>Total. <b>48.30 m<sup>2</sup></b></li>"+
					"</ul>"+
				"</div>"+
			"</div>"+

			"<div class='map__img'>"+
			"<a href='img/planos/planos-2.jpg' data-lightbox='pland'>"+
			"<img src='img/planos/planos-2.jpg' alt=''>"+
		"</a>"+
			"</div>",
		piso3: 
			"<div class='map__info__detail'> "+
				"<div class='piso'>piso 3</div>"+
				"<div class='unidad'>"+
					"<h6>unidad a</h6>"+
					"<ul>"+
						"<li>Cub. <b>70.00 m<sup>2</sup></b></li>"+
						"<li>Desc. <b>9.60 m<sup>2</sup></b></li>"+
						"<li>Total. <b>79.60 m<sup>2</sup></b></li>"+
					"</ul>"+
				"</div>"+
				"<div class='unidad'>"+
					"<h6>unidad b</h6>"+
					"<ul>"+
						"<li>Cub. <b>27.80 m<sup>2</sup></b></li>"+
						"<li>Semicub. <b>4.00 m<sup>2</sup></b></li>"+
						"<li>Total. <b>31.80 m<sup>2</sup></b></li>"+
					"</ul>"+
				"</div><div class='unidad'>"+
					"<h6>unidad c</h6>"+
					"<ul>"+
						"<li>Cub. <b>43.00 m<sup>2</sup></b></li>"+
						"<li>Semicub. <b>5.32 m<sup>2</sup></b></li>"+
						"<li>Total. <b>48.30 m<sup>2</sup></b></li>"+
					"</ul>"+
				"</div>"+
			"</div>"+

			"<div class='map__img'>"+
			"<a href='img/planos/planos-3.jpg' data-lightbox='pland'>"+
			"<img src='img/planos/planos-3.jpg' alt=''>"+
		"</a>"+
			"</div>",
		piso4: 
			"<div class='map__info__detail'> "+
				"<div class='piso'>piso 4</div>"+
				"<div class='unidad'>"+
					"<h6>unidad a</h6>"+
					"<ul>"+
						"<li>Cub. <b>70.00 m<sup>2</sup></b></li>"+
						"<li>Desc. <b>9.60 m<sup>2</sup></b></li>"+
						"<li>Total. <b>79.60 m<sup>2</sup></b></li>"+
					"</ul>"+
				"</div>"+
				"<div class='unidad'>"+
					"<h6>unidad b</h6>"+
					"<ul>"+
						"<li>Cub. <b>27.80 m<sup>2</sup></b></li>"+
						"<li>Semicub. <b>4.00 m<sup>2</sup></b></li>"+
						"<li>Total. <b>31.80 m<sup>2</sup></b></li>"+
					"</ul>"+
				"</div><div class='unidad'>"+
					"<h6>unidad c</h6>"+
					"<ul>"+
						"<li>Cub. <b>43.00 m<sup>2</sup></b></li>"+
						"<li>Semicub. <b>5.32 m<sup>2</sup></b></li>"+
						"<li>Total. <b>48.30 m<sup>2</sup></b></li>"+
					"</ul>"+
				"</div>"+
			"</div>"+

			"<div class='map__img'>"+
			"<a href='img/planos/planos-4.jpg' data-lightbox='pland'>"+
			"<img src='img/planos/planos-4.jpg' alt=''>"+
		"</a>"+
			"</div>",
		piso5: 
			"<div class='map__info__detail'> "+
				"<div class='piso'>piso 5</div>"+
				"<div class='unidad'>"+
					"<h6>unidad a</h6>"+
					"<ul>"+
						"<li>Cub. <b>49.00 m<sup>2</sup></b></li>"+
						"<li>Semicub. <b>6.35 m<sup>2</sup></b></li>"+
						"<li>Desc. <b>22.95 m<sup>2</sup></b></li>"+
						"<li>Total. <b>78.30 m<sup>2</sup></b></li>"+
					"</ul>"+
				"</div>"+
				"<div class='unidad'>"+
					"<h6>unidad b</h6>"+
					"<ul>"+
						"<li>Cub. <b>38.00 m<sup>2</sup></b></li>"+
						"<li>Semicub. <b>5.70 m<sup>2</sup></b></li>"+
						"<li>Desc. <b>35.28 m<sup>2</sup></b></li>"+
						"<li>Total. <b>78.98 m<sup>2</sup></b></li>"+
					"</ul>"+
				"</div><div class='unidad'>"+
					
				"</div>"+
			"</div>"+

			"<div class='map__img'>"+
			"<a href='img/planos/planos-5.jpg' data-lightbox='pland'>"+
			"<img src='img/planos/planos-5.jpg' alt=''>"+
		"</a>"+
			"</div>",
		piso6: 
			"<div class='map__info__detail'> "+
				"<div class='piso'>piso 6</div>"+
				"<div class='unidad'>"+
					"<h6>unidad a</h6>"+
					"<ul>"+
						"<li>Cub. <b>49.00 m<sup>2</sup></b></li>"+
						"<li>Semicub. <b>6.35 m<sup>2</sup></b></li>"+
						"<li>Total. <b>55.35 m<sup>2</sup></b></li>"+
					"</ul>"+
				"</div>"+
				"<div class='unidad'>"+
					"<h6>unidad b</h6>"+
					"<ul>"+
						"<li>Cub. <b>38.00 m<sup>2</sup></b></li>"+
						"<li>Semicub. <b>5.70 m<sup>2</sup></b></li>"+
						"<li>Total. <b>43.70 m<sup>2</sup></b></li>"+
					"</ul>"+
				"</div><div class='unidad'>"+
					
				"</div>"+
			"</div>"+

			"<div class='map__img'>"+
			"<a href='img/planos/planos-6.jpg' data-lightbox='pland'>"+
			"<img src='img/planos/planos-6.jpg' alt=''>"+
		"</a>"+
			"</div>",
		piso7: 
			"<div class='map__info__detail'> "+
				"<div class='piso'>piso 7</div>"+
				"<div class='unidad'>"+
					"<h6>unidad a</h6>"+
					"<ul>"+
						"<li>Cub. <b>49.00 m<sup>2</sup></b></li>"+
						"<li>Semicub. <b>6.35 m<sup>2</sup></b></li>"+
						"<li>Total. <b>55.35 m<sup>2</sup></b></li>"+
					"</ul>"+
				"</div>"+
				"<div class='unidad'>"+
					"<h6>unidad b</h6>"+
					"<ul>"+
						"<li>Cub. <b>38.00 m<sup>2</sup></b></li>"+
						"<li>Semicub. <b>5.70 m<sup>2</sup></b></li>"+
						"<li>Total. <b>43.70 m<sup>2</sup></b></li>"+
					"</ul>"+
				"</div><div class='unidad'>"+
					
				"</div>"+
			"</div>"+

			"<div class='map__img'>"+
			"<a href='img/planos/planos-7.jpg' data-lightbox='pland'>"+
			"<img src='img/planos/planos-7.jpg' alt=''>"+
		"</a>"+
			"</div>",
		piso8: 
			"<div class='map__info__detail'> "+
				"<div class='piso'>piso 8</div>"+
				"<div class='unidad'>"+
					"<h6>unidad a (duplex)</h6>"+
					"<ul>"+
						"<li>Cub. <b>57.20 m<sup>2</sup></b></li>"+
						"<li>Desc. <b>29.80 m<sup>2</sup></b></li>"+
						"<li>Total. <b>87.00 m<sup>2</sup></b></li>"+
					"</ul>"+
				"</div>"+
				"<div class='unidad'>"+
					"<h6>unidad b</h6>"+
					"<ul>"+
						"<li>Cub. <b>38.00 m<sup>2</sup></b></li>"+
						"<li>Semicub. <b>5.70 m<sup>2</sup></b></li>"+
						"<li>Total. <b>43.70 m<sup>2</sup></b></li>"+
					"</ul>"+
				"</div><div class='unidad'>"+
					
				"</div>"+
			"</div>"+

			"<div class='map__img'>"+
			"<a href='img/planos/planos-8.jpg' data-lightbox='pland'>"+
			"<img src='img/planos/planos-8.jpg' alt=''>"+
		"</a>"+
			"</div>",
		piso9: 
			"<div class='map__info__detail'> "+
				"<div class='piso'>piso 9</div>"+
				"<div class='unidad'>"+
					"<h6>unidad a (duplex)</h6>"+
					"<ul>"+
						"<li>Cub. <b>57.20 m<sup>2</sup></b></li>"+
						"<li>Desc. <b>29.80 m<sup>2</sup></b></li>"+
						"<li>Total. <b>87.00 m<sup>2</sup></b></li>"+
					"</ul>"+
				"</div>"+
				"<div class='unidad'>"+
					"<h6>unidad b</h6>"+
					"<ul>"+
						"<li>Cub. <b>38.00 m<sup>2</sup></b></li>"+
						"<li>Semicub. <b>5.70 m<sup>2</sup></b></li>"+
						"<li>Total. <b>43.70 m<sup>2</sup></b></li>"+
					"</ul>"+
				"</div><div class='unidad'>"+
					
				"</div>"+
			"</div>"+

			"<div class='map__img'>"+
			"<a href='img/planos/planos-9.jpg' data-lightbox='pland'>"+
			"<img src='img/planos/planos-9.jpg' alt=''>"+
		"</a>"+
			"</div>",
		piso10: 
			"<div class='map__info__detail'> "+
				"<div class='piso'>piso 10</div>"+
				"<div class='unidad'>"+
					"<h6>SUM</h6>"+
					"<ul>"+
						"<li>Cub. <b>20.18 m<sup>2</sup></b></li>"+
						"<li>Desc. <b>20.82 m<sup>2</sup></b></li>"+
						"<li>Total. <b>41 m<sup>2</sup></b></li>"+
					"</ul>"+
				"</div>"+
				"<div class='unidad'>"+
					
				"</div><div class='unidad'>"+
					
				"</div>"+
			"</div>"+

			"<div class='map__img'>"+
			"<a href='img/planos/planos-SUM.jpg' data-lightbox='pland'>"+
			"<img src='img/planos/planos-SUM.jpg' alt=''>"+
		"</a>"+
			"</div>",
        
    };
    
    
    var defaultDipTooltip = 'I know you want the dip. But it\'s loaded with saturated fat, just skip it '
		+'and enjoy as many delicious, crisp vegetables as you can eat.';
		
    var image = $('.build__img img');
	
	
    image.mapster(
    {
        fillOpacity: 0.7,
        fillColor: "000000",
        singleSelect: true,
        mapKey: 'name',
		listKey: 'name',
        onClick: function (e) {
            var newToolTip = defaultDipTooltip;
            
            // update text depending on area selected
            $('.changing').html(xref[e.key]);
            
           
            image.mapster('set_options', { 
                areas: [{
                    key: "dip",
                    toolTip: newToolTip
                    }]
                });
        },
        showToolTip: true,
        toolTipClose: ["tooltip-click", "area-click"],
	});
	
	// Tabs

	var linksParent = $('.tabs__links');
    var items = $('.tabs__content__item');

    linksParent.on('click', 'a', function(e){
        e.preventDefault();
        var t = $(this);
        var i = t.index();
        
        t.addClass('active').siblings().removeClass('active');

        items.eq(i).addClass('active').siblings().removeClass('active');
    });
});

// ---

// global resize
function globalResize() {
	
	// set window size
	WH = $window.height();
	WW = $window.width();
	HH = 0;
	
}

