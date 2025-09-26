import styles from './footer.module.scss'
import navStyles from './footer-nav.module.scss'
import { ComponentClass } from '@utilities'

export class Footer extends ComponentClass {
    constructor(module: HTMLElement) {
        super(module)

        this.css(module, styles)
        this.css(module, navStyles)

        const nav = module.querySelector(`.${navStyles['nav']}`) as HTMLElement

        this.navigation({
            nav,
            liClass: navStyles['nav__li'],
            liActiveClass: navStyles['is-active']
        })

    }
}

export default (module: HTMLElement) => new Footer(module)
