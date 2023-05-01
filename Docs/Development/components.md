# Components

Components are stored in `src/js/components`.

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

It's important to keep this file structure for each component as the naming conventions allow for easier searching and specific files get treated differently depending on their name.

PHP files will be automatically picked up, run though PHPCS linting, then moved into the theme -> `web/app/themes/tetloose-theme/components/*.php`.

## File types

### ACF Flexible Content File

Files with the prefix `components-{component-name}.php` are treated as ACF Flexible Content files, this will be picked up by the component loader `src/js/components/loaders/component-loader.php`. The loader will recursively look though `web/app/themes/tetloose-theme/components/` for any **.php** file that starts with `components-` and automatically make it available to ACF.

For more info about ACF Flexible Content check out the docs: [ACF Flexible Content](https://www.advancedcustomfields.com/resources/flexible-content/).

### Standard files

Any other **.php** will be treated as standard files, these are moved to `web/app/themes/tetloose-theme/components/` and are intended to be used as **template-parts**.

# Navigation

[TYPESCRIPT >>](ts.md)
