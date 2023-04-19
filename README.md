# TETLOOSE WP

Tetloose WP is a custom Wordpress framework that uses [Bedrock Wordpress](https://roots.io/bedrock/).

# Local environment

Tetloose WP was built using Mac OS, it would need to be tweaked to work with Windows. You may need to drop the font generation.

This isn't a tutorial on setting up a local environment for your development machine, more of an idea of a setup that could be used.

Brew is used as a package manager to install casks, read more about [Brew](https://brew.sh/).

[Laravel Valet](https://laravel.com/docs/9.x/) is a great tool to spinning up local enviroements with nginx. Requires some config to get php@7.4 to run. Please read the docs.

## Required

- PHP 7.4.33: `brew install php@7.4`
- MYSQL 5.7: `brew install mysql@5.7`
- fontforge ttfautohint ttf2eot bat Caskroom/cask/xquartz: `brew install fontforge ttfautohint ttf2eot bat Caskroom/cask/xquartz`
- phantomjs `brew install --cask phantomjs`
- git 2.37.1^: `brew install git`
- Node 18.12.1^: `brew install nvm`
- SSH
- [Composer](https://getcomposer.org/doc/00-intro.md)
- [WP-CLI](https://wp-cli.org/)

## Optional

- nvm: `brew install nvm`
- [oh my zsh](https://ohmyz.sh/)
- [powerlevel10k](https://github.com/romkatv/powerlevel10k)
- [Valet](https://laravel.com/docs/9.x/)

## Software

- VSCode: `brew install --cask visual-studio-code`
- Sequel Ace: `sequel-ace`
- Brave Browser: `brew install --cask brave-browser`
- iTerm2: `brew install --cask iterm2`
## Core

- [Tetloose-Theme](https://github.com/tetloose/tetloose-theme) Wordpress Theme
- [Tetloose-styles](https://github.com/tetloose/tetloose-styles) SCSS starter package
- [Tetloose-ACF](https://github.com/tetloose/tetloose-ACF) Advanced custom fields Pro - scraper

## Features

- Favicon generation
- Font Generation
- Icon generation from [icomoon](https://icomoon.io/)
- Image minification
- SVG sprite generation
- PHP linting
- Modern js
- Jest
- SCSS modules
- SCSS
- WCAG AAA
- Performance optimised with dynamic Module loading

## Commands

- `yarn dev`: Development
- `yarn build`: Build project for deployment
- `yarn deploy`: see [Deployment](Docs/Development/deployment.md) docs
- `yarn add-component`: see [TYPESCRIPT](Docs/Development/ts.md) docs
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

## Docs

- [ENVIRONMENT >>](Docs/Setup/environment.md)
- [SETUP >>](Docs/Setup/setup.md)
- [SSH >>](Docs/Setup/ssh.md)
- [ENV >>](Docs/Setup/env.md)

## Development

- [IMAGES >>](Docs/Development/images.md)
- [SVG-SPRITE >>](Docs/Development/svg-sprite.md)
- [ICONS >>](Docs/Development/icons.md)
- [FONTS >>](Docs/Development/fonts.md)
- [FAVICONS >>](Docs/Development/favicons.md)
- [TS >>](Docs/Development/ts.md)
- [SCSS >>](Docs/Development/scss.md)
- [SCSS-MODULES >>](Docs/Development/scss-modules.md)
- [TESTING >>](Docs/Development/testing.md)
- [DEPLOYMENT >>](Docs/Development/deployment.md)
