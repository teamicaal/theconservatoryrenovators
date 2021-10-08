const mix = require('laravel-mix');
require('@tinypixelco/laravel-mix-wp-blocks');
require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Sage application. By default, we are compiling the Sass file
 | for your application, as well as bundling up your JS files.
 |
 */

mix
  .setPublicPath('./public')
  .browserSync('wraith.test');

mix
  .sass('resources/styles/app.scss', 'styles')
  .sass('resources/styles/editor.scss', 'styles')
  .options({
    processCssUrls: false,
    postCss: [require('tailwindcss')],
  })
  .purgeCss({
    enabled: mix.inProduction(),
    folders: ['styles', 'views'],
    extensions: ['html', 'js', 'php', 'vue'],
    safelist: {
      standard: [
        'btn-toolbar',
        'text-grey-light',
        'nav-primary',
        'nav-backdrop',
        /menu$/,
        /^slick-/,
        /^fancybox-/
      ],
    }
  });

mix
  .js('resources/scripts/app.js', 'scripts')
  .js('resources/scripts/customizer.js', 'scripts')
  .blocks('resources/scripts/editor.js', 'scripts')
  .autoload({ jquery: ['$', 'window.jQuery'] })
  .extract()
  .vue({ version: 3 });

mix
  .copyDirectory('resources/images', 'public/images')
  .copyDirectory('resources/fonts', 'public/fonts');

mix
  .sourceMaps()
  .version();

// mix.webpackConfig({
//    stats: {
//        children: true,
//        errors: true,
//        errorDetails: true,
//        warnings: true,
//        chunks: true,
//        modules: false,
//        reasons: true,
//        source: true,
//        publicPath: true,
//    }
//  });
