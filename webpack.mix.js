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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
/*
/mix.copy('node_modules/dark-mode-switch/dark-mode.css','public/css/dark-mode.css');
/mix.copy('node_modules/dark-mode-switch/dark-mode-switch.min.js','public/js/dark-mode-switch.min.js');

/mix.copy('node_modules/select2/dist/js/select2.js', 'public/js/select2.js');
/mix.copy('node_modules/select2/dist/css/select2.css', 'public/css/select2-bootstrap4.css');
*/
