export const figures = document.querySelectorAll('.js-figure') as NodeListOf<HTMLElement> | null

export function loadFigure(target: HTMLElement, options?: DOMStringMap): void {
    if (target && options) {
        const img = new Image()

        img.setAttribute('class', 'u-figure__img u-animate-hide')
        img.setAttribute('alt', options.alt ? options.alt : '')
        img.setAttribute('src', options.src ? options.src : '')
        img.setAttribute('srcset', options.srcset ? options.srcset : '')

        target.classList.remove('js-figure')
        target.removeAttribute('data-animation')
        target.removeAttribute('data-duration')
        target.removeAttribute('data-alt')
        target.removeAttribute('data-src')
        target.removeAttribute('data-srcset')

        target.appendChild(img)

        img.onload = () => {
            const image = target.querySelector('img')

            if (image) {
                target.classList.remove('u-skeleton-figure')

                image.classList.add(options.animation ? `u-animate-${options.animation}` : 'u-animate-fade-in')

                setTimeout(() => {
                    image.classList.remove(options.animation ? `u-animate-${options.animation}` : 'u-animate-fade-in', 'u-animate-hide')
                }, options.duration ? parseInt(options.duration) * 2 : 200)
            }
        }

    }
}
