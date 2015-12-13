'use strict';

// Declare app level module which depends on views, and components
angular.module('piramidApp', ['ngRoute', 'piramidApp.usersAdmin'])
    // enable debugging
    .config(function ($logProvider) {
        $logProvider.debugEnabled(true);
    });


