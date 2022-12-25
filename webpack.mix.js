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

mix.js('resources/js/app.js', 'public/js')
  // .js('resources/js/product.js', 'public/js')
  .postCss('resources/css/app.css', 'public/css', [])
  .postCss('resources/css/carddisplay.css', 'public/css', [])
  .postCss('resources/css/login.css', 'public/css', []);

mix.scripts(['resources/js/product.js'], 'public/js/product.js').version();
mix.scripts(['resources/js/women.js'], 'public/js/women.js').version()
  .scripts(['resources/js/men.js'], 'public/js/men.js').version()
  .scripts(['resources/js/kid.js'], 'public/js/kid.js').version();
