(function(){
	//wrapping our js files wherever we write the in IIFE's helps to keep scope clean
	'use strict';

	//Fix for the backward compatibility features removed and deprecated in the new angular version.
	angular.lowercase=function(text){
		if(typeof text != 'undefined'){
			return text.toLowerCase();
		}
	}
	//use strict gives us the ability to use Javascript 2015 style code.
	angular.module('myApp',[
			// 'ui.bootstrap',
		], function($interpolateProvider) {
		$interpolateProvider.startSymbol('[[');
		$interpolateProvider.endSymbol(']]');
	});
	//all I've done here is called Angular and bootstrapped 'myApp as an angular application.'
	// all of your global dependancies you'll want to put in the array passed here
	// i.e. angular.ui.bootstrap, ui.router etc.... whatever you need that is an 
	// external dependancies that don't ship with the framework.
})();
