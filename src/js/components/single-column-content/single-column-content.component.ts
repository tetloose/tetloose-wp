
import { createNode, AppendNode } from '../../utilities/node.utilities'
import styles from './single-column-content.module.scss'
import { row, column } from '../../html/grid.html'
import { content } from '../../html/content.html'
import { gridData } from './single-column-content.grid-data'
import { addClassNames } from '../../utilities/add-class-names.utilities'

class SingleColumnContent {
    module: HTMLElement
    containerClasses?: string
    contentClasses?: string
    content?: string
    state?: {
        [key: string]: string
    }

    constructor(module: HTMLElement) {
        this.module = module
        this.containerClasses = module.dataset.containerClasses
        this.contentClasses = module.dataset.contentClasses
        this.content = module.dataset.content
        this.state = {
            noContent: '<h1>No Content Found</h1>'
        }

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
            createNode(row(columns))
        )
    }

    styles() {
        this.module.classList.add(styles.scc)
    }
}

export default (module: HTMLElement) => new SingleColumnContent(module)
