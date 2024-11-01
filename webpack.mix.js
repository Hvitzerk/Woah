const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .css('public/css/format.css', 'public/css'); // Sesuaikan path dengan lokasi yang benar

