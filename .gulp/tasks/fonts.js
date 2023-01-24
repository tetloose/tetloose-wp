import { lastRun, src } from 'gulp'
import fontgen from 'gulp-fontgen'
import plumber from 'gulp-plumber'
import { fonts as config } from '../config'

const fontsFunc = () => {
    return src(config.files, {
            allowEmpty: true,
            since: lastRun(fontsFunc)
        })
        .pipe(plumber({ errorHandler: config.error }))
        .pipe(fontgen({
            dest: config.output
        })
    )
}

const fonts = (cb) => {
    fontsFunc()
    cb()
}

export default fonts
