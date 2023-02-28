import styles from './menu.module.scss'
import utilityStyles from '../../utilities/component-class.module.scss'
import { ComponentClass, cssModule } from '../../utilities'

export class Menu extends ComponentClass {
    constructor(module: HTMLElement) {
        super(module)
        this.state = {
            styles: { ...styles, ...utilityStyles },
            nav: false
        }

        this.styles()
        this.loadEventListener()
    }

    styles() {
        cssModule(this.module, this.state?.styles)
    }

    updateState(key: string, value: string | boolean) {
        if (this.state) {
            this.state[key] = value
        }
    }

    loadEventListener() {
        const trigger = this.module.querySelector(`.${this.state?.styles['trigger']}`)
        const nav = this.module.querySelector(`.${this.state?.styles['nav']}`)
        const subNav = this.module.querySelector(`.${this.state?.styles['sub-nav']}`)
        const a = subNav?.querySelector('a')

        subNav?.querySelectorAll('li')
            .forEach(elem => {
                Object.values(subNav.classList)
                    .forEach(val1 => Object.values(this.state?.styles)
                        .forEach(val2 => val1 === val2 &&
                            elem.querySelector('a')?.classList.add(val1)
                        )
                    )

                elem.removeAttribute('id')

                if (elem.classList.contains('current-menu-item')) {
                    elem.removeAttribute('class')
                    elem.classList.add(this.state?.styles['sub-nav__item'])
                    elem.classList.add(this.state?.styles['is-active'])
                } else {
                    elem.removeAttribute('class')
                    elem.classList.add(this.state?.styles['sub-nav__item'])
                }
            })

        trigger?.addEventListener('click', () => {
            this.updateState('nav', this.state ? !this.state.nav : false)

            if (this.state?.nav) {
                this.module.classList.add(this.state?.styles['nav-open'])

                setTimeout(() => {
                    nav?.classList.add(this.state?.styles['animate-angle-open'])
                }, 200)

                setTimeout(() => {
                    this.module.classList.add(this.state?.styles['sub-nav-visible'])

                    setTimeout(() => {
                        if (a) {
                            a.focus()
                        }
                    }, 200)
                }, 400)

                // if (links) links[0].focus()
            } else {
                this.module.classList.remove(this.state?.styles['sub-nav-visible'])
                nav?.classList.add(this.state?.styles['animate-angle-close'])
                this.module.classList.remove(this.state?.styles['nav-open'])

                setTimeout(() => {
                    nav?.classList.remove(this.state?.styles['animate-angle-open'], this.state?.styles['animate-angle-close'])
                }, 200)
            }
        })
    }
}

export default (module: HTMLElement) => new Menu(module)
