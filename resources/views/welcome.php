<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Example of Angular JS and Laravel</title>
	<style>
		small {
			font-size: .8em;
			color: grey;
		}
	</style>
</head>
<body ng-controller="TodosController">
	<h1>
		Todos header
		<small ng-if="remaining()">([[ remaining() ]] remaining)</small>
	</h1>

	<input type="text" placeholder="Filter todos" ng-model="search">
	<ul>
		<li ng-repeat="todo in todos | filter:search">
			<input type="checkbox" ng-model="todo.completed"/>
			[[todo.body]]
		</li>
	</ul>

	<form ng-submit="addTodo()">
		<input type="text" placeholder="Add new task" ng-model="newTodoText">
		<button type="submit">Add Task</button>
	</form>
</body>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.2/angular.min.js"></script>
	<script src="/js/angular/app.js"></script>
	<script src="/js/angular/todoCtrl.js"></script>
</html>