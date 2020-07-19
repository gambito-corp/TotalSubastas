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
mix.copyDirectory('resources/assets/fonts/', 'public/fonts');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles([
        'node_modules/animate.css/animate.min.css',
        'resources/css/style.css',
        'resources/css/grid.css',
        'resources/css/dropzone.css',
    ], 'public/css/assets.css')
    .browserSync('http://localhost:8000')
    ;
