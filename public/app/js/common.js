/**
 * Created by rob on 2/6/14.
 */

'use strict';

/* Controllers */

var piCommon = angular.module('piCommon', []);

piCommon.controller('CNav', ['$scope',
    function ($scope) {
        $scope.name = 'Pieko';

        $scope.dropdown = [
            {
                "text": "menu is defined in /public/app/js/common.js",
                "href": "#anAction"
            },
            {
                "text": "it's awesome :)",
                "click": "#anotherAction"
            },
            {
                "divider": true
            },
            {
                "text": "w00t",
                "href": "#separatedLink"
            }
        ];

    }]);

piCommon.controller('CTodo', function ($scope) {

});