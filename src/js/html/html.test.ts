import { row, column, content } from '.'
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
            },
            classNames: 'col-1'
        },
        {
            body: {
                classNames: 'is-great',
                text: 'Column 2'
            },
            brakepoint: {
                lrg: '2-third'
            },
            classNames: 'col-2'
        }
    ]

    const columns = gridData
        .map((col) => {
            const { body, brakepoint, classNames } = col

            return column(
                content(
                    body && body.text ? body.text : '',
                    body && body.classNames ? body.classNames : ''
                ),
                brakepoint,
                classNames ? classNames : ''
            )
        })
        .join(' ')

    expect(row(columns)).toBe('<div class="l-row"><div class="l-row__col is-lrg-1-third col-1"><div class="u-content is-awesome">Column 1</div></div> <div class="l-row__col is-lrg-2-third col-2"><div class="u-content is-great">Column 2</div></div></div>')
})
