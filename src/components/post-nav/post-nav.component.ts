import styles from './post-nav.module.scss'
import { ComponentClass } from '@utilities'

export class PostNav extends ComponentClass {
    constructor(module: HTMLElement) {
        super(module)

        this.css(module, styles)
    }
}

export default (module: HTMLElement) => new PostNav(module)
