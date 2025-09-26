import type { ImageProps } from '@elements'

export function imageElement(options: ImageProps): HTMLImageElement {
    const {
        alt,
        sml,
        med,
        lrg,
        xlrg,
        xxlrg
    } = options
    const image = new Image()

    image.classList.add('u-figure__img', 'is-loading')
    image.setAttribute('alt', alt ? alt : '')
    image.setAttribute(
        'srcset',
        `
            ${xxlrg ? `${xxlrg} 1520w,` : ''}
            ${xlrg ? `${xlrg} 1280w,` : ''}
            ${lrg ? `${lrg} 1024w,` : ''}
            ${med ? `${med} 768w,` : ''}
            ${sml ? `${sml} 320w` : ''}
        `
    )

    if (sml) image.src = sml

    return image
}
