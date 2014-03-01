/**
 * Created by rob on 2/6/14.
 */

var pieko = angular.module('pieko', [
    'ngRoute',
    'piCommon',
    'piShoplist',
    'piPayment'
]);

pieko.config(function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

pieko.config(['$routeProvider',
    function ($routeProvider) {
        $routeProvider.
            when('/shoplist', {
                templateUrl: 'pieko/shoplist/index.html',
                controller: 'CShoplist'
            }).
            when('/todo', {
                templateUrl: 'pieko/common/todo.html',
                controller: 'CTodo'
            }).
            when('/payment', {
                templateUrl: 'pieko/payment/index.html',
                controller: 'CPayment'
            }).
            otherwise({
                redirectTo: '/todo'
            });
    }]);