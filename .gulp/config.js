import { resolve } from 'path'
import * as dotenv from 'dotenv'

dotenv.config()
const isDev = process.env.ENV === 'dev'
const base = resolve(__dirname, '../')

module.exports = {
    webpack: {
        mode: isDev,
        entry: `${base}/src/app.ts`,
        output: `${base}/web/app/themes/tetloose-theme/assets`
    },
    serve: {
        proxy: process.env.PROXY
    },
    scripts: {
        entry: `${base}/src/app.ts`,
        files: `${base}/src/**/**/*.{ts,js}`,
        components: `${base}/src/components/**/*.{ts,js}`,
        modules: `${base}/src/components/**/*.scss`
    },
    clean: {
        assets: `${base}/web/app/themes/tetloose-theme/assets`,
        css: `${base}/web/app/themes/tetloose-theme/assets/css`,
        js: `${base}/web/app/themes/tetloose-theme/assets/js`,
        icons: `${base}/web/app/themes/tetloose-theme/assets/icons`,
        components: `${base}/web/app/themes/tetloose-theme/components`
    },
    styles: {
        mode: isDev,
        files: `${base}/src/scss/**/*.scss`,
        appEntry: `${base}/src/scss/app.scss`,
        wordpressEntry: `${base}/src/scss/wordpress.scss`,
        componentEntry: `${base}/src/components/**/*.scss`,
        output: `${base}/web/app/themes/tetloose-theme/assets/css`
    },
    php: {
        files: `${base}/web/app/themes/tetloose-theme/**/*.php`,
        components: `${base}/src/components/**/*.php`,
        output: `${base}/web/app/themes/tetloose-theme/components`
    },
    icons: {
        json: `${base}/src/icons/*.json`,
        template: `${base}/src/icons/template.mustache`,
        output: `${base}/src/scss/utils/icons.scss`,
        fonts: `${base}/src/icons/*.{svg,ttf,woff}`,
        fontOutput: `${base}/web/app/themes/tetloose-theme/assets/icons`
    }
}
