(function () {
	'use strict';
	angular
		.module('myApp')
		.controller('TodosController', TodosController)
	TodosController.$inject = [
		"$scope"
	];
	function TodosController(
		$scope
	) {
		$scope.todos = [
			{ body: 'Go to store' },
			{ body: 'Finish Video' },
		];
	}
})();