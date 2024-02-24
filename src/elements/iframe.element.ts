import { iframeProps } from './element.types'

export function iframeElement({
    src,
    rest
}: iframeProps): string {
    return `
        <iframe
            class="u-media__iframe"
            src="${src}"
            ${rest ? rest : ''}>
        </iframe>
    `
}
