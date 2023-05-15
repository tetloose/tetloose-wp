import styles from './header.module.scss'
import { ComponentClass } from '../../utilities'

export class Header extends ComponentClass {
    constructor(module: HTMLElement) {
        super(module)
        this.state = {
            position: 0,
            closedText: this.module.dataset.closed ? this.module.dataset.closed : '',
            openText: this.module.dataset.open ? this.module.dataset.open : '',
            nav: false
        }

        this.cssModule(this.module, styles)
        this.loadEventListener()

        window.addEventListener('scroll', () => { this.headerScroll() })
    }

    headerScroll() {
        if (typeof this.state?.position === 'number') {
            const moduleHeight = this.module.offsetHeight
            const offsetY: number = window.pageYOffset

            if (offsetY > this.state?.position && !this.module.classList.contains(styles['is-hidden']) && offsetY >= moduleHeight) {
                this.module.classList.add(styles['is-hidden'])
            } else if (offsetY < this.state?.position && this.module.classList.contains(styles['is-hidden'])) {
                this.module.classList.remove(styles['is-hidden'])
            }

            this.updateState('position', offsetY)
        }
    }

    loadEventListener() {
        const subNav = this.module.querySelector(`.${styles['sub-nav']}`)
        const trigger = this.module.querySelector(`.${styles['trigger']}`)
        const nav = this.module.querySelector(`.${styles['nav']}`)
        subNav?.setAttribute('tabindex', '-1')

        if (trigger && subNav && nav) {
            this.module.addEventListener('keyup', (e: KeyboardEvent) => {
                if (e.key === 'Escape' && this.state?.nav) {
                    this.navToggle(trigger, nav, subNav)
                }
            })

            trigger.addEventListener('click', () => this.navToggle(trigger, nav, subNav))
        }
    }

    navToggle(trigger: Element, nav: Element, focusElem: Element) {
        const html = <HTMLElement>document.querySelector('html')
        const title = trigger.querySelector(`.${styles['trigger__title']}`)
        const innerWidth = window.innerWidth
        const menu = this.module.querySelector(`.${styles['menu']}`)

        this.updateState('nav', this.state ? !this.state.nav : false)

        if (this.state?.nav) {
            menu?.classList.add(styles['is-flex'])
            menu?.classList.add(styles['nav-open'])
            nav?.setAttribute('aria-expanded', 'true')
            trigger.classList.add(`${styles['is-active']}`)
            trigger?.setAttribute('aria-expanded', 'true')
            trigger?.setAttribute('aria-label', `${this.state.openText}`)
            html.classList.add('no-scroll')

            if (title) title.innerHTML = `${this.state.openText}`

            setTimeout(() => {
                nav?.classList.add(`${styles['angle-open']}`)

                setTimeout(() => {
                    menu?.classList.add(styles['sub-nav-visible'])

                    if (focusElem && innerWidth >= 768) {
                        setTimeout(() => {
                            if (focusElem instanceof HTMLElement) {
                                focusElem.focus()
                            }
                        }, 200)
                    }
                }, 400)
            }, 200)

        } else {
            menu?.classList.remove(styles['sub-nav-visible'])
            nav.setAttribute('aria-expanded', 'false')
            trigger.setAttribute('aria-expanded', 'false')
            trigger.setAttribute('aria-label', `${this.state?.closedText}`)

            if (trigger instanceof HTMLElement && innerWidth >= 768) {
                trigger.focus()
            }

            setTimeout(() => {
                nav.classList.add(`${styles['angle-close']}`)

                setTimeout(() => {
                    if (title instanceof HTMLElement) title.innerHTML = `${this.state?.closedText}`
                    nav?.classList.remove(`${styles['angle-open']}`, `${styles['angle-close']}`)
                    trigger.classList.remove(`${styles['is-active']}`)
                    menu?.classList.remove(styles['nav-open'])

                    setTimeout(() => {
                        html.classList.remove('no-scroll')
                        menu?.classList.remove(styles['is-flex'])
                    }, 200)
                }, 400)
            }, 200)
        }
    }
}

export default (module: HTMLElement) => new Header(module)
