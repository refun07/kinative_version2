"use strict";

var gulp = require('gulp'),
  concat = require('gulp-concat'),
  uglify = require('gulp-uglify'),
  rename = require('gulp-rename'); 
 
gulp.task("concatScripts",function(){
    gulp.src(['libraries/jquery-3.2.1.min.js',
              'libraries/jquery.easing.min.js',
              'libraries/bootstrap/bootstrap.min.js',
              'libraries/jquery-ui.min.js',
              'libraries/magnific/jquery.magnific-popup.js',
              'libraries/wow.min.js',
              'js/myscript.js'])
            .pipe(concat('app.js'))
            .pipe(gulp.dest('js'));
});

gulp.task('minify',function(){
       gulp.src('js/app.js')
       .pipe(uglify())
       .pipe(rename('app.min.js'))
       .pipe(gulp.dest('js'));
});