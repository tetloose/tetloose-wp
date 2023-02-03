import { watch, series } from 'gulp'
import { reload } from './serve.js'
import sprite from './sprite.js'
import { favicon } from './favicons.js'
import fonts from './fonts'
import { iconMoveFont, iconGenerate } from './icons.js'
import { compressAssets } from './images.js'
import { scriptsLint, scriptsBundle } from './scripts.js'
import { stylesLint, stylesDev, stylesTinymceDev, stylesPrint } from './styles.js'
import { php } from './php.js'
import config from '../config'

const monitor = (cb) => {
    watch([config.scripts.files, config.scripts.modules],
        series(
            scriptsLint,
            scriptsBundle,
            reload
        )
    )
    watch([config.styles.files],
        series(
            stylesLint,
            stylesDev,
            stylesTinymceDev,
            stylesPrint
        )
    )
    watch([config.icons.fonts, config.icons.json],
        series(
            iconMoveFont,
            iconGenerate,
            stylesLint,
            stylesDev,
            stylesTinymceDev,
            stylesPrint,
            config.icons.success
        )
    )
    watch([config.html.files],
        series(php, reload)
    )
    watch([config.sprite.entry],
        series(
            sprite,
            stylesLint,
            stylesDev,
            stylesTinymceDev,
            stylesPrint,
            config.sprite.success
        )
    )
    watch([config.images.files],
        series(
            compressAssets,
            config.images.success
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
    watch(
        [config.fonts.files],
        series(
            fonts,
            stylesLint,
            stylesDev,
            stylesTinymceDev,
            stylesPrint,
            config.fonts.success
        )
    )
    cb()
}

export default monitor
