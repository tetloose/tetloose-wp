export const figures = document.querySelectorAll('.js-figure') as NodeListOf<HTMLElement> | null

export function loadFigure(target: HTMLElement, options?: DOMStringMap): void {
    if (target && options) {
        const img = new Image()

        img.setAttribute('class', `u-figure__img u-animate-hide ${options.size ? `is-${options.size}` : 'is-cover'}`)
        img.setAttribute('alt', options.alt ? options.alt : '')
        img.setAttribute('src', options.src ? options.src : '')
        img.setAttribute('srcset', options.srcset ? options.srcset : '')

        target.classList.remove('js-figure')
        target.removeAttribute('width')
        target.removeAttribute('height')
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

                setTimeout(() => {
                    image.classList.add(options.animation ? `u-animate-${options.animation}` : 'u-animate-fade-in')
                }, options.duration ? parseInt(options.duration) : 200)

                setTimeout(() => {
                    image.classList.remove(options.animation ? `u-animate-${options.animation}` : 'u-animate-fade-in', 'u-animate-hide')
                }, options.duration ? parseInt(options.duration) * 2 : 400)
            }
        }

    }
}

// <figure
//     class="u-figure js-figure u-skeleton-figure"
//     data-animation="fade-in"
//     data-duration="200"
//     data-alt="This is alt text"
//     data-src="https://picsum.photos/400/500"
//     data-srcset="https://picsum.photos/700/800 1440w, https://picsum.photos/600/700 1024w, https://picsum.photos/500/600 960w, https://picsum.photos/400/500 480w"
//     data-size="cover"
//     data-rest="title='hello this is a sweet title' awesome='this is a random other thing'"
// ></figure>
