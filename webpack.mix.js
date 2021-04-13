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

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);
//mix.js('resources/js/app.js', 'public/js')
 mix.sass('resources/scss/a-viewbooks.scss','public/css')
 .copy('resources/img','public/img')
 .sass('resources/scss/a-vieworders.scss','public/css')
 .sass('resources/scss/a-viewusers.scss','public/css')
 .sass('resources/scss/admin.scss','public/css')
 .sass('resources/scss/cod.scss','public/css')
 .sass('resources/scss/creditcard.scss','public/css')
 .sass('resources/scss/home.scss','public/css')
 .sass('resources/scss/message.scss','public/css')
 .sass('resources/scss/mybooks.scss','public/css')
 .sass('resources/scss/mycart.scss','public/css')
 .sass('resources/scss/myorders.scss','public/css')
 .sass('resources/scss/payment.scss','public/css')
 .sass('resources/scss/register.scss','public/css')
 .sass('resources/scss/sellbooks.scss','public/css')
 .sass('resources/scss/u-viewbooks.scss','public/css')
 .sass('resources/scss/userlogin.scss','public/css');
 // .postCss('resources/css/app.css', 'public/css', [
 //     //
 // ]);
