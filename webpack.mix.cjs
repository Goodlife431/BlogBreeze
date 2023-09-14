const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .postCss('resources/css/app.css', 'public/css', [
      require('tailwindcss'),

   ])
   .babelConfig({
      plugins: ['@babel/plugin-syntax-dynamic-import'],
   })
   .sourceMaps();
