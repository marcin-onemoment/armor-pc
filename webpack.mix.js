const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/form.js", "public/js/form.js")
    .js("resources/js/sweetAlert.js", "public/js/sweetAlert.js")
    .sass("resources/sass/app.scss", "public/css")
    .sass("resources/sass/custom/style.scss", "public/css/new.css");

mix.js("resources/js/script.js", "public/js/script.js")
