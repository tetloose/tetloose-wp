import styles from './nav.module.scss'
import { ComponentClass, cssModule } from '../../utilities'

export class Nav extends ComponentClass {
    trigger: Element | null
    menu: Element | null

    constructor(module: HTMLElement) {
        super(module)
        this.trigger = this.module.querySelector('.js-trigger')
        this.menu = this.module.querySelector('.js-menu')
        this.state = {
            menu: false,
            interaction: true
        }

        this.styles()
        this.loadEventListener()
    }

    styles() {
        cssModule(this.module, styles)
    }

    updateState(key: string, value: string | boolean) {
        if (this.state) {
            this.state[key] = value
        }
    }

    loadEventListener() {
        this.trigger?.addEventListener('click', () => {
            this.updateState('menu', this.state ? !this.state.menu : false)

            if (this.state && this.state.menu && this.state.interaction) {
                this.menu?.classList.add(styles['is-active'])
            } else {
                this.menu?.classList.remove(styles['is-active'])
            }
        })
    }
}

export default (module: HTMLElement) => new Nav(module)
