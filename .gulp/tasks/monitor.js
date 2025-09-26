import { watch, series } from 'gulp'
import { reload } from './serve.js'
import { iconMoveFont, iconGenerate } from './icons.js'
import { scriptsLint, scriptsBundle } from './scripts.js'
import { stylesLint, styles, wordpress } from './styles.js'
import { phpLint, phpComponents } from './php.js'
import config from '../config'

const monitor = (cb) => {
    watch([
        config.scripts.files,
        config.scripts.components,
        config.scripts.modules
    ],
        series(
            scriptsLint,
            scriptsBundle,
            reload
        )
    )

    watch([config.styles.files],
        series(
            stylesLint,
            styles,
            wordpress
        )
    )

    watch([config.icons.fonts, config.icons.json],
        series(
            iconMoveFont,
            iconGenerate,
            stylesLint,
            styles
        )
    )

    watch([config.php.components],
        series(phpComponents)
    ).on('change', (file) => {
        phpLint(file)
    })

    watch([config.php.files],
        series(reload)
    )

    cb()
}

export default monitor
