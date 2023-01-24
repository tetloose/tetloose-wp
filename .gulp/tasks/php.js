import { src } from 'gulp'
import phpcs from 'gulp-phpcs';
import plumber from 'gulp-plumber'
import { html as config } from '../config'

const phpFunc = () => {
    return src([config.files, '!vendor/**/*.*'])
        .pipe(plumber({ errorHandler: config.error }))
        .pipe(phpcs({
            bin: 'vendor/bin/phpcs',
            standard: '.phpcs.xml',
            warningSeverity: 0
        }))
        .pipe(phpcs.reporter('log'))
}

export const php = (cb) => {
    phpFunc()
    cb()
}
