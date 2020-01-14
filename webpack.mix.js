const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.combine([
   'public/users/js/vendors/jquery-3.2.1.min.js',
   'public/users/plugins/bootstrap-4.3.1-dist/js/popper.min.js',
   'public/users/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js',
   'public/users/js/vendors/jquery.sparkline.min.js',
   'public/users/js/vendors/circle-progress.min.js',
   'public/users/plugins/rating/jquery.rating-stars.js',
   'public/users/plugins/owl-carousel/owl.carousel.js',
   'public/users/plugins/horizontal-menu/horizontal.js',
   'public/users/js/jquery.touchSwipe.min.js',
   'public/users/plugins/select2/select2.full.min.js',
   'public/users/js/select2.js',
   'public/users/plugins/cookie/cookie.js',
   'public/users/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js',
   'public/users/plugins/pscrollbar/perfect-scrollbar.js',
   'public/users/plugins/pscrollbar/pscroll.js',
   'public/users/switcher/js/switcher.js',
   'public/users//js/sticky.js',
   'public/users/js/swipe.js',
   'public/users/js/owl-carousel.js',
   'public/users/js/custom.js',
], 'public/users/js/base.min.js')
.styles([
   'public/users/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css',
   'public/users/css/style.css',
   'public/users/plugins/horizontal-menu/horizontal.css',
   'public/users/plugins/select2/select2.min.css',
   'public/users/plugins/cookie/cookie.css',
   'public/users/plugins/scroll-bar/jquery.mCustomScrollbar.css',
   'public/users/plugins/pscrollbar/perfect-scrollbar.css',
   'public/users/switcher/css/switcher.css',
   'public/users/skins/color-skins/color15.css',
   'public/users/skins/demo.css',
], 'public/users/css/base.min.css');