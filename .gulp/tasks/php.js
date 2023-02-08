import { src, dest } from 'gulp'
import phpcs from 'gulp-phpcs';
import plumber from 'gulp-plumber'
import rename from 'gulp-rename'
import { html as config } from '../config'

const phpFunc = () => {
    return src([config.files, `!${config.output}/**/*.{html,php}`])
        .pipe(plumber({ errorHandler: config.error }))
        .pipe(phpcs({
            bin: 'vendor/bin/phpcs',
            standard: '.phpcs.xml',
            warningSeverity: 0
        }))
        .pipe(phpcs.reporter('log'))
}

const phpComponentFunc = () => {
    return src([config.components])
        .pipe(phpcs({
            bin: 'vendor/bin/phpcs',
            standard: '.phpcs.xml',
            warningSeverity: 0
        }))
        .pipe(rename({dirname: ''}))
        .pipe(dest(config.output))
        .pipe(phpcs.reporter('log'))
}

export const php = (cb) => {
    phpFunc()
    cb()
}

export const phpComponents = (cb) => {
    phpComponentFunc()
    cb()
}
