export function cssModule(element: HTMLElement, styles: unknown): void {
    if (styles && element && typeof styles === 'object') {
        element.classList.add(Object.values(styles)[0])
        element.removeAttribute('data-styles')
        element
            .querySelectorAll('[data-styles]')
            .forEach(elem => elem instanceof HTMLElement &&
                Object
                    .entries(styles)
                    .forEach(([key, value]) => key === elem.dataset.styles &&
                        `${elem.classList.add(value)}`
                        // `${elem.classList.add(value)} ${elem.removeAttribute('data-styles')}`
                    ))
    }
}
