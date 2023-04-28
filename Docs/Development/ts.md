# Typescript

Entry `src/app.ts`

This will load in components, figures, iframes, videoIframes and the intersection observer.

# Observer

`src/config/observer`

This will observe the document, if a component, figure, iframe or videoIframe hits the intersection it will load it.

## Components

Component sit in `src/js/components`.

### PHP Component

- components-{component-name}.php
- {component-name}-component.php

These components require a few attributes

- `data-module="ComponentName"` (optional)
- `data-animation="animation-name"` (optional)
- `data-styles="scss-module-class-name"` (optional)
- `class="class-names"` (optional)

To add custom animations see: `src/scss/utils/animate.scss`.

### TS Component

`{component-name}.component.ts`

This is a Class with the same name as data-module, e.g. `ComponentName`

```
import styles from './component-name.module.scss'
import { ComponentClass } from '../../utilities'

export class ComponentName extends ComponentClass {
    constructor(module: HTMLElement) {
        super(module)
        this.state = {
            position: 0
        }
        this.cssModule(this.module, styles)

        this.myCustomFunction()
    }

    myCustomFunction(): void {
        console.log('my custom function')
    }
}

export default (module: HTMLElement) => new ComponentName(module)
```

See `src/js/utilities/component-class.utilities.ts` for the extended Class.

We need to now tell Webpack that we want to create a dynamic module for this component.

add a new key value to `src/js/config/modules.ts` object.

```
export const modules = {
    ComponentName: () => import(/* webpackChunkName: "component-name" */ '../components/component-name/component-name.component')
}
```

### SCSS Module (optional)

`{component-name}.module.scss`

Import this file into `component-name.component.ts`: `import styles from './component-name.module.scss'`

Reference the styles in the Class Constructor:

```
    constructor(module: HTMLElement) {
        this.cssModule(this.module, styles)
    }
```

Reference the style names in your markup `data-styles="class-name"`, add **.class-name {background-color: hotpink}** to `./component-name.module.scss`.

The cssModule function will loop though and apply the css module class's to any element with this data-attribute.

Webpack will auto generate a TypeScript Definition file for each class name added. `component-name.module.scss.d.ts`.

To use the application variables, mixins, colours, fonts and typography you must include `@import 'path-to/settings';` within `component-name.module.scss`.

### SCSS (optional)

`{component-name}.styles.scss`

For none css modules just include a style sheet in your ts file, it will load these styles. The nameing convention needs to be `{component-name}.styles.scss`, this will tell Webpack to treat this file differently from a CSS Module.

### Tests

`{component-name}.test.ts`

Jest is set up for testing, the nameing convention is `{component-name}.test.ts`. See [Jest Docs >>](https://jestjs.io/docs/getting-started).

[Utilities >>](utilities.md)
