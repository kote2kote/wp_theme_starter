const { src, dest, watch, series, parallel, lastRun } = require('gulp');
const loadPlugins = require('gulp-load-plugins');
const $ = loadPlugins();
const pkg = require('./package.json');
const del = require('del');
const conf = pkg['gulp-config'];
const sizes = conf.sizes;
const autoprefixer = require('autoprefixer');
const tailwindcss = require('tailwindcss');
const purgecss = require('gulp-purgecss');
const cssnano = require('cssnano');
const browserSync = require('browser-sync');
const phpServer = require('gulp-connect-php');
const server = browserSync.create();
const isProd = process.env.NODE_ENV === 'production';

function icon(done) {
  for (let size of sizes) {
    let width = size[0];
    let height = size[1];
    src('./assets/icons/favicon.png')
      .pipe(
        $.imageResize({
          width,
          height,
          crop: true,
          upscale: false,
        })
      )
      .pipe($.rename(`favicon-${width}x${height}.png`))
      .pipe(dest('./assets/dist/icons'));
  }
  done();
}
// function favicon() {
//   return src("./assets/favicon.ico").pipe(dest("./"));
// }
// function html() {
//   return src("./src/**/*.html").pipe(dest("./dist"));
// }

// function php() {
//   // return src('./**/*.php').pipe(dest('./'));
//   return (
//     src('./assets/src/scss/style.scss')
//       .pipe($.sourcemaps.init())
//       .pipe($.sass())
//       .pipe($.postcss([
//           tailwindcss('./tailwind.config.js'),
//           autoprefixer()
//         ])
//       )
//       .pipe($.if(isProd, $.postcss([
//             purgecss({
// 	                content: ['./**/*.php'],
// 	                defaultExtractor: content =>
// 	                  content.match(/[\w-/:]+(?<!:)/g) || []
// 	              }),
//             cssnano({ safe: true, autoprefixer: false })
//           ])
//         )
//       )
//       // .pipe($.postcss([require('tailwindcss'), require('autoprefixer')]))
//       // .pipe($.postcss([tailwindcss('./tailwind.config.js')]))
//       // .pipe($.postcss([autoprefixer()]))
//       // .pipe($.postcss([cssnano({ safe: true, autoprefixer: false })]))

//       // .pipe(
// 	    //   postcss([

// 	    //     tailwindcss(TAILWIND_CONFIG),
// 	    //     ...(process.env.NODE_ENV === "production"
// 	    //       ? [
// 	    //           purgecss({
// 	    //             content: ["**/*.html"],
// 	    //             defaultExtractor: content =>
// 	    //               content.match(/[\w-/:]+(?<!:)/g) || []
// 	    //           })
// 	    //         ]
// 	    //       : [])
// 	    //   ])
// 	    // )
//       .pipe($.sourcemaps.write('./'))
//       .pipe(dest('./'))
//   );
// }

// class TailwindExtractor {
// 	  static extract(content) {
// 	    return content.match(/[A-z0-9-:\/]+/g);
// 	  }
// 	}

function styles() {
  return src('./assets/src/scss/style.scss')
    .pipe($.if(!isProd, $.sourcemaps.init()))
    .pipe($.sass())
    .pipe($.postcss([tailwindcss('./tailwind.config.js'), autoprefixer()]))
    .pipe(
      $.if(
        isProd,
        $.purgecss({
          content: ['./**/*.php'],
          defaultExtractor: (content) => content.match(/[\w-/:]+(?<!:)/g) || [],
        })
        // $.purgecss({
        //       content: ['./**/*.php'],
        //       extractors: [
        //         {
        //           extractor: TailwindExtractor,
        //           extensions: ["php"]
        //         }
        //       ]
        // })
        // [
        //   purgecss({
        //     content: ["./**/*.php"],
        //     // defaultExtractor: content =>
        //     //   content.match(/[\w-/:]+(?<!:)/g) || []
        //   })
        // ]
      )
    )
    .pipe($.if(isProd, $.postcss([cssnano({ safe: true, autoprefixer: false })])))
    .pipe($.if(!isProd, $.sourcemaps.write('.')))
    .pipe(dest('./'));
  // return src('./assets/src/scss/style.scss')
  //   .pipe($.sourcemaps.init())
  //   .pipe($.sass())
  //   .pipe($.postcss([tailwindcss('./tailwind.config.js')]))
  //   .pipe($.postcss([autoprefixer()]))
  //   .pipe($.postcss([cssnano({ safe: true, autoprefixer: false })]))
  //   .pipe($.sourcemaps.write('./'))
  //   .pipe(dest('./'));
}
function php() {
  // return src('./src/**/*.php').pipe(dest('./dist'));
  return;
}
function scripts() {
  return (
    src('./assets/src/js/*.js')
      // .pipe($.sourcemaps.init())
      .pipe($.babel())
      // .pipe($.sourcemaps.write('./assets/dist/js'))
      .pipe($.uglify())
      .pipe(dest('./assets/dist/js'))
  );
}

function lint() {
  return src('./assets/src/js/*.js')
    .pipe($.eslint({ fix: true }))
    .pipe($.eslint.format())
    .pipe($.eslint.failAfterError())
    .pipe(dest('./assets/dist/js'));
}

function optimizeImages() {
  return src('./assets/src/images/**', { since: lastRun(optimizeImages) })
    .pipe($.imagemin())
    .pipe(dest('./assets/dist/images'));
}

// function clean() {
//   return del(["./assets"]);
// }

function reload() {
  browserSync.reload();
}

function startAppServer() {
  // server.init({
  //       server: {

  //           baseDir: "./",
  //           proxy: "127.0.0.1:5011",
  //           port: 5011,

  //         // proxy: "10.0.0.8:5011",
  //         // baseDir: './',
  //         // ui: {
  //         //   port: 5011,
  //         // }
  //       },
  //       function () {
  //         browserSync({
  //           baseDir: "./",
  //           proxy: "127.0.0.1:5011",
  //           port: 5011,
  //         });
  //       }
  //   });
  phpServer.server(
    {
      base: 'http://localhost:10028/',
      port: 5010, // なぜか5011になる
      open: false,
      bin: '/Applications/MAMP/bin/php/php7.2.8/bin/php',
      ini: '/Applications/MAMP/bin/php/php7.2.8/conf/php.ini',
    },
    function () {
      browserSync({
        baseDir: 'http://localhost:10028/',
        proxy: '127.0.0.1:5010',
        port: 5010,
      });
    }
  );

  // watch("./**/*.html", html);
  watch('./**/*.php', php);
  watch('./assets/src/scss/**/*.scss', styles);
  watch('./assets/src/js/**/*.js', scripts);
  watch('./assets/src/images/**', optimizeImages);
  watch([
    // "./**/*.html",
    './**/*.php',
    './assets/src/scss/**/*.scss',
    './assets/src/js/**/*.js',
    './assets/src/images/**',
    //  ]).on('change', server.reload);
  ]).on('change', reload);
}

const build = series(
  // clean,
  // parallel(optimizeImages, favicon, html, php, styles, series(lint, scripts))
  parallel(optimizeImages, styles, series(lint, scripts))
);
const serve = series(build, startAppServer);

exports.icon = icon;
// exports.html = html;
// exports.php = php;
exports.styles = styles;
exports.scripts = scripts;
exports.build = build;
exports.lint = lint;
exports.serve = serve;
exports.default = serve;
