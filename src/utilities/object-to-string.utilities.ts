import type { ObjectToStringProps } from './utilities.types'

export function objectToString(classes: ObjectToStringProps): string {
    return Object.entries(classes)
        .map(([key, value]) => key && value && `is-${key}-${value}`)
        .filter(value => value)
        .join(' ')
}
