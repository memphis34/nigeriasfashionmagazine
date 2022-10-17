const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')

    .sass('source/_assets/sass/main.scss', 'css')
    .sass('source/_assets/sass/style.scss', 'css')
    .css('source/_assets/css/style.css', 'css')
    .css('source/_assets/scripts/bootstrap/bootstrap.min.css', 'css')
    .css('source/_assets/scripts/magnific-popup/dist/magnific-popup.css', 'css')
    .css('source/_assets/scripts/owlcarousel/dist/assets/owl.carousel.min.css', 'css')
    .css('source/_assets/scripts/sweetalert/dist/sweetalert.css', 'css')
    .css('source/_assets/scripts/owlcarousel/dist/assets/owl.theme.default.min.css', 'css')
    .css('source/_assets/css/demo.css', 'css')
    .css('source/_assets/css/skins/all.css', 'css')
    .css('source/_assets/scripts/toast/jquery.toast.min.css', 'css')
    .css('source/_assets/scripts/ionicons/css/ionicons.min.css', 'css')
    .options({
        processCssUrls: false,
    })
    .version();
