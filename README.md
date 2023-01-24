# [Bedrock](https://roots.io/bedrock/)

[![Packagist](https://img.shields.io/packagist/v/roots/bedrock.svg?style=flat-square)](https://packagist.org/packages/roots/bedrock)
[![Build Status](https://img.shields.io/travis/roots/bedrock.svg?style=flat-square)](https://travis-ci.org/roots/bedrock)

#Bedrock Wordpress & custom theme w/ Gulp, SCSS, JS, Font Generation, SVG and @X2 PNG sprite, Browser Sync.

### https://roots.io/bedrock/

## Setup

1. Install Node if not installed
2. Install Caskroom/cask/xquartz - `brew install Caskroom/cask/xquartz`
3. Install fontforge ttfautohint ttf2eot bat - `brew install fontforge ttfautohint ttf2eot bat`
4. Set up a vhost i.e. - `wp.localdev`
5. Create New Database
6. Copy .env.example to .env and update environment variables in `.env`
7. Add vHost to - `gulpfile.js line 106`
8. Run `npm update && npm install && composer install` - in the root of the project
9. Open `wp.localdev` and install WP
10. Run `gulp` - in the root of the project

## Add to SVG to allow upload

`<?xml version="1.0" encoding="UTF-8"?>`

## Adding plugins

`composer require <namespace>/<packagename>`

## Updating plugins

`composer update`

## Force composer update

`composer update --ignore-platform-reqs`

## Force composer install

`composer install --ignore-platform-reqs`

## WP Admin

Note only use admin vir vhost not browser sync

1. http://wp.localdev/wp-admin

## Gulp commands

-   **Scss:** `gulp styles`
-   **Javascript:** `gulp scripts`
-   **Generate Font pack:** `gulp fonts`
-   **Image minification:** `gulp images`
-   **Favicon:** `gulp favicon`
-   **Browser Sync:** `gulp browser-sync`
-   **SVG sprites:** `gulp svg-sprite`
-   **Retina sprite:** `gulp sprite`
-   **Watch:** `gulp watch`
-   **Default GULP:** `gulp`

## SCSS

Write SCSS in `./web/app/theme/tetloose/dev/scss/**/*.scss`. Compile run `gulp styles`

## Javascript

Javascript split into 2 sections js in the header js in the footer

###js in the header i.e. `modernizr`

1. Place header plugins into `./web/app/theme/tetloose/dev/javascript/header/*.js`
2. Attach a number for which ones to load first, i.e. **modernizr** 01\_ so gulp picks it up first
3. Gulp concats these files, then minifiys them to `./web/app/theme/tetloose/app/javascript/header.js`

###js in the footer i.e. `jquery, plugins & custom js`

1. Place plugins i.e. _jquery\*\* in `./web/app/theme/tetloose/dev/javascript/plugins/_.js`, attach number i.e. 01* 02* so js is loaded in sequence.
2. Global js `./web/app/theme/tetloose/dev/javascript/global.js` sets up any global variables
3. Custom js Modules `./web/app/theme/tetloose/dev/javascript/modules/*.js` Your custom modules
4. App.js `./web/app/theme/tetloose/dev/javascript/app.js` where you call your modules
5. Gulp concats all the above files, then minifiys them to `./web/app/theme/tetloose/app/javascript/app.js`

## Generating font pack

### Dependencys

1. `brew install Caskroom/cask/xquartz`
2. `brew install fontforge ttfautohint ttf2eot bat`

`NOTE: This isnt working at the moment`

1. Drop `ttf` font into `/dev/fonts/`
2. run `gulp fonts`
3. gulp generates font pack, moves to `./web/app/theme/tetloose/app/fonts/`
4. removes source font from `./web/app/theme/tetloose/dev/fonts/`

## Image minification

1. Drop images required by theme into `./web/app/theme/tetloose/app/images/`
2. Run `gulp images`
3. Theme Images and Wordpress uploads Minified

## Favicon

1. Drop 192px by 192px favicon.png into `./web/app/theme/tetloose/dev/favicon/`
2. Run `gulp favicon`
3. Gulp generates favicons and touch icons, places them in `./web/app/theme/tetloose/app/images/meta/`
4. Gulp inserts meta tags into `./web/app/theme/tetloose/inc/header/head/favicons.php`
5. You tweek app name and colours in gulp.js then re run `gulp favicon`

## Browser Sync

1. Set up your project vhost i.e. mysite.localdev if not using php connect
2. Restart apache
3. Line 112 gulp.js add your `$vHost` if using vhost if not leave as is
4. Run `gulp browser-sync`
5. Spins up a php server
6. Check terminal for Local External and Ui addresses
7. Browser Sync will run on a port and proxie your vhost

## SVG Sprites

###Source: https://github.com/jkphl/svg-sprite

1. Drop svg into `./web/app/theme/tetloose/dev/sprites/svg/`
2. Run `gulp svg-sprite`
3. SVG Sprite class names generated `./web/app/theme/tetloose/dev/scss/lib/_svg.scss/`

#### MARKUP

```
<i class="u-svg--{svg_name}">
  <svg><use xlink:href="./web/app/theme/tetloose/app/images/sprites/svg.svg#{svg_name}" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg>
</i>
```

Replace {svg_name} width the name of the svg dropped into /dev/sprites/svg/.

## Retina Sprites

1. Drop images into `./web/app/theme/tetloose/dev/sprites/sprite/`
2. All normal sprite images must be accomained by the retina version, and prefixed @2x
3. Run `gulp sprite`
4. Sprite class names generated `./web/app/theme/tetloose/dev/scss/lib/_sprite.scss/`

#### MARKUP

```
<i class="u-sprite--{sprite_name}"></i>
```

Replace {sprite_name} width the name of the image dropped into ./web/app/theme/tetloose/dev/sprites/sprite.

## Watch for changes

1. Run `gulp watch`
2. Changes made to styles, html, js get injected and browser reloads

## Default GULP

1. Run `gulp`
2. Browser-sync, browser sync, scss, javascript, watch

## Simple Deploy Script over SSH

See `update` update ssh path
Run `./update` - this does the following

1. Connects via ssh to live / staging server
2. Composer install
3. Pulls latest commit on Specified Branch

## Tutorial out of date

[Click here for full tutorial on how to set this up.](http://tetloose.com/diary/technology/wordpress-boilerplate-tutorial-bash-zsh-git-scss-gulp-npm-sql-virtual-hosts-wordpress-tutorial-framework-git-hub-bit-bucket-wp-themes/)

## USEFULL LINKS

`http://ianlunn.github.io/Hover/`
`http://gudh.github.io/ihover/dist/`
`http://tympanus.net/Tutorials/OriginalHoverEffects/index10.html`
`https://github.com/h5bp/Effeckt.css`
`http://forthebadge.com/`
`https://www.atlassian.com/git/tutorials/comparing-workflows/feature-branch-workflow`



Composer install

ln -s ./vendor/squizlabs/php_codesniffer/bin/phpcbf ./phpcs/phpcbf
ln -s ./vendor/squizlabs/php_codesniffer/bin/phpcs ./phpcs/phpcs
https://github.com/philcook/brew-php-switcher
