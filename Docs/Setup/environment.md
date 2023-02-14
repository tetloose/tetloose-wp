# Environment

Tetloose WP was built using Mac OS, it would need to be tweaked to work with Windows. You may need to drop the font generation.

1. Remove **fonts** from line 6, 17, 39, 60 `gulpfile.babel.js`
2. Remove line 5, 76 to 86 `.gulp/tasks/monitor.js`
3. Remove Font task `.gulp/tasks/fonts.js`

Note: This isn't a tutorial on setting up a local environment for your development machine, more of an idea of a setup that could be used.

Brew is used as a package manager, read more about [Brew](https://brew.sh/).

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

## Navigation

[SETUP >>](setup.md)
