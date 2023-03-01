import styles from './menu.module.scss'
import utilityStyles from '../../utilities/component-class.module.scss'
import { ComponentClass, cssModule } from '../../utilities'

export class Menu extends ComponentClass {
    constructor(module: HTMLElement) {
        super(module)
        this.state = {
            closedText: this.module.dataset.closed,
            openText: this.module.dataset.open,
            styles: { ...styles, ...utilityStyles },
            nav: false
        }

        this.styles()
        this.loadEventListener()
    }

    styles() {
        cssModule(this.module, this.state?.styles)
    }

    loadEventListener() {
        const subNav = this.module.querySelector(`.${this.state?.styles['sub-nav']}`)
        const trigger = this.module.querySelector(`.${this.state?.styles['trigger']}`)
        const nav = this.module.querySelector(`.${this.state?.styles['nav']}`)
        const focusElem = subNav?.querySelector('a')

        if (subNav && this.state?.styles) this.subNav(subNav, this.state?.styles)

        if (trigger && focusElem && nav) {
            this.module.addEventListener('keyup', (e: KeyboardEvent) => {
                if (e.key === 'Escape' && this.state?.nav) {
                    this.navToggle(trigger, nav, focusElem)
                }
            })

            trigger.addEventListener('click', () => this.navToggle(trigger, nav, focusElem))
        }
    }

    navToggle(trigger: Element, nav: Element, focusElem: HTMLElement) {
        const html = <HTMLElement>document.querySelector('html')
        const title = this.module.querySelector(`.${this.state?.styles['trigger__title']}`)

        this.updateState('nav', this.state ? !this.state.nav : false)

        if (this.state?.nav) {
            html.classList.add('no-scroll')
            this.module.classList.add(this.state?.styles['nav-open'])
            nav?.setAttribute('aria-expanded', 'true')
            trigger?.setAttribute('aria-expanded', 'true')
            trigger?.setAttribute('aria-label', this.state.openText)

            if (title) title.innerHTML = this.state.openText

            setTimeout(() => {
                nav?.classList.add(this.state?.styles['animate-angle-open'])
            }, 200)

            setTimeout(() => {
                this.module.classList.add(this.state?.styles['sub-nav-visible'])

                if (focusElem) setTimeout(() => {
                    focusElem.focus()
                }, 200)
            }, 400)
        } else {
            this.module.classList.remove(this.state?.styles['sub-nav-visible'])
            this.module.classList.remove(this.state?.styles['nav-open'])

            if (nav) {
                nav.classList.add(this.state?.styles['animate-angle-close'])
                nav.setAttribute('aria-expanded', 'true')
            }

            if (trigger) {
                trigger.setAttribute('aria-expanded', 'true')
                trigger.setAttribute('aria-label', this.state?.closedText)

                if (trigger instanceof HTMLElement) {
                    trigger.focus()
                }
            }

            if (title) title.innerHTML = this.state?.closedText

            setTimeout(() => {
                nav?.classList.remove(this.state?.styles['animate-angle-open'], this.state?.styles['animate-angle-close'])
                html.classList.remove('no-scroll')
            }, 200)
        }
    }
}

export default (module: HTMLElement) => new Menu(module)
