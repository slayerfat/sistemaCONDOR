var elixir = require('laravel-elixir');

/**
 * gulp bump
 * 
 * suponiendo que verion actual es 1.0.0
 * 
 * para prerelease: gulp bump-pre   | 1.0.0-0
 * para patch:      gulp bump-patch | 1.0.1
 * para minor:      gulp bump-minor | 1.1.0
 * para major:      gulp bump-major | 2.0.0
 */
var gulp = require('gulp');
var bump = require('gulp-bump');

gulp.task('bump-patch', function(){
  gulp.src(['./bower.json', 'package.json'])
  .pipe(bump())
  .pipe(gulp.dest('./'));
});

gulp.task('bump-minor', function(){
  gulp.src(['./bower.json', 'package.json'])
  .pipe(bump({type:'minor'}))
  .pipe(gulp.dest('./'));
});

gulp.task('bump-major', function(){
  gulp.src(['./bower.json', 'package.json'])
  .pipe(bump({type:'major'}))
  .pipe(gulp.dest('./'));
});

gulp.task('bump-pre', function(){
  gulp.src(['./bower.json', 'package.json'])
  .pipe(bump({type:'prerelease'}))
  .pipe(gulp.dest('./'));
});


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
  mix.less('app.less');
});
