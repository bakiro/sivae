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
    mix.sass([
        "page.scss"
    ], "public/assets/css/page.css")
    .sass([
        "app.scss"
    ], "public/assets/css/app.css")
    .copy([
        componentsPath + 'html5shiv/dist/html5shiv.min.js',
        componentsPath + 'respond/dest/respond.min.js',
        componentsPath + 'jquery/dist/jquery.min.js',
        componentsPath + 'bootstrap-sass/assets/javascripts/bootstrap.min.js',
        'resources/assets/js'
        ], 'public/assets/js')
    .copy(componentsPath + 'bootstrap-sass/assets/fonts', 'public/assets/fonts')
    .copy(componentsPath + 'font-awesome/fonts', 'public/assets/fonts/font-awesome')
    .copy('resources/assets/fonts', 'public/assets/fonts')
    .coffee([
        'app.coffee'
        ], 'public/assets/js/app.js' )
    .coffee([
        'page.coffee'
        ], 'public/assets/js/page.js' );
});