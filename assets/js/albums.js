"use strict";
var album = angular.module('album',[]);
album.controller('albcr',function($scope){
	$scope.removeAlbum=function(idx){
		$scope.albums.splice(idx,1);
	};
				 
				 });
