# SCSS

Application styles, these styles are loaded everywhere, they are cached via a hash, this means they will only be downloaded if the file changes. The aim is to only provide what we need when we need it.

## Application styles

- Global
- Layout
- Mixins
- Reset
- Settings
- Utilities

Entry point `src/scss/app.scss`

This imports

```
@import 'reset';
@import 'settings';
@import 'utils';
@import 'global';
@import 'layout';
```

The only requirement here is `@import 'settings';`, this will import variables, mixins, colours, fonts and typography.

CSS Modules will rely on this import if you want to use the application settings.

### Reset

Custom reset, so everything is a baseline.

### Utils

A collection of custom utilities to handle a variaty of different re usuable elements.

### Global

For styling the html tag + the selection sudo.

### Layout

Custom Grid layout, based on halfs, thirds, and forths.

## Print

A print style sheet, for print styles, save to PDF.

## Tinymce

Styles for Wordpress editor.

## Navigation

[SCSS MODULES >>](scss-modules.md)
