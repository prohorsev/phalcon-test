'use strict';

let passwork = angular.module('passwork', []);

passwork.controller('EnterController', function ($scope, $http) {
    $scope.enter = function () {
        $http.get('enter/get')
            .then(function (response){

            },function (error){

            });
    };
});