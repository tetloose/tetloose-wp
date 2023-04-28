export const videoIframes = document.querySelectorAll('.js-videoIframe') as NodeListOf<HTMLElement> | null

export function loadVideoIframe(target: HTMLElement, options?: DOMStringMap): void {

    if (target && options) {
        target.innerHTML += `
            <div class="u-media ${options.size && options.size} u-animate-hide">
                ${options.video?.toString().replace('<p>', '').replace('</p>', '')}
            </div>
        `

        target.querySelector('iframe')?.classList.add('u-media__iframe')

        const videoIframe = target.querySelector('.u-media')

        setTimeout(() => {
            videoIframe?.classList.add(options.animation ? `u-animate-${options.animation}` : 'u-animate-fade-in')
        }, options.duration ? parseInt(options.duration) : 200)

        setTimeout(() => {
            videoIframe?.classList.remove(options.animation ? `u-animate-${options.animation}` : 'u-animate-fade-in', 'u-animate-hide')
        }, options.duration ? parseInt(options.duration) * 2 : 400)
    }
}
