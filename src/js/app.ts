// import './components/test/test.component'
// import { sayHello } from './components/log/log.component'
// import { sayGoodbye } from './components/test/test.component'

// function showHello(elem: string, name: string): void {
//     const el = document.querySelector(elem)
//     if (el) {
//         el.innerHTML = `${sayHello(name)} ${sayGoodbye(name)}`
//     }
// }

// showHello('.content', 'TypeScript')

const getTestComponent = () => import(/* webpackChunkName: "test.component" */ './components/test/test.component')
// import './components/log/log.component'
// import './components/test/test.component'

const btn = document.querySelector('.js-btn')

btn?.addEventListener('click', () => {
    getTestComponent().then(({ clickBtn }) => {
        alert(clickBtn('12'))
    }).catch((err) => {
        alert(err)
    })
})
