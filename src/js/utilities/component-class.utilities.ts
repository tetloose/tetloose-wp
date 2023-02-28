import styles from './component-class.module.scss'
import CssExports from './utilities.module.scss'
import { addClassNames } from './add-class-names.utilities'

export class ComponentClass {
    module: HTMLElement
    animation: string
    state?: {
        [key: string]: string | boolean | typeof CssExports
    }

    constructor(module: HTMLElement) {
        this.module = module
        this.animation = module.dataset.animation ?? 'fade-in'

        this.animate()
        // this.module.removeAttribute('data-module')
        // this.module.removeAttribute('data-animation')
    }

    animate() {
        if (this.animation) {
            this.module.classList.add(styles['animate-hide'])

            setTimeout(() => {
                Object.entries(styles)
                    .forEach(([key, value]) => key === `animate-${this.animation}` &&
                        addClassNames(this.module, value)
                    )
            }, 200)

            setTimeout(() => {
                // fix later. remove all fade in styles
                this.module.classList.remove(styles['animate-hide'], styles['animate-fade-in'])
            }, 400)
        }
    }
}
