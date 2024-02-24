import styles from './figure.module.scss'
import { ComponentClass } from '@utilities'
import { imageElement } from '@elements'

export class Figure extends ComponentClass {
    constructor(module: HTMLElement) {
        super(module)

        this.createFigure()
    }

    createFigure() {
        const { module } = this
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
        const image = imageElement(imageData)

        image.onload = () => {
            module.appendChild(image)

            this.css(module, styles)
        }
    }
}

export default (module: HTMLElement) => new Figure(module)
