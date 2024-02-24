import { ComponentClass, AppendNode } from '@utilities'
import { iframeElement } from '@elements'

export class Iframe extends ComponentClass {
    constructor(module: HTMLElement) {
        super(module)

        this.setState()
    }

    setState() {
        const { module } = this
        const { dataset } = module
        const { element } = dataset

        this.updateState('element', element ? element.toString() : '')
        this.createIframe()
    }

    createIframe() {
        const { module, state } = this
        const { element, loading } = state
        const { duration } = loading

        if (element) {
            const srcMatch = (element as string).match(/src="([^"]*)"/)
            const restMatch = (element as string).match(/src="[^"]*"(.*?)(?<=allowfullscreen)(?<!>)>/)
            const iframe = iframeElement({
                src: srcMatch ? srcMatch[1] : '',
                rest: restMatch ? restMatch[1] : ''
            })

            if (iframe) {
                new AppendNode(
                    module,
                    iframe
                )

                setTimeout(() => {
                    module.classList.add('has-loaded')
                }, duration * 2)
            }
        }
    }
}

export default (module: HTMLElement) => new Iframe(module)
