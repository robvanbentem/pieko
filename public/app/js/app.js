/**
 * Created by rob on 2/6/14.
 */

var pieko = angular.module('pieko', [
    'mgcrea.ngStrap', // angularstrap
    'ngRoute',
    'ngAnimate',
    'piCommon',
    'piShoplist',
    'piReceipt'
]);

pieko.config(function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

pieko.config(['$routeProvider', '$locationProvider', function ($routeProvider, $locationProvider) {
    $locationProvider.html5Mode(true);
    $routeProvider.
        when('/shoplist', {
            templateUrl: 'pieko/shoplist/index.html',
            controller: 'CShoplist'
        }).
        when('/todo', {
            templateUrl: 'pieko/common/todo.html',
            controller: 'CTodo'
        }).
        when('/receipt', {
            templateUrl: 'pieko/receipt/index.html',
            controller: 'CReceipt'
        }).
        otherwise({
            redirectTo: '/todo'
        });
}]);