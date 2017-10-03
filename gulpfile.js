var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var clean_css = require('gulp-clean-css');

gulp.task('default', function() {
    gulp.src( 'src/css/styles.scss')
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(clean_css())
    .pipe(sourcemaps.write('sourcemaps'))
    .pipe(gulp.dest('assets/css'))
    .on('error', exceptionLog);
    console.log('done.');
});

function exceptionLog (error) {
    console.log(error.toString());
    this.emit('end');
}