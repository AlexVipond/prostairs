let mix = require('laravel-mix');
let tailwind = require('tailwindcss');
let build = require('./tasks/build.js');
require('laravel-mix-purgecss');


// Custom PurgeCSS extractor for Tailwind that allows special characters in
// class names.
//
// https://github.com/FullHuman/purgecss#extractor
class TailwindExtractor {
  static extract(content) {
    return content.match(/[A-Za-z0-9-_:\/]+/g) || [];
  }
}

// mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({
  plugins: [
    build.jigsaw,
    // build.browserSync(),
    build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.css', '!source/**/_tmp/*']),
  ]
});

mix.js('source/_assets/js/main.js', 'js')
    .postCss('source/_assets/css/main.css', 'css')
    .options({
      processCssUrls: false,
      postCss: [
        tailwind('./tailwind.js')
      ]
    })
    .purgeCss({
      folders: ['source'],
    })
    .version();


// Only run PurgeCSS during production builds for faster development builds
// and so you still have the full set of utilities available during
// development.
// if (mix.inProduction()) {
//   mix.webpackConfig({
//     plugins: [
//       new PurgecssPlugin({
//
//         // Specify the locations of any files you want to scan for class names.
//         paths: glob.sync([
//           path.join(__dirname, "source/*.blade.php"),
//           path.join(__dirname, "source/_assets/js/**.js"),
//           path.join(__dirname, "source/_assets/css/**.css")
//         ]),
//         extractors: [
//           {
//             extractor: TailwindExtractor,
//
//             // Specify the file extensions to include when scanning for
//             // class names.
//             extensions: ["html", "js", "php", "vue"]
//           }
//         ]
//       })
//     ]
//   });
// }
