'use strict';

var gulp = require('gulp');
var elixir = require('laravel-elixir');



elixir(function(mix) {
    mix.sass('app.scss');
    // mix.browserSync({
    //     proxy: 'localhost'
    });
    // mix.browserSync({
    //     'css': [
    //         'public/**/*.css',
    //     ],
    //     'views': [
    //         'resources/views/**/*'
    //     ]
    // }, {
    //     proxy: 'homestead.app',
    //     reloadDelay: 1000,
    //     reloadOnRestart: false,
    //     open: false
    // });
// }); 