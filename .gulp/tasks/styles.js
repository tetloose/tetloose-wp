import { src, dest, lastRun } from 'gulp'
import { init, write } from 'gulp-sourcemaps'
import plumber from 'gulp-plumber'
import sass from 'gulp-dart-sass'
import autoprefixer from 'gulp-autoprefixer'
import filter from 'gulp-filter'
import cleanCss from 'gulp-clean-css'
import { reload } from 'browser-sync'
import gulpStylelint from 'gulp-stylelint'
import gulpif from 'gulp-if'
import hash from 'gulp-hash'
import { styles as config } from '../config'

const hashObj = {
    hashLength: 20,
    template: '<%= name %>.<%= hash %><%= ext %>'
};

const stylesLintFunc = () => {
    return src([config.files], {
            since: lastRun(stylesLintFunc)
        })
        .pipe(plumber({ errorHandler: config.error }))
        .pipe(gulpStylelint({
            fix: true,
            failAfterError: false,
            reporters: [
                {
                    formatter: 'string',
                    console: true
                },
            ],
            debug: true
        }))
}

const stylesFunc = () => {
    return src([config.appEntry], {
            since: lastRun(stylesFunc)
        })
        .pipe(plumber({ errorHandler: config.error }))
        .pipe(gulpif(config.mode, init()))
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(gulpif(config.mode, write('.')))
        .pipe(gulpif(!config.mode, cleanCss()))
        .pipe(gulpif(!config.mode, hash(hashObj)))
        .pipe(dest(config.output))
        .pipe(gulpif(config.mode, filter(['**/*.css'])))
        .pipe(gulpif(config.mode, reload({
            stream: true
        })))
}

const tinymceFunc = () => {
    return src([config.tinymceEntry], {
            since: lastRun(tinymceFunc)
        })
        .pipe(plumber({ errorHandler: config.error }))
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(gulpif(!config.mode, cleanCss()))
        .pipe(dest(config.output))
        .pipe(gulpif(config.mode, filter(['**/*.css'])))
        .pipe(gulpif(config.mode, reload({
            stream: true
        })))
}

const printFunc = () => {
    return src([config.printEntry], {
            since: lastRun(printFunc)
        })
        .pipe(plumber({ errorHandler: config.error }))
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(gulpif(!config.mode, cleanCss()))
        .pipe(gulpif(!config.mode, hash(hashObj)))
        .pipe(dest(config.output))
        .pipe(gulpif(config.mode, filter(['**/*.css'])))
        .pipe(gulpif(config.mode, reload({
            stream: true
        })))
}

const wordpressFunc = () => {
    return src([config.wordpressEntry], {
            since: lastRun(wordpressFunc)
        })
        .pipe(plumber({ errorHandler: config.error }))
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
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

export const tinymce = (cb) => {
    tinymceFunc()
    cb()
}

export const print = (cb) => {
    printFunc()
    cb()
}

export const wordpress = (cb) => {
    wordpressFunc()
    cb()
}
