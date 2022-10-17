const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .js('source/_assets/js/', 'js')
    .sass('source/_assets/sass/main.scss', 'css')
    .sass('source/_assets/sass/style.scss', 'css')
    .css('source/_assets/css/style.css', 'css')
    .options({
        processCssUrls: false,
    })
    .version();
