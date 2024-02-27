import { expect, test, expectTypeOf } from 'vitest'
import { modules } from '@config'
import { EXPORT_NAME } from './COMPONENT_NAME.component'
import styles from './COMPONENT_NAME.module.scss'

test('SCSS Module returns an object and contains COMPONENT_NAME', (): void => {
    expect(styles).toBeTruthy()
    expect(styles).toBeTypeOf('object')
    expect(styles['COMPONENT_NAME']).toMatch(/(COMPONENT_NAME)/i)
})

test('EXPORT_NAME should exist and be a function', (): void => {
    expect(typeof EXPORT_NAME).toBe('function')
    expectTypeOf(modules.EXPORT_NAME).toBeFunction()
})

test('EXPORT_NAME should exist in modules', (): void => {
    expect(modules.EXPORT_NAME).toBeDefined()
    expect(typeof modules.EXPORT_NAME).toBe('function')
})
