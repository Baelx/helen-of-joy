var gulp = require('gulp'),
watch = require('gulp-watch'),
browserSync = require('browser-sync').create();

gulp.task('default', function() {

});

gulp.task('watch', function() {

  browserSync.init({
      proxy:"localhost"
  });

  watch('*.php', function() {});
  watch('*.css', function() {});
  watch('**/*.css', function() {});
  watch('**/*.php,', function() {});

});
