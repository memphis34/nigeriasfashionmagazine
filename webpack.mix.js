const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .js('source/_assets/js/jquery.js', 'js')
    .js('source/_assets/js/jquery.migrate.js', 'js')
     
    
    .css('source/_assets/css/style.css', 'css')
    .css('source/_assets/scripts/bootstrap/bootstrap.min.css', 'scripts/bootstrap')
    .css('source/_assets/scripts/magnific-popup/dist/magnific-popup.css', 'scripts/magnific-popup/dist')
    .css('source/_assets/scripts/owlcarousel/dist/assets/owl.carousel.min.css', 'scripts/owlcarousel/dist/assets')
    .css('source/_assets/scripts/sweetalert/dist/sweetalert.css', 'scripts/sweetalert/dist')
    .css('source/_assets/scripts/owlcarousel/dist/assets/owl.theme.default.min.css', 'scripts/owlcarousel/dist/assets')
    .css('source/_assets/css/demo.css', 'css')
    .css('source/_assets/css/skins/all.css', 'css/skins')
    .css('source/_assets/scripts/toast/jquery.toast.min.css', 'scripts/toast')
    .css('source/_assets/scripts/ionicons/css/ionicons.min.css', 'scripts/ionicons/css')
    .options({
        processCssUrls: false,
    })
    .version();
