var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    concat = require("gulp-concat"),
    uglify = require("gulp-uglify");

var inputScss = './src/scss/**/*.scss',
    inputJs = './src/js/script.js',
    output = 'assets';

var autoprefixerOptions = {
    browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};

gulp.task('sass', function () {
  return gulp
    .src( inputScss )
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe( autoprefixer( autoprefixerOptions ) )
    .pipe( gulp.dest( output ) );
});

gulp.task('js', function () {
  return gulp
    .src( ['./src/bower/jquery/dist/jquery.min.js', './src/js/script.js'] )
    .pipe( concat('all.js') )
    .pipe( uglify() )
    .pipe( gulp.dest( output ) );
});

gulp.task('concat', function () {
  return gulp

    .pipe( gulp.dest( output ) );
});

gulp.task('watch', function() {
    gulp.watch( inputScss, ['sass'] )
    .on( 'change', function(event) {
      console.log( 'File ' + event.path + ' was ' + event.type + ', running tasks...' );
    });

    gulp.watch( inputJs, ['js'] )
    .on( 'change', function(event) {
      console.log( 'File ' + event.path + ' was ' + event.type + ', running tasks...' );
    });
});
