"use strict";
var album = angular.module('album', []);
album.controller('albcr', function ($scope, $http) {
	//get data for initialisation
	$http.get("http://localhost/vectraAngular/albums/start")
		.then(function successCallback(response) {
			$scope.albums = response.data;
			//console.log("its working");
		}, function errorCallback(response) {
			console.log("Unable to perform get request");
		});


	$scope.removeAlbum = function (idx, id) {

		var data = {

			row: idx,

			albumid: id

		};


		$http.post("http://localhost/vectraAngular/albums/delete", JSON.stringify(data)).then(function (response) {

			// This function handles success
			console.log(response.data);
			$scope.albums.splice(response.data, 1);

		}, function (response) {
			console.log("Unable to perform get request");
			console.log(response);
			// this function handles error

		});

		//$scope.albums.splice(idx, 1);

	};


});
