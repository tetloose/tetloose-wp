import { src, dest } from 'gulp'
import { init, write } from 'gulp-sourcemaps'
import sass from 'gulp-dart-sass'
import autoprefixer from 'gulp-autoprefixer'
import filter from 'gulp-filter'
import cleanCss from 'gulp-clean-css'
import gulpStylelint from 'gulp-stylelint'
import gulpif from 'gulp-if'
import rev from 'gulp-rev'
import { styles as config } from '../config'
import { reload } from 'browser-sync'

const stylesLintFunc = () => {
    return src([config.files])
        .pipe(gulpStylelint({
            fix: true,
            failAfterError: false,
            reporters: [
                {
                    formatter: 'string',
                    console: true
                }
            ],
            debug: true
        }))
}

const stylesFunc = () => {
    return src([config.appEntry])
        .pipe(gulpif(!config.mode, rev()))
        .pipe(gulpif(config.mode, init()))
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(gulpif(config.mode, write('.')))
        .pipe(gulpif(!config.mode, cleanCss()))
        .pipe(dest(config.output))
        .pipe(gulpif(config.mode, filter(['**/*.css'])))
        .pipe(gulpif(config.mode, reload({
            stream: true
        })))
}

const wordpressFunc = () => {
    return src([config.wordpressEntry])
        .pipe(gulpif(!config.mode, rev()))
        .pipe(gulpif(config.mode, init()))
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(gulpif(config.mode, write('.')))
        .pipe(gulpif(!config.mode, cleanCss()))
        .pipe(dest(config.output))
        .pipe(gulpif(config.mode, filter(['**/*.css'])))
        .pipe(gulpif(config.mode, reload({
            stream: true
        })))
}

export const stylesLint = (cb) => {
    stylesLintFunc()
    cb()
}

export const styles = (cb) => {
    stylesFunc()
    cb()
}

export const wordpress = (cb) => {
    wordpressFunc()
    cb()
}
