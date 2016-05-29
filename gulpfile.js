var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass([
            'variables',
            'app.sass',
            'cards.sass',
            'helpers.sass',
            'layout.sass',
            'theme.sass'
        ], 'public/css/tennissite.css')
        .browserify('app.js')
        .browserSync({
            proxy: 'tennissite.local'
        });

});