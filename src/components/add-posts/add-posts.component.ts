import styles from './add-posts.module.scss'
import excerptStyles from './add-posts-excerpt.module.scss'
import paginationStyles from './add-posts-pagination.module.scss'
import { ComponentClass } from '@utilities'

export class AddPosts extends ComponentClass {
    constructor(module: HTMLElement) {
        super(module)

        this.css(module, styles)
        this.css(module, excerptStyles)
        this.css(module, paginationStyles)
    }
}

export default (module: HTMLElement) => new AddPosts(module)
