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
    .sass('resources/sass/app.scss', 'public/css')
    .postCss('resources/css/layout.css', 'public/css')
    .postCss('resources/css/style.css', 'public/css')
    .postCss('resources/css/carddisplay.css', 'public/css')
    .postCss('resources/css/login.css', 'public/css')
    .postCss('resources/css/signup.css', 'public/css')
    .postCss('resources/css/profile.css', 'public/css')
    .postCss('resources/css/adminsidebar.css', 'public/css')
    .postCss('resources/css/cart.css', 'public/css')
    .sourceMaps();

mix.scripts(['resources/js/main.js'], 'public/js/main.js').version();
mix.scripts(['resources/js/product.js'], 'public/js/product.js').version();
mix.scripts(['resources/js/women.js'], 'public/js/women.js').version();
mix.scripts(['resources/js/men.js'], 'public/js/men.js').version();
mix.scripts(['resources/js/kid.js'], 'public/js/kid.js').version();
mix.scripts(['resources/js/list.js'], 'public/js/list.js').version();
mix.scripts(['resources/js/cart.js'], 'public/js/cart.js').version();

// mix.webpackConfig({
//     stats: {
//         children: true,
//     },
// });
