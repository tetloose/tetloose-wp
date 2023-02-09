import { row, column } from './grid.html'
import { content } from './content.html'
import { GridDataProps } from './html.types'

test('Row function returns 2 columns with brakepoints and classes', () => {
    const gridData: GridDataProps = [
        {
            body: {
                classNames: 'is-awesome',
                text: 'Column 1'
            },
            brakepoint: {
                lrg: '1-third'
            }
        },
        {
            body: {
                classNames: 'is-great',
                text: 'Column 2'
            },
            brakepoint: {
                lrg: '2-third'
            }
        }
    ]

    const columns = gridData
        .map((col) => {
            const { body, brakepoint } = col

            return column(content(body && body.text ? body.text : '', body && body.classNames ? body.classNames : ''), brakepoint)
        })
        .join(' ')

    expect(row(columns)).toBe('<div class="l-row"><div class="l-row__col is-lrg-1-third"><div class="u-content is-awesome">Column 1</div></div> <div class="l-row__col is-lrg-2-third"><div class="u-content is-great">Column 2</div></div></div>')
})
