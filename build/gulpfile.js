//Charger les dépendances
var gulp = require('gulp');
var less = require('gulp-less');
var csso = require('gulp-csso');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var livereload = require('gulp-livereload');
var sourcemaps = require('gulp-sourcemaps');

//Task styles
gulp.task('styles',function(){
	gulp.src([
		'../src/bootstrap/index.less',
	])
	.pipe(sourcemaps.init())
	.pipe(less())
	.pipe(autoprefixer('last 2 versions',"> 5%", "Explorer 9", "Android 4"))
	.pipe(sourcemaps.write('deploy/maps'))
	.pipe(csso())
	.pipe(concat('index.css'))
	.pipe(gulp.dest('deploy/css/'))
	.pipe(livereload());
});

//Pattern
gulp.task('pattern',function(){
	gulp.src([
		'../lib/dfwp_pattern/pattern.less',
	])
	.pipe(sourcemaps.init())
	.pipe(less())
	.pipe(autoprefixer('last 2 versions',"> 5%", "Explorer 9", "Android 4"))
	.pipe(sourcemaps.write('deploy/maps'))
	.pipe(csso())
	.pipe(concat('pattern.css'))
	.pipe(gulp.dest('deploy/css/'))
	.pipe(livereload());
});

//Maintenance
gulp.task('pattern',function(){
	gulp.src([
		'../src/common/layout/maintenance.less',
	])
	.pipe(sourcemaps.init())
	.pipe(less())
	.pipe(autoprefixer('last 2 versions',"> 5%", "Explorer 9", "Android 4"))
	.pipe(sourcemaps.write('deploy/maps'))
	.pipe(csso())
	.pipe(concat('maintenance.css'))
	.pipe(gulp.dest('deploy/css/'))
	.pipe(livereload());
});

//Task scripts
gulp.task('scripts', function () {
	gulp.src([
		'../lib/dependencies/**/*.js', //Strong dependencies
		'../src/bootstrap/index.js', //Project bootstrap
		'../src/**/*.js' //Project files
		'../src/**/**/*.js'
	])
	.pipe(concat('index.js'))
	.pipe(uglify())
	.pipe(gulp.dest('deploy/js/'))
	.pipe(livereload());
});	

//gulp
gulp.task('default', function() {
	livereload.listen();
	gulp.watch([
		'../src/*.less',
		'../src/**/*.less',
		'../lib/**/*.less',
		],['styles']);
	gulp.watch('js/*.js',['scripts']);
});