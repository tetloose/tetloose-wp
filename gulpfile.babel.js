import { series } from 'gulp'
import { cleanAssets } from './.gulp/tasks/clean'
import { serve } from './.gulp/tasks/serve.js'
import { iconMoveFont, iconGenerate } from './.gulp/tasks/icons.js'
import { scriptsLint, scriptsBundle } from './.gulp/tasks/scripts.js'
import { stylesLint, styles, wordpress } from './.gulp/tasks/styles.js'
import { phpComponents } from './.gulp/tasks/php.js'
import monitor from './.gulp/tasks/monitor.js'

exports.clean = cleanAssets
exports.php = series(
    phpComponents
)
exports.default = series(
    iconMoveFont,
    iconGenerate,
    scriptsLint,
    scriptsBundle,
    stylesLint,
    styles,
    wordpress
)
exports.serve = series(
    serve,
    monitor
)
exports.build = series(
    iconMoveFont,
    iconGenerate,
    scriptsLint,
    scriptsBundle,
    stylesLint,
    styles,
    wordpress
)
