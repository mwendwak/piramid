/**
 * Created by Administrator on 12/11/2015.
 */
'use strict';

angular.module('piramidApp.usersAdmin',['ngRoute'])

.config(['$routeProvider', function($routeProvider) {
        $routeProvider.when(
            '/users', {
                templateUrl: 'users/userss.html',
                controller: 'UsersAdminCtrl'
            }
        )
    }]
)

.controller('UsersAdminCtrl', ['$scope','$http','$location',function($scope,$http,$location){
        $cope.new_users = [];
        $scope.selected_idx;
    }]
)