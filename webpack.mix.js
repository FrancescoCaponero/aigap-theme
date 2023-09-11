const mix = require('laravel-mix');

mix.sass('src/app.scss', 'dist/style.css')
   .options({
       processCssUrls: false
   });
