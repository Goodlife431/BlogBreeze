const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
      require('tailwindcss'),

   ])
   .babelConfig({
      plugins: ['@babel/plugin-syntax-dynamic-import'],
   })
   .sourceMaps();
