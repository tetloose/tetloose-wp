// import styles from './logo.module.scss'
import { ComponentClass } from '../../utilities'

export class logo extends ComponentClass {
    constructor(module: HTMLElement) {
        super(module)

        // this.styles()
    }

    // styles() {
    // cssModule(this.module, styles)
    // }
}

export default (module: HTMLElement) => new logo(module)
