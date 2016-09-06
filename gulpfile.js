// var elixir = require('laravel-elixir');
var gulp = require('gulp'),
    php = require('gulp-connect-php');
var browserSync = require('browser-sync');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var autoprefixer = require('gulp-autoprefixer');
var uglify = require('gulp-uglify');
var browserify = require('gulp-browserify');
var cssMin = require('gulp-minify-css');
var sourcemaps = require('gulp-sourcemaps');
// var bootstrapSass = require('bootstrap-sass');
var changed = require('gulp-changed');
var imagemin = require('gulp-imagemin');
var del = require('del');
var sassdoc = require('sassdoc');
var notify = require('gulp-notify');


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


// gulp tasks

// task for php server
gulp.task('browser-sync', function() {
    php.server({
        base: './public'
    }, function() {
        browserSync({
            proxy: 'localhost:8000'
        });
    });
});
//task for sass compilation
gulp.task('sass', function() {
    var sassSrc = 'resources/assets/sass/*.sass';
    var sassDest = 'public/css/';
    var mapDest = 'public/css/';
    var sassOptions = {    
        outputStyle: 'expanded',
        errLogToConsole: false,
        onError: function(err) {
            return notify.write(err);
        }
    };
    var autoprefixerOptions = {
        browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
    };
    return gulp.src(sassSrc)
                // .pipe(sourcemaps.init())
                .pipe(sass(sassOptions))
                .pipe(autoprefixer(autoprefixerOptions))
                // .pipe(sourcemaps.write(sassDest))
                .pipe(concat('tennissite.min.css'))
                .pipe(cssMin())
                .pipe(gulp.dest(sassDest))
                .pipe(browserSync.reload({stream: true}));
});
//task for sassdoc
gulp.task('sassdoc', function() {
    var sassdocSrc = 'resources/assets/sass/*.sass';
    var sassdocOptions = {
        dest: './public/sassdoc'
    }
    return gulp
                .src(sassdocSrc)
                .pipe(sassdoc(sassdocOptions))
                .resume();
});
//task for js optimisation
gulp.task('js', function() {
    var jsSrc = 'resources/assets/js/*.js';
    var jsDest = 'public/js/';
    return gulp.src(jsSrc)
                .pipe(concat('app.min.js'))
                .pipe(browserify())
                .pipe(uglify())
                .pipe(gulp.dest(jsDest))
                .pipe(browserSync.reload({stream: true}));
});
//task for image optimisation
gulp.task('imagemin', function() {
    var imgSrc = 'resources/assets/img/*.+(jpg|png|gif)',
        imgDest = 'public/img/';

    return gulp.src(imgSrc)
                .pipe(changed(imgDest))
                .pipe(imagemin())
                .pipe(gulp.dest(imgDest));
});
// copy tennis data to public folder
gulp.task('tennisdata', function() {
    var dataSrc = 'resources/assets/**/*';
    var dataDest = 'public/';
    return gulp.src(dataSrc)
                .pipe(gulp.dest(dataDest))
                .pipe(browserSync.reload({stream:true}));

});
//task for build clean-up
gulp.task('clean:public', function() {
    var cssFolder = 'public/css/';
    var jsFolder = 'public/js/';
    var imgFolder = 'public/img/';
    var publicFolderFiles = 'public/*.+(ico|php|txt|config)';

    return del([
            'cssFolder',
            'jsFolder',
            'imgFolder',
            '!public/.htaccess',
            '!public/*.php',
            '!publicFolderFiles'
    ]);
});
// start server and watch files for changes 
gulp.task('watch', [ 'sass', 'browser-sync', 'js', 'imagemin'], function() {
    gulp.watch('resources/assets/sass/*.sass', ['sass']);
    gulp.watch('resources/assets/js/*.js', ['js']);
    gulp.watch('resources/assets/img/*.+(jpg|png|gif)', ['imagemin']);
    gulp.watch('resources/assets/data/*.txt', ['tennisdata']);
    gulp.watch('resources/views/**/*.blade.php').on('change', function() {
        browserSync.reload();
    });
});
