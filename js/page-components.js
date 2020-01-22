
// components - example
var example = function() {

	// objet
	var _ = this;
	
	// element
	_.$example = $html;
	
	// ---
	
	// init
	this.init = function() {
	
		// show contact
		_.$example.click(function(e) {
			e.preventDefault();
			console.log('component example');
		});
	
	}
	
	// ---
	
	// init
	this.init();

}