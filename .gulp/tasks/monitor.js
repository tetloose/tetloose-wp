import { watch, series } from 'gulp'
import { reload } from './serve.js'
import { favicon } from './favicons.js'
import { iconMoveFont, iconGenerate } from './icons.js'
import { scriptsLint, scriptsBundle } from './scripts.js'
import { stylesLint, styles, tinymce, print, wordpress } from './styles.js'
import { phpLint, phpComponents } from './php.js'
import config from '../config'

const monitor = (cb) => {
    watch([config.scripts.files, config.scripts.modules],
        series(
            scriptsLint,
            scriptsBundle
        )
    )
    watch([config.styles.files],
        series(
            stylesLint,
            styles,
            tinymce,
            print,
            wordpress
        )
    )
    watch([config.icons.fonts, config.icons.json],
        series(
            iconMoveFont,
            iconGenerate,
            stylesLint,
            styles,
            config.icons.success
        )
    )
    watch([config.php.components],
        series(
            phpComponents,
        )
    ).on('change', (file) => {
        phpLint(file)
    })
    watch([config.php.files],
        series(
            reload
        )
    )
    watch(
        [config.favicons.entry],
        series(
            favicon,
            config.favicons.success,
            reload
        )
    )
    cb()
}

export default monitor
