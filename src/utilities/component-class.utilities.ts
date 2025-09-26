import gsap from 'gsap'
import ScrollTrigger from 'gsap/ScrollTrigger'
import type { AnimateProps, HTMLProps, LoadingProps, StateProps } from './utilities.types'
import type { NavigationProps } from '@/components/navigation/navigation.types'

export class ComponentClass {
    module: HTMLElement
    state: {
        loading: LoadingProps
        [key: string]: StateProps;
    }

    constructor(module: HTMLElement) {
        const { dataset } = module
        const { animation, duration } = dataset

        this.module = module
        this.state = {
            loading: {
                animation: animation ?? undefined,
                duration: parseInt(duration ?? '0', 10)
            }
        }
    }

    load() {
        const { module, state } = this
        const { classList } = module
        const { loading } = state
        const { animation, duration } = loading

        module.style.opacity = ''

        setTimeout(() => {
            if (animation) classList.add(`u-load-${animation}`)

            setTimeout(() => {
                classList.forEach(className => className.includes('u-load-') && classList.remove(className))
            }, duration)
        }, duration)
    }

    updateState(key: string, value: StateProps) {
        const { state } = this

        if (state) state[key] = value
    }

    css<T>(element: HTMLElement, styles: T, loadDuration = 0) {
        if (styles && element && typeof styles === 'object') {
            const { dataset, classList } = element

            Object
                .entries(styles)
                .forEach(([key, value]) =>
                    dataset.styles?.split(' ').includes(key) &&
                    `${classList.add(value)}`)

            element.querySelectorAll('[data-styles]')
                .forEach(elem => {
                    if (elem instanceof HTMLElement) {
                        const { dataset, classList } = elem

                        Object
                            .entries(styles)
                            .forEach(([key, value]) =>
                                dataset.styles?.split(' ').includes(key) &&
                                `${classList.add(value)}`)
                    }
                })
        }

        setTimeout(() => {
            this.load()
        }, loadDuration)
    }

    navigation({
        nav,
        liClass,
        liActiveClass
    }: NavigationProps) {
        nav.querySelectorAll('li')
            .forEach(el => {
                el.removeAttribute('id')

                if (el.classList.contains('current-menu-item')) {
                    el.removeAttribute('class')
                    el.classList.add(liClass)
                    el.classList.add(liActiveClass)
                } else {
                    el.removeAttribute('class')
                    el.classList.add(liClass)
                }
            })
    }

    getNavigationFocusElements(container: Element): HTMLElement[] {
        const selector = [
            'a[href]',
            'button:not([disabled])',
            'input:not([disabled]):not([type="hidden"])',
            '[tabindex]:not([tabindex="-1"])'
        ].join(',')

        return Array.from(container.querySelectorAll<HTMLElement>(selector))
            .filter(el => el.offsetParent !== null || el.getClientRects().length > 0)
    }

    trapNavigation(menu: HTMLElement, nav: HTMLElement) {
        nav.setAttribute('tabindex', '-1')

        nav.addEventListener('keydown', (e: KeyboardEvent) => {
            if (e.key !== 'Tab' || !this.state.navOpen) return

            const focusElements = this.getNavigationFocusElements(nav)
            if (focusElements.length === 0) {
                e.preventDefault()
                menu.focus()

                return
            }

            const first = focusElements[0]
            const last = focusElements[focusElements.length - 1]
            const active = document.activeElement as HTMLProps

            if (!e.shiftKey && active === last) {
                e.preventDefault()
                menu.focus()

                return
            }

            if (e.shiftKey && active === first) {
                e.preventDefault()
                menu.focus()

                return
            }
        })
    }

    animate({
        target,
        fromVars,
        toVars
    }: AnimateProps) {
        gsap.registerPlugin(ScrollTrigger)
        gsap.fromTo(target, fromVars, toVars)
    }
}
