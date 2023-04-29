# SCSS

Project styles, these styles are loaded everywhere, they are cached via a hash, this means they will only be downloaded if the file changes. The aim is to only provide what we need when we need it.

## Project styles

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

SCSS Modules will rely on this import if you want to use the project settings.

### Reset

Custom reset, so everything is a baseline.

### Utils

A collection of custom utilities to handle a variaty of different re usuable elements.

### Global

For styling the html/body tag.

### Layout

Custom Grid layout, based on halfs, thirds, and forths.

## Print

A print style sheet, for print styles, save to PDF etc.

## Tinymce

Styles for Wordpress editor.

## Wordpress

Styles for Wordpress login.

## Navigation

[<< BACK TO TYPESCRIPT](ts.md)
