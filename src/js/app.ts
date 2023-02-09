import { components } from './config/components'
import { figures } from './config/figures'
import { iframes } from './config/iframes'
import { observer } from './config/observer'

components?.forEach((component) => {
    observer.observe(component)
})

figures?.forEach((figure) => {
    observer.observe(figure)
})

iframes?.forEach((iframe) => {
    observer.observe(iframe)
})

// class SingleColumnContent {
//     module: HTMLElement
//     containerClasses?: string
//     contentClasses?: string
//     content?: string
//     animation?: string
//     state?: {
//         [key: string]: string
//     }

//     constructor(module: HTMLElement) {
//         this.module = module
//         this.containerClasses = module.dataset.containerClasses
//         this.contentClasses = module.dataset.contentClasses
//         this.content = module.dataset.content
//         this.animation = module.dataset.animation
//     }
// }

// const div = document.createElement('div')
// div.setAttribute('data-container-classes', 'container-1 container-2 container-3')
// div.setAttribute('data-content-classes', 'content-1 content-2 content-3')
// div.setAttribute('data-content', '<p>Hello world</p>')
// div.setAttribute('data-animation', 'fade-in')

// const app = new SingleColumnContent(div)

// console.log(app)

// document.body.appendChild(div)

// console.log(app.module)
