import { resolve } from 'path'
import { src, dest } from 'gulp'
import phpcs from 'gulp-phpcs'
import rename from 'gulp-rename'
import { php as config } from '../config'
const base = resolve(__dirname, '../../')

const phpLintFunc = (file) => {
    return src(file)
        .pipe(phpcs({
            bin: `${base}/vendor/squizlabs/php_codesniffer/bin/phpcs`,
            standard: `${base}/.phpcs.xml`,
            warningSeverity: 0
        }))
        .pipe(phpcs.reporter('log'))
}

const phpComponentFunc = () => {
    return src([config.components])
        .pipe(rename({dirname: ''}))
        .pipe(dest(config.output))
}

export const phpLint = (file) => {
    phpLintFunc(file)
}

export const phpComponents = (cb) => {
    phpComponentFunc()
    cb()
}
