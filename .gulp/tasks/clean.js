import { src } from 'gulp'
import clean from 'gulp-clean';
import { mkdirp } from 'mkdirp'
import { clean as config } from '../config.js'

const cleanAssetsFunc = () => {
    return src(config.assets, {
        read: false,
        allowEmpty: true
    }).pipe(clean())
}

const cleanComponentsFunc = () => {
    return src(config.components, {
        read: false,
        allowEmpty: true
    }).pipe(clean())
}

const generateAssetsFunc = () => {
    return mkdirp(config.assets)
}

const generateCssFunc = () => {
    return mkdirp(config.css)
}

const generateJsFunc = () => {
    return mkdirp(config.js)
}

const generateIconsFunc = () => {
    return mkdirp(config.icons)
}

const generateComponentsFunc = () => {
    return mkdirp(config.components)
}

export const cleanAssets = (cb) => {
    cleanAssetsFunc()
    cleanComponentsFunc()

    setTimeout(() => {
        generateAssetsFunc()
        generateCssFunc()
        generateJsFunc()
        generateIconsFunc()
        generateComponentsFunc()
        cb()
    }, 400);

    cb()
}
