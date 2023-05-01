import { components, figures, iframes, videoIframes, observer } from './utilities'

components?.forEach((component) => {
    observer.observe(component)
})

figures?.forEach((figure) => {
    observer.observe(figure)
})

iframes?.forEach((iframe) => {
    observer.observe(iframe)
})

videoIframes?.forEach((videoIframe) => {
    observer.observe(videoIframe)
})
