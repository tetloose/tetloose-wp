import { src } from 'gulp'
import shell from 'gulp-shell'
import { clean as config } from '../config'

const cleanAssetsFunc = () => {
    return src('.', {
            read: false
        })
        .pipe(shell(
            [`rm -rf ${config.assets}; rm -rf ${config.components}; mkdir -p ${config.assets} ${config.css} ${config.fonts} ${config.img} ${config.js} ${config.sprite}`]
        ))
}

const clean = (cb) => {
    cleanAssetsFunc()
    cb()
}

export default clean
