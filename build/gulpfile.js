/**
 * Charger les dépendances
 */
var gulp = require('gulp');
var less = require('gulp-less');
var csso = require('gulp-csso');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var livereload = require('gulp-livereload');
var sourcemaps = require('gulp-sourcemaps');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');

//Config des erreurs
var notifyError = {
	title: "Error",
	message: "<%= error.message %>",
	sound: "Frog" //Seulement sur mac 
}
	
/**
 * CSS du projet
 */
gulp.task('styles',function(){
	gulp.src([
		'../src/bootstrap/index.less',
	])
	.pipe(plumber({
      errorHandler:notify.onError(notifyError)
    }))
	.pipe(sourcemaps.init())
	.pipe(less())
	.pipe(autoprefixer('last 2 versions',"> 5%", "Explorer 9", "Android 4"))
	.pipe(concat('index.css'))
	.pipe(sourcemaps.write('../maps'))
	.pipe(gulp.dest('../dist/css/'))
	.pipe(livereload());
});

/**
 * CSS de la page pattern
 */
gulp.task('pattern',function(){
	gulp.src([
		'../src/common/layout/pattern.less',
	])
	.pipe(plumber({
      errorHandler:notify.onError(notifyError)
    }))
	.pipe(sourcemaps.init())
	.pipe(less())
	.pipe(autoprefixer('last 2 versions',"> 5%", "Explorer 9", "Android 4"))
	.pipe(csso())
	.pipe(concat('pattern.min.css'))
	.pipe(sourcemaps.write('../maps'))
	.pipe(gulp.dest('../dist/css/'))
	.pipe(livereload());
});

/**
 * CSS de la page de maintenance
 */
gulp.task('maintenance',function(){
	gulp.src([
		'../src/common/layout/maintenance.less',
	])
	.pipe(plumber({
      errorHandler:notify.onError(notifyError)
    }))
	.pipe(sourcemaps.init())
	.pipe(less())
	.pipe(autoprefixer('last 2 versions',"> 5%", "Explorer 9", "Android 4"))
	.pipe(csso())
	.pipe(concat('maintenance.min.css'))
	.pipe(sourcemaps.write('../maps'))
	.pipe(gulp.dest('../dist/css/'))
	.pipe(livereload());
});

/**
 * Tâche js en dev
 */
gulp.task('scripts', function () {
	gulp.src([
		'../src/lib/dfwp/*.js', //Strong dependencies
		'../src/lib/**/**/*.js', //Strong dependencies
		'../src/bootstrap/bootstrap.js', //Project bootstrap
		'../src/common/*.js', //Project files
		'../src/common/**/*.js', //Project files
		'../src/components/**/*.js'
	])
	.pipe(plumber({
      errorHandler:notify.onError(notifyError)
    }))
	.pipe(concat('index.js'))
	.pipe(gulp.dest('../dist/js/'))
	.pipe(livereload());
});	

/**
 * Default task en dev 
 */
gulp.task('default',['styles','scripts'], function() {
	livereload.listen();
	gulp.watch([
		'../src/*.less',
		'../src/**/*.less',
		'../src/**/**/*.less',
		'../src/lib/**/*.less',
		],['styles']);
	gulp.watch([
		'../src/*.js',
		'../src/**/*.js',
		'../src/**/**/*.js',
		'../src/lib/**/*.js',
		],['scripts']);
});

/**
 * Tâche pour la prod
 */
gulp.task('prod',function(){

	//Styles prod
	gulp.src([
		'../src/bootstrap/index.less',
	])
	.pipe(plumber({
      errorHandler:notify.onError(notifyError)
    }))
	.pipe(sourcemaps.init())
	.pipe(less())
	.pipe(autoprefixer('last 2 versions',"> 5%", "Explorer 9", "Android 4"))
	.pipe(csso())
	.pipe(concat('index.min.css'))
	.pipe(sourcemaps.write('../maps'))
	.pipe(gulp.dest('../dist/css/'));

	//Js prod
	gulp.src([
		'../src/lib/dfwp/*.js', //Strong dependencies
		'../src/lib/**/**/*.js', //Strong dependencies
		'../src/bootstrap/bootstrap.js', //Project bootstrap
		'../src/common/*.js', //Project files
		'../src/common/**/*.js', //Project files
		'../src/components/**/*.js'
	])
	.pipe(plumber())
	.pipe(concat('index.min.js'))
	.pipe(uglify({
		mangle: true,
		compress: {
        	sequences: true, // join consecutive statemets with the “comma operator”
			dead_code: true, // discard unreachable code
			conditionals: true, // optimize if-s and conditional expressions
			booleans: true, // optimize boolean expressions
			unused: true, // drop unused variables/functions
			if_return: true, // optimize if-s followed by return/continue
			join_vars: true, // join var declarations
			drop_console: true // drop console
        }
	}))
	.pipe(gulp.dest('../dist/js/'));
});