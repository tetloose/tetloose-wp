import { GridBrakePointProps } from './grid.types'
import { classNames } from '../utilities/class.names.utilities'

export function row(content: string): string {
    return `
        <div class="l-row">
            ${content}
        </div>
    `
}

export function col(content: string, brakepoints: GridBrakePointProps): string {
    return `
        <div class="l-row__col ${brakepoints && classNames(brakepoints)}">
            ${content}
        </div>
    `
}
