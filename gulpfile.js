var elixir = require('laravel-elixir');
var gulp = require('gulp'),
    php = require('gulp-connect-php'),
    browserSync = require('browser-sync');


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
        .browserify('app.js');
});

// gulp tasks
gulp.task('server-sync', function() {
    php.server({
        base: './public'
    }, function() {
        browserSync({
            proxy: '127.0.0.1:8000'
        });
    });
});

gulp.watch('**/*.php').on('change', function() {
    browserSync.reload();
});