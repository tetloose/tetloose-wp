import { components } from './config/components'
import { figures } from './config/figures'
import { iframes } from './config/iframes'
import { observer } from './config/observer'

components?.forEach((component) => {
    observer.observe(component)
})

figures?.forEach((figure) => {
    observer.observe(figure)
})

iframes?.forEach((iframe) => {
    observer.observe(iframe)
})
