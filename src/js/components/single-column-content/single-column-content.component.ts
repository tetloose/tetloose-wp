
import { createNode, AppendNode } from '../../utilities/node.utilities'
import styles from './single-column-content.module.scss'
import { row, column } from '../../html/grid.html'
import { content } from '../../html/content.html'
import { gridData } from './single-column-content.grid-data'
import { addClassNames } from '../../utilities/add-class-names.utilities'
import './single-column-content.styles.scss'

class SingleColumnContent {
    module: HTMLElement
    containerClasses?: string
    contentClasses?: string
    content?: string
    animation?: string
    state?: {
        [key: string]: string
    }

    constructor(module: HTMLElement) {
        this.module = module
        this.containerClasses = module.dataset.containerClasses
        this.contentClasses = module.dataset.contentClasses
        this.content = module.dataset.content
        this.animation = module.dataset.animation

        if (this.containerClasses) {
            addClassNames(this.module, this.containerClasses)
        }

        this.markup()
        this.styles()
        this.animate()
    }

    markup() {
        const columns = gridData
            .map(col => {
                const { brakepoint } = col

                return column(content(this.content ? this.content : '', this.contentClasses ? this.contentClasses : ''), brakepoint)
            })
            .join(' ')

        new AppendNode(
            this.module,
            createNode(row(columns))
        )

        this.functionality()
    }

    styles() {
        this.module.classList.add(styles.scc)
        this.module.querySelector('.js-click')?.classList.add(styles.click)
    }

    animate() {
        if (this.animation) {
            setTimeout(() => {
                addClassNames(this.module, `u-animate-${this.animation}`)
            }, 200)
        }
    }

    functionality() {
        const click = this.module.querySelector('.js-click')

        if (click) {
            click.addEventListener('click', (e: Event): void => {
                const { target } = e

                if (target instanceof HTMLElement) {
                    addClassNames(target, 'u-animate-fade-out')
                }
            })
        }
    }
}

export default (module: HTMLElement) => new SingleColumnContent(module)
