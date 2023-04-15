import { loadComponent } from './components'
import { loadFigure } from './figures'
import { loadIframe } from './iframes'
import { loadVideoIframe } from './video-iframes'

export const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
        const { target } = entry

        if (target instanceof HTMLElement && entry.isIntersecting) {
            const { dataset, classList } = target

            if (classList.contains('js-figure')) loadFigure(target, dataset)
            if (classList.contains('js-iframe')) loadIframe(target, dataset)
            if (classList.contains('js-videoIframe')) loadVideoIframe(target, dataset)
            if (dataset.module) loadComponent(target, dataset.module)
            observer.unobserve(target)
        }
    })
}, {
    root: null,
    rootMargin: '100px 0px',
    threshold: 0
})
