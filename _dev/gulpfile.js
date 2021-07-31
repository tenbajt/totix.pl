const { src, dest, parallel, series, watch } = require('gulp');

function buildStyles() {
  const sass = require('gulp-sass');
  const postcss = require('gulp-postcss');

  return src('sass/tenbajt.scss')
    .pipe(sass())
    .pipe(postcss([
      require('autoprefixer'),
      require('cssnano'),
    ]))
    .pipe(dest('../css'));
}
exports.buildStyles = buildStyles;

function concat() {
  const concat = require('gulp-concat');

  return src('js/**/*.js')
    .pipe(concat('tenbajt.js'))
    .pipe(dest('../js'));
}
exports.concat = concat;

function uglify() {
  const uglify = require('gulp-uglify');

  return src('../js/tenbajt.js')
    .pipe(uglify())
    .pipe(dest('../js/tenbajt.js'));
}
exports.uglify = uglify;

exports.buildScripts = series(concat, uglify);

exports.watch = () => {
  watch('sass/**/*.scss', this.buildStyles);
  watch('js/**/*.js', this.buildScripts);
}