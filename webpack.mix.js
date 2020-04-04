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

mix
//TODO: Styles do site
    .styles([
    'resources/assets/css/style.css',
    'resources/assets/css/style2.css'
], 'public/assets/css/style.css')


//TODO: Scripts do site
.scripts([
    'resources/assets/js/main.js',
], 'public/assets/js/main.js')

.scripts('resources/assets/manifest/manifest.json', 'public/manifest.json')
    .scripts('resources/assets/manifest/sw.js', 'public/sw.js')

//TODO: "Dependencias" do site
//Styles
.styles('resources/assets/css/bootstrap/bootstrap.css', 'public/assets/css/bootstrap/bootstrap.css')


//Scripts
.scripts('resources/assets/js/jquery.min.js', 'public/assets/js/jquery.js')
    .scripts('resources/assets/js/bootstrap/bootstrap.js', 'public/assets/js/bootstrap/bootstrap.js')



//define version
.version();