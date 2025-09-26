import browserSync, { reload as bsReload } from 'browser-sync'
import { serve as config } from '../config'

const serveFunc = () => {
    browserSync.create()

    return browserSync({
        proxy: config.proxy,
        open: false,
        notify: false,
        logFileChanges: false,
        logSnippet: true,
        ogLevel: 'info',
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
