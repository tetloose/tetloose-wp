import styles from './header.module.scss'
import menuStyles from './menu.module.scss'
import navStyles from './nav.module.scss'
import { ComponentClass } from '@utilities'

export class Header extends ComponentClass {
    constructor(module: HTMLElement) {
        super(module)

        this.css(module, styles)
        this.css(module, menuStyles)
        this.css(module, navStyles)
        this.addScroll()
        this.setState()
    }

    setState() {
        const { module } = this
        const { open, closed } = module.dataset
        const menu = module.querySelector(`.${menuStyles['menu']}`) as HTMLElement
        const nav = module.querySelector(`.${navStyles['nav']}`) as HTMLElement

        this.updateState('openText', open ? open : '')
        this.updateState('closedText', closed ? closed : '')
        this.updateState('menu', menu ? menu : null)
        this.updateState('nav', nav ? nav : null)
        this.updateState('position', 0)
        this.updateState('navOpen', false)
        this.loadEventListener()
        this.navigation({
            nav,
            liClass: navStyles['nav__li'],
            liActiveClass: navStyles['is-active']
        })
    }

    loadEventListener() {
        const { module, state } = this
        const { menu, nav } = state

        if (
            menu instanceof HTMLElement &&
            nav instanceof HTMLElement
        ) {
            this.trapNavigation(menu, nav)

            module.addEventListener('keyup', (e: KeyboardEvent) => {
                if (e.key === 'Escape') {
                    this.navToggle(menu, nav, nav)
                }
            })

            menu.addEventListener('click', () => this.navToggle(menu, nav, nav))
        }
    }

    addScroll() {
        window.addEventListener('scroll', () => { this.headerScroll() })
    }

    headerScroll() {
        const { module, state } = this
        const { position } = state

        if (typeof position === 'number') {
            const { offsetHeight, classList } = module
            const { scrollY } = window
            const moduleHeight = offsetHeight
            const offsetY: number = scrollY

            if (offsetY > position && !classList.contains(styles['is-hidden']) && offsetY > moduleHeight) {
                classList.add(styles['is-hidden'])
            } else if (offsetY < position && classList.contains(styles['is-hidden'])) {
                classList.remove(styles['is-hidden'])
            }

            this.updateState('position', offsetY)
        }
    }

    navToggle(menu: Element, nav: Element, focus: HTMLElement) {
        const { module, state } = this
        const { navOpen, openText, closedText } = state
        const html = document.querySelector('html') as HTMLElement

        this.updateState('navOpen', !navOpen)

        if (this.state?.navOpen) {
            html.classList.add('no-scroll')

            setTimeout(() => {
                module.classList.add(styles['is-active'])
                menu.classList.add(`${menuStyles['is-active']}`)
                menu.setAttribute('aria-expanded', 'true')
                menu.setAttribute('aria-label', `${openText}`)
                nav.classList.add(navStyles['is-active'])
                nav.setAttribute('aria-expanded', 'true')
            }, 100)
        } else {
            html.classList.remove('no-scroll')

            setTimeout(() => {
                module.classList.remove(styles['is-active'])
                menu.classList.remove(`${menuStyles['is-active']}`)
                menu.setAttribute('aria-expanded', 'false')
                menu.setAttribute('aria-label', `${closedText}`)
                nav.classList.remove(navStyles['is-active'])
                nav.setAttribute('aria-expanded', 'false')
            }, 100)
        }

        setTimeout(() => focus.focus(), 0)
    }
}

export default (module: HTMLElement) => new Header(module)
