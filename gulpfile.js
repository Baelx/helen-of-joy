var gulp = require("gulp"),
    watch = require("gulp-watch"),
    postcss = require("gulp-postcss"),
    autoprefixer = require("autoprefixer"),
    cssvars = require("postcss-simple-vars"),
    cssnano = require("gulp-cssnano"),
    uglify = require("gulp-uglify");

gulp.task("styles", function() {
	var plugins = [
		cssvars(),
		autoprefixer(),
		cssnano()
	];
	return gulp.src("assets/css/style.css")
	.pipe(cssnano())
	.pipe(gulp.dest("."));
}); 

gulp.task("watch", function() {

	watch("./assets/css/style.css", function() {
		gulp.start("styles");
	});
});
