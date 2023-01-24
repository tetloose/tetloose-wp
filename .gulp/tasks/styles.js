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
import path from 'path'
import rename from 'gulp-rename'

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

const stylesDevFunc = () => {
    return src([config.appEntry], {
            since: lastRun(stylesDevFunc)
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

const stylesTinyMceDevFunc = () => {
    return src([config.tinymceEntry], {
            since: lastRun(stylesTinyMceDevFunc)
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

const stylesComponentsFunc = () => {
    return src([config.componentEntry], {
            since: lastRun(stylesComponentsFunc)
        })
        .pipe(plumber({ errorHandler: config.error }))
        .pipe(gulpif(config.mode, init()))
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(gulpif(config.mode, write('.')))
        .pipe(gulpif(!config.mode, cleanCss()))
        .pipe(gulpif(!config.mode, hash(hashObj)))
        .pipe(rename(file => file.dirname = path.dirname(file.dirname)))
        .pipe(dest(config.output))
        .pipe(gulpif(config.mode, filter(['**/*.css'])))
        .pipe(gulpif(config.mode, reload({
            stream: true
        })))
}

const stylesPrintFunc = () => {
    return src([config.printEntry], {
            since: lastRun(stylesPrintFunc)
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

export const stylesLint = (cb) => {
    stylesLintFunc()
    cb()
}

export const stylesDev = (cb) => {
    stylesDevFunc()
    cb()
}

export const stylesTinymceDev = (cb) => {
    stylesTinyMceDevFunc()
    cb()
}

export const stylesComponents = (cb) => {
    stylesComponentsFunc()
    cb()
}

export const stylesPrint = (cb) => {
    stylesPrintFunc()
    cb()
}
