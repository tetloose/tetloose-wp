import { BrakePointProps } from './html.types'
import { objectToString } from '../utilities/object-to-string.utilities'

export function row(content: string): string {
    return `<div class="l-row">${content}</div>`
}

export function column(content: string, brakepoints: BrakePointProps): string {
    return `<div class="l-row__col ${brakepoints && objectToString(brakepoints)}">${content}</div>`
}
