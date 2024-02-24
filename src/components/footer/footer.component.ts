import styles from './footer.module.scss'
import { ComponentClass } from '@utilities'

export class Footer extends ComponentClass {
    constructor(module: HTMLElement) {
        super(module)

        this.css(module, styles)
    }
}

export default (module: HTMLElement) => new Footer(module)
