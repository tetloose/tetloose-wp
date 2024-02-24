import styles from './navigation.module.scss'
import { ComponentClass } from '@utilities'

export class Navigation extends ComponentClass {
    constructor(module: HTMLElement) {
        super(module)

        this.css(module, styles)
        this.loadEventListener()
    }

    loadEventListener() {
        const { module } = this

        this.subNav(module, styles['sub-nav__item'], styles['is-active'])
    }
}

export default (module: HTMLElement) => new Navigation(module)
