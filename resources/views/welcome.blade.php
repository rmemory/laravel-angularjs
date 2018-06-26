<!DOCTYPE html>
<html lang="en" ng-app>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Example of Angular JS and Laravel</title>
</head>
<body ng-controller="TodosController">
	<h1>Todos</h1>

	<ul>
		<li ng-repeat="todo in todos">{{ todo.body }}</li>
	</ul>
</body>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.2/angular.min.js"></script>
	<script src=/js/main.js></script>
</html>