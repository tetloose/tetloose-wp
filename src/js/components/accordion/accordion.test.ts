/**
 * @jest-environment jsdom
 */

export class SingleColumnContent {
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
    }
}

test('Test SingleColumnContent constructor', () => {
    const div = document.createElement('div')

    div.setAttribute('data-container-classes', 'container-1 container-2 container-3')
    div.setAttribute('data-content-classes', 'content-1 content-2 content-3')
    div.setAttribute('data-content', '<p>Hello world</p>')
    div.setAttribute('data-animation', 'fade-in')

    const app = new SingleColumnContent(div)

    const { containerClasses, contentClasses, content, animation } = app

    expect(containerClasses).toBe('container-1 container-2 container-3')
    expect(contentClasses).toBe('content-1 content-2 content-3')
    expect(content).toBe('<p>Hello world</p>')
    expect(animation).toBe('fade-in')
})
