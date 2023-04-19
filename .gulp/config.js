import path from 'path'
import notification from './tasks/notification'
const isDev = process.env.ENV === 'dev'
const base = path.resolve(__dirname, '../')

module.exports = {
    webpack: {
        mode: isDev,
        entry: `${base}/src/js/app.ts`,
        output: `${base}/web/app/themes/tetloose-theme/assets`
    },
    serve: {
        proxy: 'tetloose-wp.test'
    },
    scripts: {
        files: `${base}/src/**/*.{ts,js}`,
        modules: `${base}/src/js/**/*.scss`,
        error: () => notification('❌ SCRIPTS ❌', 'Error', 'Check Terminal')
    },
    clean: {
        assets: `${base}/web/app/themes/tetloose-theme/assets`,
        css: `${base}/web/app/themes/tetloose-theme/assets/css`,
        js: `${base}/web/app/themes/tetloose-theme/assets/js`,
        icons: `${base}/web/app/themes/tetloose-theme/assets/icons`,
        components: `${base}/web/app/themes/tetloose-theme/components/*.php`,
        favicons: `${base}/web/app/themes/tetloose-theme/favicons`
    },
    styles: {
        mode: isDev,
        files: `${base}/src/scss/**/*.scss`,
        appEntry: `${base}/src/scss/app.scss`,
        tinymceEntry: `${base}/src/scss/tinymce.scss`,
        componentEntry: `${base}/src/js/components/**/*.scss`,
        printEntry: `${base}/src/scss/print.scss`,
        output: `${base}/web/app/themes/tetloose-theme/assets/css`,
        error: () => notification('❌ STYLES ❌', 'Error', 'Check Terminal')
    },
    php: {
        files: `${base}/web/app/themes/tetloose-theme/**/*.php`,
        components: `${base}/src/js/components/**/*.php`,
        output: `${base}/web/app/themes/tetloose-theme/components`,
        error: () => notification('❌ PHP ❌', 'Error', 'Check Terminal')
    },
    icons: {
        json: `${base}/src/icons/*.json`,
        template: `${base}/src/icons/template.mustache`,
        output: `${base}/src/scss/utils/icons.scss`,
        fonts: `${base}/src/icons/*.{svg,ttf,woff}`,
        fontOutput: `${base}/web/app/themes/tetloose-theme/assets/icons`,
        error: () => notification('❌ ICONS ❌', 'Error', 'Check Terminal'),
        success: () => notification('💃 Icons 💃', 'Saved', 'scss/utils/icons.scss')
    },
    favicons: {
        entry: `${base}/src/favicon/favicon.png`,
        output: `${base}/web/app/themes/tetloose-theme/favicons/`,
        appColour: '#c2ad8d',
        jsonTemplate: `${base}/src/favicon/favicon-data.json`,
        success: () => notification('🦙 Favicons 🦙', 'Saved', 'inc/header/head/head-favicons.php')
    }
}
