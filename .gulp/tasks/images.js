import { src, dest, lastRun } from 'gulp'
import imagemin from 'gulp-imagemin'
import pngquant from 'imagemin-pngquant'
import mozjpeg from 'imagemin-mozjpeg'
import plumber from 'gulp-plumber'
import { images as config } from '../config'

const assets = () => {
    return src([config.entry], {
            since: lastRun(assets)
        })
        .pipe(plumber({ errorHandler: config.error }))
        .pipe(imagemin({
            progressive: true,
            optimizationLevel: 7,
            interlaced: true,
            use: [
                pngquant({quality: [0.5, 0.5]}),
                mozjpeg({quality: 50})
            ]
        }))
        .pipe(dest(config.output))
}

const uploads = () => {
    return src([config.uploadsEntry], {
            since: lastRun(uploads)
        })
        .pipe(plumber({ errorHandler: config.error }))
        .pipe(imagemin({
            progressive: true,
            optimizationLevel: 7,
            interlaced: true,
            use: [
                pngquant({quality: [0.5, 0.5]}),
                mozjpeg({quality: 50})
            ]
        }))
        .pipe(dest(config.uploadsOutput))
}

export const compressAssets = (cb) => {
    assets()
    cb()
}

export const compressUploads = (cb) => {
    uploads()
    cb()
}
