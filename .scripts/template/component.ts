import { ComponentClass } from '@utilities'
import styles from './COMPONENT_NAME.module.scss'

export class EXPORT_NAME extends ComponentClass {
    constructor(module: HTMLElement) {
        super(module)

        this.css(module, styles)
    }

    setState() {
        console.log('set state here')
        this.loadEventListener()
    }

    loadEventListener() {
        const { state } = this

        console.log('Load event listeners here')
        console.log(state, 'state')
    }
}

export default (module: HTMLElement) => new EXPORT_NAME(module)
