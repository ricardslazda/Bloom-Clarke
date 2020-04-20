let gulp = require("gulp");
let concat = require('gulp-concat');
let sass = require('gulp-sass');
let watch = require('gulp-watch');

let jsFiles = [
    'node_modules/jquery/dist/jquery.js',
    'node_modules/slick-carousel/slick/slick.js',
    'resources/assets/js/realestate.js',
    'resources/assets/js/carousel.js',
    'resources/assets/js/loader.js',
    'resources/assets/js/home.js',
    'resources/assets/js/init.js',
    'resources/assets/js/navigation.js'
];
let cssFiles = [
    'resources/assets/css/app.css',
];
let sassFiles = [
    'resources/assets/sass/app.scss'
];
gulp.task('scripts', function () {
   let stream = gulp.src(jsFiles)
       .pipe(concat('all.js'))
       .pipe(gulp.dest('public/js'));
   return stream;
});
gulp.task('sass', function () {
    let stream = gulp.src(sassFiles)
        .pipe(sass())
        .on("error", sass.logError)
        .pipe(gulp.dest('resources/assets/css'));
    return stream;
});
gulp.task('stylesheets', function () {
   let stream = gulp.src(cssFiles)
       .pipe(concat('all.css'))
       .pipe(gulp.dest('public/css'));
   return stream;
});
gulp.task('default', gulp.series('scripts', 'sass', 'stylesheets'));