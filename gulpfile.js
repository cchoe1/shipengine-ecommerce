let gulp = require('gulp');
let sass = require('gulp-sass');

gulp.task('sass', function(){
  return gulp.src('resources/scss/app.scss')
    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(gulp.dest('resources/css'))
});
gulp.task('watch', function(){
  gulp.watch('resources/scss/**/*.scss', ['sass']);
})
