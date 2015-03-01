var elixir      = require('laravel-elixir');
    gulp        = require('gulp'),
    git         = require('gulp-git'),
    bump        = require('gulp-bump'),
    filter      = require('gulp-filter'),
    tag_version = require('gulp-tag-version');

/**
 * Bumping version number and tagging the repository with it.
 * Please read http://semver.org/
 *
 * You can use the commands
 *
 *     gulp patch     # makes v0.1.0 → v0.1.1
 *     gulp feature   # makes v0.1.1 → v0.2.0
 *     gulp release   # makes v0.2.1 → v1.0.0
 *
 * To bump the version numbers accordingly after you did a patch,
 * introduced a feature or made a backwards-incompatible release.
 */
 
function inc(importance) {
  // get all the files to bump version in 
  return gulp.src(['./package.json', './bower.json'])
    // bump the version number in those files 
    .pipe(bump({type: importance}))
    // save it back to filesystem 
    .pipe(gulp.dest('./'))
    // commit the changed version number 
    .pipe(git.commit('bumps package version'))

    // read only one file to get the version number 
    .pipe(filter('package.json'))
    // **tag it in the repository** 
    .pipe(tag_version());
}
 
gulp.task('patch',   function() { return inc('patch'); })
gulp.task('feature', function() { return inc('minor'); })
gulp.task('release', function() { return inc('major'); })


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
  mix.sass('app.scss');
  // javascripts
  mix.copy('vendor/bower_components/jquery/dist/jquery.min.js', 'public/vendor/js/jquery/jquery.min.js')
     .copy('vendor/bower_components/jquery/dist/jquery.min.map', 'public/vendor/js/jquery/jquery.min.map')
     .copy('vendor/bower_components/bootstrap/dist/js/bootstrap.min.js', 'public/vendor/js/bootstrap/bootstrap.min.js')
     .copy('vendor/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.js', 'public/vendor/js/bootstrap-datepicker/bootstrap-datepicker.js')
     .copy('vendor/bower_components/bootstrap-datepicker/js/locales/bootstrap-datepicker.es.js', 'public/vendor/js/bootstrap-datepicker/bootstrap-datepicker.es.js')
     .copy('vendor/bower_components/bootstrap-datepicker/css/datepicker.css', 'public/vendor/css/bootstrap-datepicker/datepicker.css')
     .copy('vendor/bower_components/bootstrap-table/src/bootstrap-table.css', 'public/vendor/css/bootstrap-table/bootstrap-table.css')
     .copy('vendor/bower_components/bootstrap-table/src/bootstrap-table.js', 'public/vendor/js/bootstrap-table/bootstrap-table.js')
     .copy('vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-es-CR.js', 'public/vendor/js/bootstrap-table/bootstrap-table-es-CR.js');
});
