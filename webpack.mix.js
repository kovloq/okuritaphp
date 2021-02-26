const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js([
	"resources/js/app.js",
	"resources/js/jquery.js",
	"resources/js/popper.min.js",
	"resources/js/bootstrap.min.js",
	"resources/js/bootstrap-rating.js",
	"resources/js/aos.js",
	"resources/js/cloudzoom.js",
	"resources/js/jquery-migrate.js",
	"resources/js/perfect-scroolbar.js",
	"resources/js/slick.js",
	"resources/js/thumbelina.js",
	"resources/js/theme.js"
	
	], 'public/js/app.js')
    .styles([
        "resources/css/all.min.css",
        "resources/css/animate.css",
        "resources/css/aos.css",
        "resources/css/bootstrap.min",
        "resources/css/animate.css",
        "resources/css/cloudzoom.css",
        "resources/css/perfect-scroolbar.css",
        "resources/css/slick.css",
        "resources/css/thumbelina.css",
        "resources/css/theme.css"
    ],'public/css/app.css').sourceMaps()
    .vue();
