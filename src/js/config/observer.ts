import { loadComponent } from './components'

export const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
        const { target } = entry

        if (target instanceof HTMLElement && entry.isIntersecting) {
            const { dataset } = target
            const { module } = dataset

            if (module && module) loadComponent(target, module)
            observer.unobserve(target)
        }
    })
}, {
    root: null,
    rootMargin: '100px 0px',
    threshold: 0.1
})
