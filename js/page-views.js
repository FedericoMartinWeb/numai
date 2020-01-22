
// pages
var pages = function() {
	
	// objet
	var _ = this;
	
	// pages
	_.home = new homePage('[data-page=home]');
	
}

// ---

// home page
var homePage = function(sel) {

	// objet
	var _ = this;
	
	// view
	_.$page = $(sel);
	
	// ---
	
	// init
	this.init = function() {}
	
	// ---
	
	// init
	if (_.$page.length) {
		this.init();	
	}

}
