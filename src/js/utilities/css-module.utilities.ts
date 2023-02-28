export function cssModule(element: HTMLElement, styles: unknown): void {
    if (styles && element && typeof styles === 'object') {
        Object
            .entries(styles)
            .forEach(([key, value]) => element.dataset.styles?.split(' ').includes(key) &&
                `${element.classList.add(value)}`
                // ${element.classList.add(value)} ${element.removeAttribute('data-styles')}
            )

        element.querySelectorAll('[data-styles]')
            .forEach(elem => {
                if (elem instanceof HTMLElement) {
                    Object
                        .entries(styles)
                        .forEach(([key, value]) => elem.dataset.styles?.split(' ').includes(key) &&
                            `${elem.classList.add(value)}`
                            // ${elem.classList.add(value)} ${elem.removeAttribute('data-styles')}
                        )
                }
            })
    }
}
