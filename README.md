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

## Docs

- [ENVIRONMENT >>](Docs/Setup/environment.md)
- [SETUP >>](Docs/Setup/setup.md)
- [SSH >>](Docs/Setup/ssh.md)
- [ENV >>](Docs/Setup/env.md)
- [COMMANDS >>](Docs/Setup/commands.md)

## Development

- [WEBPACK CHUNKS >>](Docs/Development/webpack-chunks.md)
- [COMPONENTS >>](Docs/Development/components.md)
- [TYPESCRIPT >>](Docs/Development/TypeScript.md)
- [SCSS-MODULES >>](Docs/Development/scss-modules.md)
- [SCSS >>](Docs/Development/scss.md)
- [TESTING >>](Docs/Development/testing.md)
- [UTILITIES >>](Docs/Development/utilities.md)
- [ICONS >>](Docs/Development/icons.md)
- [FAVICONS >>](Docs/Development/favicons.md)

## Scripts

- [DEPLOY >>](Docs/Scripts/deploy.md)
- [DATABASE >>](Docs/Scripts/database.md)
- [UPLOADS >>](Docs/Scripts/uploads.md)
- [CLONING >>](Docs/Scripts/cloning.md)
- [BACKUP >>](Docs/Scripts/backup.md)
- [PACKAGE >>](Docs/Scripts/package.md)
- [PATTERN-LIBRARY >>](Docs/Scripts/pattern-library.md)

## Wordpress

- [FIRST LOAD >>](Docs/Wordpress/first-load.md)
- [THEME >>](Docs/Wordpress/theme.md)
- [STATIC CONTENT >>](Docs/Wordpress/static-content.md)
- [NEWS LANDING >>](Docs/Wordpress/news-landing.md)
- [SHARED FIELDS >>](Docs/Wordpress/shared-fields.md)
- [PAGE BUILDER >>](Docs/Wordpress/page-builder.md)
- [COMPONENTS >>](Docs/Wordpress/components.md)
- [ACF >>](Docs/Wordpress/acf.md)
