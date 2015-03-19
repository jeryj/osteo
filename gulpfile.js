var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function () {
  // gulp.src locates the source files for the process.
  // This globbing function tells gulp to use all files
  // ending with .scss or .sass within the scss folder.
  gulp.src('stylesheets/*.{scss,sass}')
    // Initializes sourcemaps
    .pipe(sourcemaps.init())
    // Converts Sass into CSS with Gulp Sass
    .pipe(sass({
      errLogToConsole: true
    }))
    // Writes sourcemaps into the CSS file
    .pipe(sourcemaps.write())
    // Outputs CSS files in the css folder
    .pipe(gulp.dest('css'));
})

// Watch scss folder for changes
gulp.task('watch', function() {
  // Watches the scss folder for all .scss and .sass files
  // If any file changes, run the sass task
  gulp.watch('stylesheets/*.{scss,sass}', ['sass'])
})

// Creating a default task
gulp.task('default', ['sass', 'watch']);
