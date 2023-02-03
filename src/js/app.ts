import { components } from './config/components'
import { observer } from './config/observer'

components?.forEach((component) => {
    observer.observe(component)
})
