var gulp = require('gulp'),
watch = require('gulp-watch'),
browserSync = require('browser-sync');

gulp.task('default', function() {
    console.log('Yess.');
});

gulp.task('html', function() {
    console.log('change made to index.html');
});

gulp.task('styles', function() {
    console.log('change made to custom.css');
});

// Gulp watch below

gulp.task('watch', function() {
    
   browserSync.init({
       server: {
           baseDir: './'
       }
   });
    
   watch('index.html', function() {
      gulp.start('html');
   });
    
   watch('assets/css/custom.css', function() {
      gulp.start('styles');
   });
});