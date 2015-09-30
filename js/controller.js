var mainController = angular.module("mainController", []);
mainController.controller("ViewController", function($scope, $http){
	$scope.items = [];
	$http.get('../js/data.json').success(function(data){
		console.log("success!");
		$scope.items = data;
	});
});
mainController.controller("PhotoController", function($scope, $http, $routeParams){
	$scope.items = [];
	$http.get('../js/data.json').success(function(data){
		console.log("success!");
		$scope.photoFolders = data;
	});
});