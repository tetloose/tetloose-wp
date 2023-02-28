import { ComponentClass } from '../../utilities'

export class Logo extends ComponentClass {
    constructor(module: HTMLElement) {
        super(module)
    }
}

export default (module: HTMLElement) => new Logo(module)
