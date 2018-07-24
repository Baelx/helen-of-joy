var gulp = require("gulp"),
    watch = require("gulp-watch"),
    pump = require("pump"),
    postcss = require("gulp-postcss"),
    autoprefixer = require("autoprefixer"),
    cssvars = require("postcss-simple-vars"),
    cssnano = require("gulp-cssnano"),
    uglify = require("gulp-uglify"),
    imagemin = require("gulp-imagemin");

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

gulp.task("compress", function(cb) {
	pump([
		gulp.src("assets/js/homepage/*.js"),
		uglify(),
		gulp.dest("assets/js")
	],
	cb
	);
});

gulp.task("img", function() {
	gulp.src("assets/img/src/*.{png,jpeg,jpg}")
		.pipe(imagemin({
			optimizationLevel: 7,
			progressive: true,
		}))
		.pipe(gulp.dest("assets/img"))
});

gulp.task("watch", function() {

	watch("./assets/css/style.css", function() {
		gulp.start("styles");
	});
	watch("./assets/js/homepage/*.js", function() {
		gulp.start("compress");
	});
	watch("assets/img/src/*{png,jpeg,jpg}", function() {
		gulpe.start("img");
	});
});
