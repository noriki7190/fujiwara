const gulp = require('gulp');//gulp本体

//scss
const sass = require('gulp-dart-sass');//Dart Sass
const plumber = require("gulp-plumber"); // エラーが発生しても強制終了させない
const notify = require("gulp-notify"); // エラー発生時のアラート出力
const browserSync = require("browser-sync"); //ブラウザリロード
const sassGlob = require('gulp-sass-glob-use-forward')
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const cssSorter =require("css-declaration-sorter"); // css並び替え
const mmq = require("gulp-merge-media-queries"); // メディアクエリーをまとめる
// css js ファイルの圧縮
const cleanCss = require("gulp-clean-css");
const uglify = require("gulp-uglify");
const rename = require("gulp-rename");

// サイトネーム
const siteName = 'fujiwara'


// 入出力するフォルダを指定
const srcBase = './src';
const assetsBase = '../assets';
const distBase = '../' + siteName;


const srcPath = {
  'sass': srcBase + '/assets/sass/**/*.scss',
  'css': srcBase + '/assets/css/*.css',
  'js': srcBase + '/assets/js/**/*.js',
  // 'js': './src/assets/js/**/*.js',
  'html': srcBase + '/**/*.html',
  'img': srcBase + '/assets/img/**/*'
};

const distPath = {
  'css': distBase + '/assets/css/',
  'js': distBase + '/assets/js/',
  'html': distBase + '/',
  'img': distBase + '/assets/img/'
};

/**
 * sass
 *
 */
const compileSass = () => {
  return gulp.src(srcPath.sass, {
    sourcemaps: true
  })
    .pipe(
      //エラーが出ても処理を止めない
      plumber({
        // errorHandler: notify.onError('Error:<%= error.message %>')
      }))
    .pipe(sassGlob())
    .pipe(sass({
      includePaths: ['src/sass'],
      outputStyle: 'expanded'
    })) //指定できるキー expanded compressed
    .pipe(postcss([autoprefixer(), cssSorter()]))
    .pipe(mmq())
    // .pipe(gulp.dest(distPath.css, { sourcemaps: './' })) //コンパイル先
    .pipe(gulp.dest(distPath.css))
    .pipe(cleanCss())
    .pipe(rename({
      suffix: ".min"
    }))
    .pipe(gulp.dest(distPath.css))
    .pipe(browserSync.stream())
    // .pipe(notify({
    //   message: 'Sassをコンパイルしました！',
    //   onLast: true
    // }))
}


/**
 * html
 */
const html = () => {
  return gulp.src(srcPath.html)
    .pipe(gulp.dest(distPath.html))
}

/**
 * ローカルサーバー立ち上げ
 */
const browserSyncFunc = () => {
  browserSync.init(browserSyncOption);
    // browserSync.init({
  //   // proxy: "http://" + siteName  +".local/"
  // });
}

const browserSyncOption = {
  server: distBase
}

/**
 * リロード
 */
const browserSyncReload = (done) => {
  browserSync.reload();
  done();
}

/**
 *
 * ファイル監視 ファイルの変更を検知したら、browserSyncReloadでreloadメソッドを呼び出す
 * series 順番に実行
 * watch('監視するファイル',処理)
 */
const watchFiles = () => {
  gulp.watch(srcPath.sass, gulp.series(compileSass, browserSyncReload));
  gulp.watch(srcPath.js, gulp.series(minJS, browserSyncReload));
  gulp.watch(srcPath.css, gulp.series(copyCss, browserSyncReload));
  gulp.watch(srcPath.html, gulp.series(html, browserSyncReload));
  gulp.watch(srcPath.img, gulp.series(copyImg, browserSyncReload));
}

const minJS = () => {
  return gulp.src(srcPath.js)
    .pipe(gulp.dest(distPath.js))
    .pipe(uglify())
    .pipe(rename({
      suffix: ".min"
    }))
    .pipe(gulp.dest(distPath.js))
}

const copyImg = () => {
  return gulp.src(srcPath.img)
    .pipe(gulp.dest(distPath.img))
}

/**
 * css
 */
const copyCss = () => {
  return gulp.src(srcPath.css)
    .pipe(gulp.dest(distPath.css))
  // console.log("css");
  // done();
}

// テスト用
const test = (done) => {
  console.log("Hello Gulp");
  done();
}

/**
 * seriesは「順番」に実行
 * parallelは並列で実行
 */
exports.default = gulp.series(
  gulp.parallel(html, copyCss, compileSass, minJS, copyImg),
  gulp.parallel(watchFiles, browserSyncFunc)
);

exports.test = test;
exports.compileSass = compileSass;
exports.minJS = minJS;
exports.copyImg = copyImg;
exports.copyCss = copyCss;

exports.build = gulp.parallel(minJS, compileSass, copyImg);