# SCSS Modules

Webpack will treat any file within `src/js/components/*` that is prefixed `*.module.scss` as a css module.

Once it's included into a component Webpack will generate a *.module.scss.d.ts file with its types. Allowing you to pass the object to a components classname with Typescript.

To use the application variables, mixins, colours, fonts and typography you must include `@import 'path-to/settings';`

```
import styles from './component.module.scss';

$HTMLElement.classList.add(styles.className);
```

Once this component hits the intersection it will inject the styles into the head.

[<< BACK TO TYPESCRIPT](ts.md)
