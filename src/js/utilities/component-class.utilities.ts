import { addClassNames } from './add-class-names.utilities'

export class ComponentClass {
    module: HTMLElement
    animation: string
    state?: {
        [key: string]: string | boolean
    }

    constructor(module: HTMLElement) {
        this.module = module
        this.animation = module.dataset.animation ?? 'fade-in'

        // this.module.removeAttribute('data-module')
        // this.module.removeAttribute('data-animation')
        this.animate()
    }

    animate() {
        if (this.animation) {
            setTimeout(() => {
                addClassNames(this.module, `u-animate-${this.animation}`)
            }, 200)
            // setTimeout(() => {
            //     this.module.classList.remove('u-animate-hide', `u-animate-${this.animation}`)
            // }, 400)
        }
    }
}
