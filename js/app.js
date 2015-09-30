var myApp = angular.module('myApp', [
	'ngRoute',
	'mainController'
]);
myApp.config(['$routeProvider', function($routeProvider){
	$routeProvider
	.when('/main',{
		templateUrl: '../partials/main/',
		controller: 'ViewController'
	})
	.when('/Photos',{
		templateUrl: '../partials/Photos/',
		controller: 'Controller'
	})
	.otherwise({
		redirectTo: '/main'
	});
}]);