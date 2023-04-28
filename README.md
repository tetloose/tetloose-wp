# TETLOOSE WP

Tetloose WP is a custom Wordpress framework that uses [Bedrock Wordpress](https://roots.io/bedrock/).

- `yarn dev`: Development
- `yarn build`: Build project for deployment
- `yarn deploy`: see [Deployment](Docs/Development/deployment.md) docs
- `yarn add-component`: see [TypeScript](Docs/Development/ts.md) docs
- `yarn favicons`: see [Favicons](Docs/Development/ts.md) docs
- `yarn git:commit`: Commits all files within your branch, promps for commit message
- `yarn uploads:push`: Push uploads to an environment
- `yarn uploads:pull`: Pull uploads from an environment to local
- `yarn db:push`: Push database to an environment
- `yarn db:pull`: Pull database from an environment to local
- `yarn clone:from`: Pull uploads and database from an environment to local
- `yarn clone:to`: Push uploads and database from local to an environment
- `yarn package`: Create a zip package, Uploads, Plugins, MU-Plugins, Theme and database
- `yarn backup`: Create a backup zip of entire project
- `yarn plugins`: Composer require Wordpress Plugin
- `yarn test`: Run Jests
- `yarn update-snapshot`: Update Jests **snapshots**

## Core

- [Tetloose-Pattern-Library](https://github.com/tetloose/tetloose-wp-pattern-library) Wordpress Pattern Library
- [Tetloose-Theme](https://github.com/tetloose/tetloose-theme) Wordpress Theme
- [Tetloose-styles](https://github.com/tetloose/tetloose-styles) SCSS starter package
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
- Performance optimised with dynamic Module loading

## Docs

- [ENVIRONMENT >>](Docs/Setup/environment.md)
- [SETUP >>](Docs/Setup/setup.md)
- [SSH >>](Docs/Setup/ssh.md)
- [ENV >>](Docs/Setup/env.md)
- [COMMANDS >>](Docs/Setup/commands.md)

## Development

- [ICONS >>](Docs/Development/icons.md)
- [FONTS >>](Docs/Development/fonts.md)
- [FAVICONS >>](Docs/Development/favicons.md)
- [TS >>](Docs/Development/ts.md)
- [SCSS >>](Docs/Development/scss.md)
- [SCSS-MODULES >>](Docs/Development/scss-modules.md)
- [TESTING >>](Docs/Development/testing.md)
- [DEPLOYMENT >>](Docs/Development/deployment.md)
