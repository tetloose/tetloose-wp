import { BreakPointProps } from './html.types'
import { objectToString } from '../utilities'

export function column(content: string, breakPoint: BreakPointProps, classes: string): string {
    return `<div class="l-row__col ${breakPoint && objectToString(breakPoint)} ${classes && classes}">${content}</div>`
}
