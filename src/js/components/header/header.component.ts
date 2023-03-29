import styles from './header.module.scss'
import { ComponentClass } from '../../utilities'

export class Header extends ComponentClass {
    constructor(module: HTMLElement) {
        super(module)

        this.cssModule(this.module, styles)
    }
}

export default (module: HTMLElement) => new Header(module)
