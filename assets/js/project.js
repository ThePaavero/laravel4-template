var App = {};

App.Site = function() {

	var self = this;

	this.init = function() {
		console.log('Initializing...');
	};

};

var site = new App.Site();
site.init();