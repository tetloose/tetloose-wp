import { src } from 'gulp'
import shell from 'gulp-shell'
import { clean as config } from '../config'

const cleanAssetsFunc = () => {
    return src('.', {
            read: false
        })
        .pipe(shell(
            [`rm -rf ${config.assets} ${config.components}; mkdir -p ${config.assets} ${config.css} ${config.icons} ${config.js}`]
        ))
}

const cleanFaviconsFunc = () => {
    return src('.', {
            read: false
        })
        .pipe(shell(
            [`rm -rf ${config.favicons}; mkdir -p ${config.favicons};`]
        ))
}

export const clean = (cb) => {
    cleanAssetsFunc()
    cb()
}

export const cleanFavicons = (cb) => {
    cleanFaviconsFunc()
    cb()
}
