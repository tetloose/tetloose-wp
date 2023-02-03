export function createModule(module: string): string {
    return module
}

export class AppendModule {
    module: HTMLElement
    element: string

    constructor(module: HTMLElement, element: string) {
        this.module = module
        this.element = element

        this.init()
    }

    init(): void {
        this.module.innerHTML += this.element
    }
}
