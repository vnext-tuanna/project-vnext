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
const publicCssFolder = 'public/css';
const publicJsFolder = 'public/js';
const clientCss = 'public/client/css'
const publicFontFolder = 'public/fonts';

mix.js('resources/js/app.js', publicJsFolder)
    // .js('resources/js/CKeditor.js', publicJsFolder)
    // .js('resources/js/validation.js', publicJsFolder)
    .sass('resources/css/style.scss', clientCss)
    .sass('resources/scss/app.scss', publicCssFolder)


mix.options({
    processCssUrls: false
});
