const mix = require('laravel-mix');

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

mix.styles([
   'resources/views/admin/css/style.css',
   'resources/views/admin/css/styleMenu.css'
], 'public/admin/css/style.css')
   .scripts([
      'resources/views/admin/js/script.js'
   ], 'public/admin/js/script.js')
   // .sass('resources/sass/app.scss', 'public/css')
   .version();
