import { loadComponent, loadIframe, loadVideoIframe } from '@utilities'

export const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
        const { target } = entry

        if (target instanceof HTMLElement && entry.isIntersecting) {
            const { dataset, classList } = target

            if (dataset.module) loadComponent(target, dataset.module)
            if (classList.contains('js-iframe')) loadIframe(target, dataset)
            if (classList.contains('js-videoIframe')) loadVideoIframe(target, dataset)

            observer.unobserve(target)
        }
    })
}, {
    root: null,
    rootMargin: '300px 0px',
    threshold: 0.01
})
