# Tetloose-WP

Tetloose WP is a custom Wordpress framework that uses [Bedrock Wordpress](https://roots.io/bedrock/).

## Recommended VSCode Extensions

`cmd shift p` then type recommended.

The sidebar will open with a list of recommended extensions to be installed.

'Workspaces' is a great plugin that allows you to show hide files.

See [Workspaces](https://marketplace.visualstudio.com/items?itemName=Fooxly.workspace) docs.

## Core

- [Tetloose-Pattern-Library](https://github.com/tetloose/tetloose-wp-pattern-library) Wordpress Pattern Library
- [Tetloose-Theme](https://github.com/tetloose/tetloose-theme) Wordpress Theme
- [Tetloose-Styles](https://github.com/tetloose/tetloose-styles) SCSS starter package
- [Tetloose-ACF](https://github.com/tetloose/tetloose-ACF) Advanced custom fields Pro - scraper

## Features

- Favicon generation
- Icon generation from [icomoon](https://icomoon.io/)
- PHP linting
- Modern js
- Jest
- SCSS modules
- SCSS
- WCAG AAA
- Performance optimized with dynamic Module loading

## Issues

There is a rare issue that happens randomly with PHPCS linting while running `yarn dev`, the linting function lags out and everything freezes while it waits for PHPCS lint to return.

If this happens, cancel `yarn dev` then run `yarn serve`. This will bypass the php function, as `yarn dev` has already populated the project with components and assets, we just need to serve it.

## WIKI

- [WIKI DOCS >>](https://github.com/tetloose/tetloose-wp/wiki)
