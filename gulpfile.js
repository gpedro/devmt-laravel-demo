const elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir(mix => {

    mix
        .sass('vendor.scss')
        .sass('app.scss')
        .copy(['bower_components/bootstrap-sass/assets/fonts/'], 'public/fonts')
        .rollup('app.js')

});
