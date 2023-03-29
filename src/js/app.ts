import { components, figures, iframes, observer } from './config'

components?.forEach((component) => {
    observer.observe(component)
})

figures?.forEach((figure) => {
    observer.observe(figure)
})

iframes?.forEach((iframe) => {
    observer.observe(iframe)
})
