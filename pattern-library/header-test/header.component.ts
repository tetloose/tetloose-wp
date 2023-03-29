import styles from './header.module.scss'
import utilityStyles from '../../utilities/component-class.module.scss'
import { ComponentClass, cssModule } from '../../utilities'

export class Header extends ComponentClass {
    constructor(module: HTMLElement) {
        super(module)
        this.state = {
            styles: { ...styles, ...utilityStyles }
        }

        this.styles()
    }

    styles() {
        cssModule(this.module, this.state?.styles)
    }
}

export default (module: HTMLElement) => new Header(module)
