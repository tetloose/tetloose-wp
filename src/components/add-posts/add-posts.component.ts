import styles from './add-posts.module.scss'
import { ComponentClass } from '@utilities'

export class AddPosts extends ComponentClass {
    constructor(module: HTMLElement) {
        super(module)

        this.css(module, styles)
    }
}

export default (module: HTMLElement) => new AddPosts(module)
