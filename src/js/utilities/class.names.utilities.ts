import { ClassNamesProps } from './utilities.types'

export function classNames(obj: ClassNamesProps): string {
    return Object.entries(obj)
        .map(([key, value]) => key && value && `is-${key}-${value}`)
        .filter(value => value)
        .join(' ')
}
