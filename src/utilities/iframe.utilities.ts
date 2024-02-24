export const iframe = document.querySelectorAll('.js-iframe') as NodeListOf<HTMLElement> | null

export function loadIframe(target: HTMLElement, options?: DOMStringMap): void {
    if (target && options) {
        target.innerHTML += `
            <iframe
                class="u-media__iframe u-animate-hide"
                ${options.src && `src="${options.src}"`}
                ${options.rest ? options.rest : ''}
            </iframe>
        `

        const frame = target.querySelector('iframe')

        if (frame) {
            setTimeout(() => {
                frame.classList.add(options.animation ? `u-animate-${options.animation}` : 'u-animate-fade-in')
            }, options.duration ? parseInt(options.duration) : 200)

            setTimeout(() => {
                frame.classList.remove(options.animation ? `u-animate-${options.animation}` : 'u-animate-fade-in', 'u-animate-hide')
            }, options.duration ? parseInt(options.duration) * 2 : 400)
        }
    }
}
