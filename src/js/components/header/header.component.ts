import styles from './header.module.scss'
import { ComponentClass, cssModule } from '../../utilities'

export class Header extends ComponentClass {
    constructor(module: HTMLElement) {
        super(module)

        this.styles()
    }

    styles() {
        cssModule(this.module, styles)
    }
}

export default (module: HTMLElement) => new Header(module)
