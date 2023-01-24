import browserSync, { reload as bsReload } from 'browser-sync'
import { serve as config } from '../config'

const serveFunc = () => {
    return browserSync({
        proxy: config.proxy,
        open: true,
        notify: false,
        logFileChanges: false,
        logSnippet: false,
        ogLevel: 'silent',
        ghostMode: {
            clicks: true,
            forms: true,
            scroll: true
        }
    })
}

export const reload = (cb) => {
    bsReload()
    cb()
}

export const serve = (cb) => {
    serveFunc()
    cb()
}
