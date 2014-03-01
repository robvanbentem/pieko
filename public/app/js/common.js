/**
 * Created by rob on 2/6/14.
 */

'use strict';

/* Controllers */

var piCommon = angular.module('piCommon', []);

piCommon.controller('CNav', ['$scope',
    function ($scope) {
        $scope.name = 'Pieko';
    }]);

piCommon.controller('CTodo', function($scope){

});