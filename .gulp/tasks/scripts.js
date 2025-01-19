import { src } from 'gulp'
import webpack from 'webpack'
import webpackConfig from '../../webpack.config'
import gulpESLintNew, { fix, format, failAfterError } from 'gulp-eslint-new'
import { scripts as config } from '../config'

const scriptsLintFunc = () => {
    return src([config.files])
        .pipe(gulpESLintNew({ fix: true }))
        .pipe(fix())
        .pipe(format())
        .pipe(failAfterError())
}

const scriptsBundleFunc = (cb = () => {}) => {
    webpack(webpackConfig, (err, stats) => {
        if (err) {
            console.error('Webpack Error:', err.toString())
            return cb(err)
        }

        console.log('[scripts]', stats.toString({
            colors: true,
            modules: false,
            children: false,
            chunks: false,
            chunkModules: false,
            assets: false,
            builtAt: false,
            cached: false,
            entrypoints: false,
            hash: false,
            performance: false,
            timings: false,
            version: false
        }))

        cb()
    })
}

export const scriptsLint = (cb) => {
    scriptsLintFunc()
    cb()
}

export const scriptsBundle = (cb) => {
    scriptsBundleFunc(cb)
}
