var elixir = require('laravel-elixir');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */


// Desactiva los mapas de css
elixir.config.sourcemaps = false;


elixir(function(mix) {
	var componentsPath = 'node_modules/';
    //compile custom css
    mix.sass([
        "page.scss"
    ], "public/assets/css/page.css")

    .sass([
        "app.scss"
    ], "public/assets/css/app.css")

    .sass([
        "timeline.scss"
    ], "public/assets/css/timeline.css")

    .sass([
        "sb-admin-2.scss"
    ], "public/assets/css/sb-admin-2.css")

    //compile custom js
    .scripts([
        'app.js'
    ], "public/assets/js/app.js")

    .scripts([
        'page.js'
    ], "public/assets/js/page.js")

    .scripts([
        'morris-data.js'
    ], "public/assets/js/morris-data.js")


    //copy assets js
    .copy([ 
        componentsPath + 'html5shiv/dist/html5shiv.min.js',
        componentsPath + 'respond/dest/respond.min.js',
        componentsPath + 'jquery/dist/jquery.min.js',
        componentsPath + 'metismenu/dist/metisMenu.min.js',
        componentsPath + 'raphael/raphael.min.js',
        componentsPath + 'morris.js/morris.min.js',
        componentsPath + 'timeago/jquery.timeago.js',
        componentsPath + 'bootstrap-sass/assets/javascripts/bootstrap.min.js'
        ], 'public/assets/js')

    //copy assets css
    .copy([ 
        componentsPath + 'metismenu/dist/metisMenu.min.css',
        componentsPath + 'morris.js/morris.css',
        componentsPath + 'animate.css/animate.min.css'
        ], 'public/assets/css')

    // copy bootstrap fonts
    .copy(componentsPath + 'bootstrap-sass/assets/fonts', 'public/assets/fonts')

    // copy font-awesome fonts
    .copy(componentsPath + 'font-awesome/fonts', 'public/assets/fonts/font-awesome')

    // copy custom fonts
    .copy('resources/assets/fonts', 'public/assets/fonts');
});