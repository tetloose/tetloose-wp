import notification from './tasks/notification'
const isDev = process.env.ENV === 'dev'

module.exports = {
    webpack: {
        mode: isDev,
        entry: './src/js/app.ts'
    },
    serve: {
        proxy: 'tetloose-wp.test'
    },
    scripts: {
        files: 'src/**/*.{ts,js}',
        modules: 'src/js/**/*.scss',
        error: () => notification('❌ SCRIPTS ❌', 'Error', 'Check Terminal')
    },
    clean: {
        assets: 'web/app/themes/tetloose-theme/assets',
        css: 'web/app/themes/tetloose-theme/assets/css',
        fonts: 'web/app/themes/tetloose-theme/assets/fonts',
        img: 'web/app/themes/tetloose-theme/assets/img',
        js: 'web/app/themes/tetloose-theme/assets/js',
        sprite: 'web/app/themes/tetloose-theme/assets/sprite'
    },
    styles: {
        mode: isDev,
        files: 'src/**/*.scss',
        appEntry: 'src/scss/app.scss',
        tinymceEntry: 'src/scss/tinymce.scss',
        componentEntry: 'src/js/components/**/*.scss',
        printEntry: 'src/scss/print.scss',
        output: 'web/app/themes/tetloose-theme/assets/css',
        error: () => notification('❌ STYLES ❌', 'Error', 'Check Terminal')
    },
    sprite: {
        prefix: 'u-sprite-',
        entry: 'src/sprite/*.svg',
        styles: 'src/scss/utils/sprite.scss',
        template: 'src/sprite/template.mustache',
        output: 'web/app/themes/tetloose-theme/assets/sprite/sprite.svg',
        error: () => notification('❌ SPRITE ❌', 'Error', 'Check Terminal'),
        success: () => notification('🦡 Sprite 🦡', 'Saved', 'src/scss/utils/sprite.scss')
    },
    html: {
        files: '**/*.{html,php}',
        error: () => notification('❌ PHP ❌', 'Error', 'Check Terminal')
    },
    icons: {
        json: 'src/icons/*.json',
        template: 'src/icons/template.mustache',
        output: 'src/scss/utils/icons.scss',
        fonts: 'src/icons/*.{svg,ttf,woff}',
        fontOutput: 'web/app/themes/tetloose-theme/assets/fonts',
        error: () => notification('❌ ICONS ❌', 'Error', 'Check Terminal'),
        success: () => notification('💃 Icons 💃', 'Saved', 'scss/utils/icons.scss')
    },
    images: {
        files: 'src/img/**/*.{JPG,jpg,JPEG,jpeg,png,gif,svg}',
        entry: 'src/img/**/*',
        output: 'web/app/themes/tetloose-theme/assets/img',
        uploadsEntry: 'web/app/uploads/**/*',
        uploadsOutput: 'web/app/uploads/',
        error: () => notification('❌ IMAGES ❌', 'error', 'Check Terminal'),
        success: () => notification('🐝 Images 🐝', 'Minified', 'web/app/themes/tetloose-theme/assets/img && wp/uploads')
    },
    favicons: {
        entry: 'src/favicon/favicon.png',
        output: 'web/app/themes/tetloose-theme/assets/img/meta/',
        appColour: '#c2ad8d',
        jsonTemplate: 'src/favicon/favicon-data.json',
        success: () => notification('🦙 Favicons 🦙', 'Saved', 'inc/header/head/head-favicons.php')
    },
    fonts: {
        files: 'src/fonts/**/*.{ttf,otf}',
        output: 'web/app/themes/tetloose-theme/assets/fonts/',
        error: () => notification('❌ FONTS ❌', 'error', 'Check Terminal'),
        success: () => notification('🦜 Fonts 🦜', 'Saved', 'web/app/themes/tetloose-theme/assets/fonts')
    }
}
