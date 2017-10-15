let mix = require('laravel-mix');

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

/*mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');*/
mix.styles([
    'resources/assets/css/entypo.css',
    'resources/assets/css/font-awesome.min.css',
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/mouldifi-core.css',
    'resources/assets/css/perfect-scrollbar.css',
    'resources/assets/css/bootstrap-rtl.min.css',
    'resources/assets/css/mouldifi-rtl-core.css',
], 'public/css/main.css');

mix.js([
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/plugins/metismenu/jquery.metismenu.js',
    'resources/assets/js/functions.js',
], 'public/js/main.js');