# SCSS Modules

Webpack will treat any file within `src/js/components/*` that is prefixed `*.module.scss` as a css module.



Once it's included into a component Webpack will generate a *.module.scss.d.ts file with its types. Allowing you to pass the object to a components classname with Typescript.

To use the application variables, mixins, colours, fonts and typography you must include `@import 'path-to/settings';`

```
import styles from './component.module.scss';

$HTMLElement.classList.add(styles);
```

Once this component hits the intersection it will inject the styles into the head.

[TESTING >>](testing.md)



# Components

Components are located `src/js/components`.

## Folder Structure

```
{component-name}
    components-{component-name}.php
    {component-name}-component.php
    {component-name}.component.ts
    {component-name}.module.scss
    {component-name}.styles.scss
    {component-name}.test.ts
```

It's important to keep this file structure for each component as the naming conventions allow for easier searching of project files as well as specific files get treated differently depending on their name.

PHP files will be automaticly picked up, run though PHPCS linting, then moved into the theme -> `web/app/themes/tetloose-theme/components/*.php`.

## File types

**ACF Flexible Content File**

Files with the prefix `components-{component-name}.php` are treated as ACF Flexible Content files, this will be picked up by the component loader `src/js/components/loaders/component-loader.php`. The loader will recursivly look though `web/app/themes/tetloose-theme/components/` for any **.php** file that starts with `components-` and automaticly make it avalible to ACF.

For more info about ACF Flexible Content check out the docs: [ACF Flexible Content](https://www.advancedcustomfields.com/resources/flexible-content/).

**Standard files**

Any other **.php** will be treated as standard files, these are moved to `web/app/themes/tetloose-theme/components/` and are intended to be used as **template-parts**.

# Navigation

[SCSS MODULES >>](scss-modules.md)
