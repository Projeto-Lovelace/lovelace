var gulp = require("gulp");
var sass = require("gulp-sass");
var browserSync = require("browser-sync").create();
var useref = require("gulp-useref");
var gulpIf = require('gulp-if');
var uglify = require('gulp-uglify-es').default;
var cssnano = require('gulp-cssnano');
var htmlmin = require('gulp-htmlmin');
var rename = require('gulp-rename');
var imagemin = require('gulp-imagemin');
var del = require('del');
var runSequence = require('run-sequence');
var wait = require('gulp-wait');


gulp.task("sass", function() {
  return gulp
    .src("src/css/sass/themes/*.scss")
    .pipe(wait(700))
    .pipe(sass())
    .pipe(gulp.dest("src/css"))
    .pipe(cssnano({zindex: false}))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest("src/css"))
    .pipe(gulp.dest("dist/css"));
});

gulp.task("browserSync", function() {
  browserSync.init({
    server: {
      baseDir: "src"
    },
    startPath: "Dashboard.Default.html"
  });
});

gulp.task("watch", ["browserSync", "sass"], function() {
  gulp.watch("src/css/sass/**/*.scss", ["sass", browserSync.reload]);
  gulp.watch("src/js/**/*.js", browserSync.reload);
  gulp.watch("src/*.html", browserSync.reload);
});

gulp.task("minifyjs", function() {
  return gulp.src('src/js/**/*')
  .pipe(gulpIf('*.js', uglify()))
  .pipe(gulp.dest('dist/js'))
});

gulp.task("minifycss", function() {
  return gulp.src('src/css/**/*')
  .pipe(gulpIf('*.css', cssnano({zindex: false})))
  .pipe(gulp.dest('dist/css'))
});

gulp.task("minifyhtml", function() {
  return gulp.src('src/*.html')
  .pipe(htmlmin())
  .pipe(gulp.dest('dist'))
});

gulp.task('images', function(){
  return gulp.src('src/img/**/*.+(png|jpg|gif|svg)')
  .pipe(gulp.dest('dist/img'))
});

gulp.task('font', function() {
  return gulp.src('src/font/**/*')
  .pipe(gulp.dest('dist/font'))
});

gulp.task('clean:dist', function() {
  return del.sync('dist');
})

gulp.task('default', function (callback) {
  runSequence(['sass','browserSync', 'watch'],
    callback
  )
})

gulp.task('build', function (callback) {
  runSequence('clean:dist', 'sass',
    ["minifyjs", "minifycss", "minifyhtml", "images", 'font'],
    callback
  )
})