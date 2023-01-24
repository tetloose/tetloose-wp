import { src, dest, lastRun } from 'gulp'
import svgSprite from 'gulp-svg-sprite'
import plumber from 'gulp-plumber'
import { sprite as config } from '../config'

const spriteFunc = () => {
    return src([config.entry], {
            since: lastRun(spriteFunc)
        })
        .pipe(plumber({ errorHandler: config.error }))
        .pipe(svgSprite({
            'mode': {
                'css': {
                    'dest': '',
                    'prefix': config.prefix,
                    'sprite': `${config.output}`,
                    'bust': false,
                    'render': {
                        'scss': {
                            'dest': `${config.styles}`,
                            'template': `${config.template}`
                        }
                    }
                },
                'symbol': {
                    'dest': '',
                    'sprite': `${config.output}`
                }
            }
        }))
        .pipe(dest('./'))
}

const sprite = (cb) => {
    spriteFunc()
    cb()
}

export default sprite
