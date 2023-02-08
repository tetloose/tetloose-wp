import { series } from 'gulp'
import clean from './.gulp/tasks/clean'
import { serve } from './.gulp/tasks/serve.js'
import sprite from './.gulp/tasks/sprite.js'
import { favicon } from './.gulp/tasks/favicons.js'
import fonts from './.gulp/tasks/fonts'
import { iconMoveFont, iconGenerate } from './.gulp/tasks/icons.js'
import { compressAssets, compressUploads } from './.gulp/tasks/images.js'
import { scriptsLint, scriptsBundle } from './.gulp/tasks/scripts.js'
import { stylesLint, stylesDev, stylesTinymceDev, stylesPrint } from './.gulp/tasks/styles.js'
import { php, phpComponents } from './.gulp/tasks/php.js'
import monitor from './.gulp/tasks/monitor.js'

exports.clean = clean
exports.sprite = sprite
exports.favicons = favicon
exports.fonts = fonts
exports.icons = series(
    iconMoveFont,
    iconGenerate
)
exports.images = series(
    compressAssets,
    compressUploads
)
exports.scripts = series(
    scriptsLint,
    scriptsBundle
)
exports.styles = series(
    stylesLint,
    stylesDev,
    stylesTinymceDev,
    stylesPrint
)
exports.default = series(
    sprite,
    favicon,
    fonts,
    iconMoveFont,
    iconGenerate,
    compressAssets,
    compressUploads,
    scriptsLint,
    scriptsBundle,
    stylesLint,
    stylesDev,
    stylesTinymceDev,
    stylesPrint,
    php,
    phpComponents
)
exports.serve = series(
    serve,
    monitor
)
exports.build = series(
    sprite,
    favicon,
    fonts,
    iconMoveFont,
    iconGenerate,
    compressAssets,
    compressUploads,
    scriptsLint,
    scriptsBundle,
    stylesLint,
    stylesDev,
    stylesTinymceDev,
    stylesPrint,
    php,
    phpComponents
)
