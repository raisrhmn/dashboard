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

mix.setPublicPath('public/');

mix.sass('resources/sass/login.scss', 'public/css/login.css').version();
mix.sass('resources/sass/style.scss', 'public/css')
    .styles([
        'public/css/style.css',
        'resources/css/plugins/*.css',
        'resources/css/plugins.css',
    ], 'public/css/alto-dashauto.css').version();

mix.js('resources/js/app.js', 'public/js/app.js').version();
mix.js('resources/js/dashauto.js', 'public/js')
   .babel([
      'public/js/dashauto.js',
      'resources/js/pages/*.js'
   ], 'public/js/alto-dashauto.js').version();
