import { src, dest, watch, series, parallel } from 'gulp';
import yargs from 'yargs';
import sass from 'gulp-sass';
import cleanCss from 'gulp-clean-css';
import gulpif from 'gulp-if';
import postcss from 'gulp-postcss';
import sourcemaps from 'gulp-sourcemaps';
import autoprefixer from 'autoprefixer';
import webpack from 'webpack-stream';
import browserSync from 'browser-sync';
// allows several js files
import named from 'vinyl-named';
import minify from 'gulp-minify';

const PRODUCTION = yargs.argv.prod;

const server = browserSync.create();
export const serve = (done) => {
  server.init({
    notify: false,
    proxy: 'https://herz.test', // put your local website link here
  });
  done();
};
export const reload = (done) => {
  server.reload();
  done();
};

// Compiles styles and generates style.css file

export const styles = () => {
  return src('sass/style.scss')
    .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
    .pipe(sass().on('error', sass.logError))
    .pipe(gulpif(PRODUCTION, postcss([autoprefixer])))
    .pipe(gulpif(PRODUCTION, cleanCss({ compatibility: 'ie8' })))
    .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
    .pipe(dest('./'))
    .pipe(server.stream());
};

export const editorStyle = () => {
  return src('sass/editor-style.scss')
    .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
    .pipe(sass().on('error', sass.logError))
    .pipe(gulpif(PRODUCTION, postcss([autoprefixer])))
    .pipe(gulpif(PRODUCTION, cleanCss({ compatibility: 'ie10' })))
    .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
    .pipe(dest('./'))
    .pipe(server.stream());
};

// export const scripts = () => {
//   return src(['js/dev/main.js'])
//     .pipe(named())
//     .pipe(
//       webpack({
//         module: {
//           rules: [
//             {
//               test: /\.js$/,
//               use: {
//                 loader: 'babel-loader',
//                 options: {
//                   presets: ['@babel/preset-env'],
//                 },
//               },
//             },
//           ],
//         },
//         mode: PRODUCTION ? 'production' : 'development',
//         devtool: !PRODUCTION ? 'inline-source-map' : false,
//         output: {
//           filename: '[name].js',
//         },
//         externals: {
//           //jquery: 'jQuery'
//         },
//       })
//     )
//     .pipe(gulpif(PRODUCTION, minify()))
//     .pipe(dest('js'));
// };

export const watchForChanges = () => {
  watch('sass/**/*.scss', styles);
  watch('sass/**/*.scss', editorStyle);
  // watch('js/dev/**/*.js', series(scripts, reload));
  watch('**/*.php', reload);
};

export const dev = series(
  parallel(
    styles,
    editorStyle
    //scripts
  ),
  serve,
  watchForChanges
);

export const build = series(
  parallel(
    styles,
    editorStyle
    //scripts
  )
);

// Watch
// $ gulp dev

// Production build
// $ gulp build --prod
