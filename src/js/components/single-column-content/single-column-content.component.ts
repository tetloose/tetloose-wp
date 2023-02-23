
import styles from './single-column-content.module.scss'
import { gridData } from './single-column-content.grid-data'
import { ComponentClass, cssModule, addClassNames, AppendNode } from '../../utilities/'
import { row, column, content } from '../../html'

export class SingleColumnContent extends ComponentClass {
    containerClasses?: string
    contentClasses?: string
    content?: string
    state?: {
        [key: string]: string
    }

    constructor(module: HTMLElement) {
        super(module)
        this.containerClasses = module.dataset.containerClasses
        this.contentClasses = module.dataset.contentClasses
        this.content = module.dataset.content

        if (this.containerClasses) {
            addClassNames(this.module, this.containerClasses)
        }

        this.markup()
        this.styles()
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
            row(columns)
        )

        this.functionality()
    }

    styles() {
        cssModule(this.module, styles)

        this.module.querySelector('.js-click')?.classList.add(styles.click)
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
