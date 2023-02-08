export const figures = document.querySelectorAll('.js-figure') as NodeListOf<HTMLElement> | null

export function loadFigure(target: HTMLElement, options?: DOMStringMap): void {
    if (target && options) {
        target.innerHTML += `
            <img
                class="u-figure__img u-animate-hide ${options.size && `is-${options.size}`}"
                alt="${options.alt ? options.alt : ''}"
                src="${options.src && options.src}"
                ${options.srcset && `srcset="${options.srcset}"`}
                ${options.rest ? options.rest : ''}
            />
        `

        setTimeout(() => {
            target.querySelector('img')?.classList.add(options.animation ? `u-animate-${options.animation}` : 'u-animate-fade-in')
        }, options.duration ? parseInt(options.duration) : 200)
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
