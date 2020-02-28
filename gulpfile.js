const {src, dest, parallel, series, watch} = require('gulp');
const del = require('del');

const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const csso = require('gulp-csso');

const babel = require('gulp-babel');
const browserify = require('browserify');
const sourcemaps = require('gulp-sourcemaps');
const terser = require('gulp-uglify-es').default;

const browser = require('browser-sync').create();
const reload = browser.reload;

function processCSS() {
  return src('./src/scss/theme.scss')
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(csso())
    .pipe(dest('./'))
    .pipe(browser.stream());
  }

  function processJS() {
    return src('./src/js/**/*.js')
    .pipe(sourcemaps.init())
    .pipe(babel())
    .pipe(terser())
    .pipe(sourcemaps.write())
    .pipe(dest('./js'))
    .pipe(browser.stream());
}

function browserSyncInit() {
  browser.init({
    port: 5500,
    proxy: 'localhost:8080'
  });
  watch('src/scss/**/*.scss', processCSS);
  watch('src/js/**/*.js', processJS);
  watch('**/*.php').on('change', reload);
}

exports.serve = series(processCSS, processJS, browserSyncInit);

exports.build = series(processCSS, processJS);
