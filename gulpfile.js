var elixir = require('laravel-elixir');
var gulp = require('gulp');
var bs = require('browser-sync');
var reload = bs.reload;

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss', 'resources/css/');

    mix.styles([
        'app.css',
        'libs/select2.min.css'
    ], 'public/css/style.css', 'resources/css/');

    mix.version('public/css/style.css');

    mix.scripts([
        'jquery.min.js',
        'bootstrap.min.js',
        'select2.min.js'
    ], 'public/js/main.js', 'resources/js/libs/');
});

// gulp.task('browser-sync', function() {
//     bs({
//         proxy: handmadehatchling.dev,
//         port: port,
//         files: arrAddFiles,
//         ghostMode: {
//             clicks: true,
//             location: true,
//             forms: true,
//             scroll: true
//         },
//         notify: false,
//         open: false
//     });
// });
