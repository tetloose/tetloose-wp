/**
 * @jest-environment jsdom
 */
import { objectToString } from './object-to-string.utilities'
import { AppendNode } from './node.utilities'
import { addClassNames } from './add-class-names.utilities'

afterEach(() => {
    jest.restoreAllMocks()
})

test('Convert object key value into string used for class names returns is-key-value', () => {
    const object = {
        hello: 'world',
        class: 'name'
    }
    const string = objectToString(object)

    expect(string).toBe('is-hello-world is-class-name')
})

test('Converts string to array adds each item to HTMLElement classlist', () => {
    jest.spyOn(document.body, 'appendChild')

    const div = document.createElement('div')

    div.innerHTML = 'hello world'

    addClassNames(div, 'class-1 class-2 class-3')

    document.body.appendChild(div)

    expect(document.body.appendChild).toBeCalledWith(div)
})

test('Apends string to node', () => {
    const div = document.createElement('div')
    const element = '<div class="element"></div>'

    new AppendNode(
        div,
        element
    )

    expect(div.innerHTML).toBe(element)
})
