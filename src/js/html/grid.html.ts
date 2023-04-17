import { BrakePointProps } from './html.types'
import { objectToString } from '../utilities'

export function row(content: string): string {
    return `<div class="l-row">${content}</div>`
}

export function column(content: string, brakepoints: BrakePointProps, classes: string): string {
    return `<div class="l-row__col ${brakepoints && objectToString(brakepoints)} ${classes && classes}">${content}</div>`
}
