import { src, dest } from 'gulp'
import phpcs from 'gulp-phpcs';
import rename from 'gulp-rename'
import { html as config } from '../config'

const phpLintFunc = () => {
    return src([config.files])
        .pipe(phpcs({
            bin: 'vendor/squizlabs/php_codesniffer/bin/phpcs',
            standard: '.phpcs.xml',
            warningSeverity: 0
        }))
        .pipe(phpcs.reporter('log'))
}

const phpComponentFunc = () => {
    return src([config.components])
        .pipe(rename({dirname: ''}))
        .pipe(dest(config.output))
}

export const phpLint = (cb) => {
    phpLintFunc()
    cb()
}

export const phpComponents = (cb) => {
    phpComponentFunc()
    cb()
}
