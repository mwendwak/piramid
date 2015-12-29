/**
 * Created by Administrator on 12/11/2015.
 */
'use strict';

angular.module('piramidApp.usersAdmin',['ngRoute'])

    .config(['$routeProvider', function($routeProvider) {

        $routeProvider.when(
            '/admin/users', {
                templateUrl: 'pivot/admin/users/users.html',
                controller: 'UsersAdminCtrl'
            });
        $routeProvider.otherwise({
            templateUrl: 'home.html'
        });
    }]
)

    .controller('UsersAdminCtrl', ['$scope','$http','$location',function($scope,$http,$location){
        $scope.data = {};
        $scope.new_users = [];
        $scope.selected_idx;
    }]
)