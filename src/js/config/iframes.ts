export const iframes = document.querySelectorAll('.js-iframe') as NodeListOf<HTMLElement> | null

export function loadIframe(target: HTMLElement, options?: DOMStringMap): void {
    if (target && options) {
        target.innerHTML += `
            <iframe
                class="u-media__iframe u-animate-hide"
                ${options.src && `src="${options.src}"`}
                ${options.rest ? options.rest : ''}
            </iframe>
        `

        setTimeout(() => {
            target.querySelector('iframe')?.classList.add(options.animation ? `u-animate-${options.animation}` : 'u-animate-fade-in')
        }, options.duration ? parseInt(options.duration) : 200)
    }
}

// <div
//     class="u-media ratio-16x9 js-iframe u-skeleton-media"
//     data-src="https://www.youtube.com/embed/j6JppVyKE-k?autoplay=1&mute=1"
//     data-rest="title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen">
// </div>
