export class ComponentClass {
    module: HTMLElement
    animation: string
    state?: {
        [key: string]: string | boolean | HTMLElement
    }

    constructor(module: HTMLElement) {
        this.module = module
        this.animation = module.dataset.animation ?? 'fade-in'

        this.animate()
    }

    animate() {
        if (this.animation) {
            this.module.classList.add('u-animate-hide')

            setTimeout(() => {
                this.module.classList.add(`u-animate-${this.animation}`)
            }, 200)

            setTimeout(() => {
                this.module.classList.remove('u-animate-hide', `u-animate-${this.animation}`)
                // this.cleanUp()
            }, 400)
        }
    }

    updateState(key: string, value: string | boolean) {
        if (this.state) {
            this.state[key] = value
        }
    }

    subNav(subNav: Element, subNavitem: string, subNavActive: string) {
        subNav && subNavitem && subNavActive &&
            subNav.querySelectorAll('li')
                .forEach(elem => {
                    elem.removeAttribute('id')

                    if (elem.classList.contains('current-menu-item')) {
                        elem.removeAttribute('class')
                        elem.classList.add(subNavitem)
                        elem.classList.add(subNavActive)
                    } else {
                        elem.removeAttribute('class')
                        elem.classList.add(subNavitem)
                    }
                })
    }

    cssModule(element: HTMLElement, styles: unknown) {
        if (styles && element && typeof styles === 'object') {
            Object
                .entries(styles)
                .forEach(([key, value]) => element.dataset.styles?.split(' ').includes(key) &&
                    `${element.classList.add(value)}`
                )

            element.querySelectorAll('[data-styles]')
                .forEach(elem => {
                    if (elem instanceof HTMLElement) {
                        Object
                            .entries(styles)
                            .forEach(([key, value]) => elem.dataset.styles?.split(' ').includes(key) &&
                                `${elem.classList.add(value)}`
                            )
                    }
                })
        }
    }

    cleanUp() {
        this.module.removeAttribute('data-styles')
        this.module.querySelectorAll('[data-styles]')
            .forEach(attr => attr.removeAttribute('data-styles'))

        this.module.removeAttribute('data-animation')
        this.module.removeAttribute('data-module')
    }
}
