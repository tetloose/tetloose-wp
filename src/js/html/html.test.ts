import { row } from './row.html'
import { content } from './content.html'

test('Row function returns a string', () => {
    expect(typeof row('Content')).toBe('string')
})

test('Content function returns a string', () => {
    expect(typeof content('this is content', '')).toBe('string')
})
