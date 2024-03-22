let mix = require('laravel-mix')

mix.sass('theme/assets/css/scss/home-page.scss', 'theme/assets/css/home-page.css').options({
    processCssUrls: false
})
mix.sass('theme/assets/css/scss/single-post.scss', 'theme/assets/css/single-post.css').options({
    processCssUrls: false
})
mix.sass('theme/assets/css/scss/privacy-policy-page.scss', 'theme/assets/css/privacy-policy-page.css').options({
    processCssUrls: false
})


mix.combine([
    'theme/assets/libs/swiper/swiper.min.js',
    'theme/assets/js/parts/burger_btn.js'
], 'theme/assets/js/home-page.js')
