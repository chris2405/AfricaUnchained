var gulp = require('gulp');
var csso = require('gulp-csso');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var sourcemaps = require('gulp-sourcemaps');
var watch = require('gulp-watch');
var autoprefixer = require('gulp-autoprefixer');
var sass = require('gulp-sass');

var src = 'web/';
var dist = 'web/dist';

gulp.task('sass', function () {
    return gulp.src(src + 'css/styles.scss')
        .pipe(autoprefixer({
            browsers :['last 3 versions'],
            cascade : false
        }))
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(dist));
});

gulp.task('css', function(){
    return gulp.src(src + 'css/**/*.css')
        .pipe(autoprefixer({
            browsers :['last 3 versions'],
            cascade : false
        }))
        .pipe(concat('styles.css'))
        .pipe(csso({
            restructure: false,
            sourceMap: true,
            debug: true
        }))
        .pipe(gulp.dest(dist))
});

gulp.task('minify', function () {
    return gulp.src(dist)
        .pipe(concat('styles.css'))
        .pipe(csso())
        .pipe(gulp.dest(dist))
});

gulp.task('js', function () {
    return gulp.src([
        'web/js/jquery/jquery-3.2.1.js',
        'web/js/tether/tether.min.js',
        'web/js/bootstrap/bootstrap.min.js',
        'web/js/main.js'
    ])
        .pipe(concat('script.js'))
        .pipe(uglify())
        .pipe(gulp.dest(dist))
});

gulp.task('stream', function () {
    return watch('css/**/*.css', { ignoreInitial: false })
        .pipe(gulp.dest('build'));
});

gulp.task('dev', ['sass', 'js']);
gulp.task('prod', ['dev', 'minify']);

gulp.task('watch', function () {
     gulp.watch(src + 'css/styles.scss', ['sass']);
     gulp.watch([
         'web/js/jquery/jquery-3.2.1.js',
         'web/js/tether/tether.min.js',
         'web/js/bootstrap/bootstrap.min.js',
         'web/js/main.js'
     ], ['js']);
});

gulp.task('default', ['dev']);
