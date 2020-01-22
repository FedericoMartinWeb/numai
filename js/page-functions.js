
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
	$header = $('#main_header');
	$content = $('#main_content');
	$footer = $('#main_footer');
	$window = $(window);
	
	// ---
	
	// global resize
	globalResize();
	$window.resize(globalResize);
	
	// ---
	
	// pages
	pages = new pages();
	
});

// ---

// global resize
function globalResize() {
	
	// set window size
	WH = $window.height();
	WW = $window.width();
	HH = 0;
	
}

