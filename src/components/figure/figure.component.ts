import { ComponentClass } from '@utilities'
import { imageElement } from '@elements'

export class Figure extends ComponentClass {
    constructor(module: HTMLElement) {
        super(module)

        this.createFigure()
    }

    createFigure() {
        const { module, state } = this
        const { duration } = state.loading
        const {
            imageAlt,
            imageSml,
            imageMed,
            imageLrg,
            imageXlrg,
            imageXxlrg
        } = module.dataset
        const imageData = {
            alt: imageAlt ? imageAlt : '',
            sml: imageSml ? imageSml : '',
            med: imageMed ? imageMed : '',
            lrg: imageLrg ? imageLrg : '',
            xlrg: imageXlrg ? imageXlrg : '',
            xxlrg: imageXxlrg ? imageXxlrg : ''
        }
        const placeholder = module.querySelector('[data-placeholder]') as HTMLImageElement
        const image = imageElement(imageData)

        image.onload = () => {
            module.appendChild(image)

            this.load()

            setTimeout(() => {
                if (placeholder) placeholder.remove()
                image.classList.remove('is-loading')
            }, duration)
        }
    }
}

export default (module: HTMLElement) => new Figure(module)
