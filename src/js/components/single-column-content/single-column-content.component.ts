
import { createModule, AppendModule } from '../../utilities/css-modules.utilities'
import styles from './single-column-content.module.scss'
import { row, col } from '../../html/grid.html'
import { data } from './single-column-content.data'

class SingleColumnContent {
    module: HTMLElement
    modifyers?: string
    content?: string
    type?: string
    state: {
        [key: string]: string
    }

    constructor(module: HTMLElement) {
        this.module = module
        this.modifyers = module.dataset.modifyers
        this.content = module.dataset.content
        this.type = module.dataset.type
        this.state = {
            initial: 'Css modules',
            clicked: ' is some sweet jazz'
        }

        if (this.modifyers) {
            this.modifyers.split(' ')
                .forEach(name => name && this.module.classList.add(name))
        }

        this.styles()
        this.markup()
    }

    styles() {
        this.module.classList.add(styles.scc)
    }

    markup() {
        let columns = ''

        data.map(item => {
            const { brakepoint } = item
            const { content } = this

            columns += col(content ? content : '', brakepoint)
        })

        new AppendModule(
            this.module,
            createModule(row(columns))
        )
    }
}

export default (module: HTMLElement) => new SingleColumnContent(module)
