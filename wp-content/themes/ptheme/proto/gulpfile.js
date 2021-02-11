"use strict";

var gulp = require('gulp'),
    pug = require('gulp-pug'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    del = require('del'),
    uglify = require('gulp-uglify'),
    cleanCSS = require('gulp-clean-css'),
    rename = require("gulp-rename"),
    merge = require('merge-stream'),
    htmlreplace = require('gulp-html-replace'),
    autoprefixer = require('gulp-autoprefixer'),
    fs = require('fs'),
    _ = require('lodash'),
    chalk = require('chalk'),
    browserSync = require('browser-sync').create(),
    templateChalkGreen = chalk.bold.green,
    imagemin = require('gulp-imagemin');

// Clean task
gulp.task('clean', function() {
  return del(['dist', 'app/assets/styles/local/app.css',]);
});

// Copy third party libraries from node_modules into /vendor
gulp.task('vendor:js', function() {
  return gulp.src([
    //'./node_modules/bootstrap/dist/js/*',
    './node_modules/jquery/dist/*',
    '!./node_modules/jquery/dist/core.js',
    './node_modules/popper.js/dist/umd/popper.*'
  ])
    .pipe(gulp.dest('./app/assets/js/vendor'));
});

// Copy font-awesome from node_modules into /fonts
gulp.task('vendor:fonts', function() {
  return  gulp.src([
    './node_modules/font-awesome/**/*',
    '!./node_modules/font-awesome/{less,less/*}',
    '!./node_modules/font-awesome/{scss,scss/*}',
    '!./node_modules/font-awesome/.*',
    '!./node_modules/font-awesome/*.{txt,json,md}'
  ])
    .pipe(gulp.dest('./app/assets/fonts/font-awesome'))
});

// vendor task
gulp.task('vendor', gulp.parallel('vendor:fonts', 'vendor:js'));

// Copy vendor's js to /dist
gulp.task('vendor:build', function() {
  var jsStream = gulp.src([
    /*'./app/assets/js/vendor/bootstrap.bundle.min.js',*/
    './app/assets/js/vendor/jquery.slim.min.js',
    './app/assets/js/vendor/popper.min.js'
  ])
    .pipe(gulp.dest('./app/assets/js/vendor'));
  var fontStream = gulp.src(['./app/assets/fonts/font-awesome/**/*.*']).pipe(gulp.dest('./app/assets/fonts/font-awesome'));
  return merge (jsStream, fontStream);
})

// Copy Bootstrap SCSS(SASS) from node_modules to /assets/scss/bootstrap
//gulp.task('bootstrap:scss', function() {
//  return gulp.src(['./node_modules/bootstrap/scss/**/*'])
//    .pipe(gulp.dest('./libs/scss/local/framework/bootstrap'));
//});

// Compile SCSS(SASS) files

gulp.task('scss', gulp.series(function compileScss() {
  return gulp.src(['./libs/scss/local/**/*.scss'])
    .pipe(sourcemaps.init())
    .pipe(sass.sync({
      outputStyle: 'expanded'
    }).on('error', sass.logError))
    .pipe(autoprefixer())
    // .pipe(sourcemaps.write())
    .pipe(gulp.dest('./app/assets/styles'))
}));

// Minify CSS
gulp.task('css:minify', gulp.series('scss', function cssMinify() {
  return gulp.src("./app/assets/styles/*.css")
    .pipe(cleanCSS())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('./app/assets/styles/min'))
    .pipe(browserSync.stream());
}));


gulp.task('images', function() {
  return gulp.src("./views/media/**/*")
  .pipe(imagemin())
  .pipe(gulp.dest('app/assets/media'))
});

// Minify Js
gulp.task('js:minify', function () {
  return gulp.src([
    './app/assets/js/*.js'
  ])

  .pipe(sourcemaps.init())
    .pipe(uglify())
    .pipe(rename({
      suffix: '.min'
    }))

    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./app/assets/js/min'))
    .pipe(browserSync.stream());
});



 // Compile pug files
gulp.task('views', function buildHTML() {
  return gulp.src('./views/*.pug')
  .pipe(pug({
            pretty: true
  }))
  .pipe(gulp.dest('./app/'))
});


// Configure the browserSync task and watch file path for change
gulp.task('dev', function browserDev(done) {
  browserSync.init({
    server: {
      baseDir: "./app"
    }
  });
  gulp.watch('./views/media/**/*', gulp.series('images', function pugBrowserReload (done) {
    done(); //Async callback for completion.
  }));
  gulp.watch('./views/**/*.pug', gulp.series('views', function pugBrowserReload (done) {
    done(); //Async callback for completion.
  }));
  gulp.watch(['./libs/scss/local/**/*.scss'], gulp.series('css:minify', function cssBrowserReload (done) {
    browserSync.reload();
    done(); //Async callback for completion.
  }));
  gulp.watch('app/assets/js/app.js', gulp.series('js:minify', function jsBrowserReload (done) {
    browserSync.reload();
    done();
  }));
  gulp.watch(['app/*.html']).on('change', browserSync.reload);
  done();
});

// Build task
gulp.task("build", gulp.series(gulp.parallel('css:minify', 'js:minify', 'vendor',"views"), 'vendor:build', function copyAssets() {
  return gulp.src([
    'favicon.ico',
    "app/assets/img/**"
  ], { base: './'})
    .pipe(gulp.dest('app'));
}));


// read folder content -> add markup to index.html
gulp.task('file:list', async function () {
  console.log(templateChalkGreen('/----------------------------------------------/'));
  console.log(templateChalkGreen('               Generate index.html              '));
  console.log(templateChalkGreen('/----------------------------------------------/'));

  var files = fs.readdirSync('app');
  var filesFiltered = _.without(files, 'assets', 'index.html', '.DS_store');

  var templateFile = '<html>';

  templateFile += '<head>';
  templateFile += '<meta name="viewport" content="width=device-width, initial-scale=1">';
  templateFile += '</head>';

  templateFile += '<body>';
  templateFile += '<ul>';
  _.forEach(filesFiltered, function (value) {
    templateFile += '<li><a href="' + value + '">' + value + '</a></li>';
  });
  templateFile += '</ul>';
  templateFile += '</body>';

  templateFile += '</html>';

  var markupHtml = fs.openSync('./' + 'app' + '/index.html', 'a+');
  fs.write(markupHtml, templateFile, 0, templateFile.length, function (err) {
    if (err) throw err;
  });

  fs.close(markupHtml, function (err) {
    if (err) throw err;
  });
});


// Default task
// gulp.task("default", gulp.series("clean", 'build', 'replaceHtmlBlock'));
gulp.task("default", gulp.series("clean", 'build'));