# Setup

This setup uses [Valet](https://laravel.com/docs/9.x/).

Another option is to use [Trellis](https://roots.io/trellis/docs/installation/).

You can use any setup as long as the document root is set to the `web` folder.

## Clone the project

1. `cd ~/project-folder`
2. `git clone git@github.com:tetloose/tetloose-wp.git --recurse-submodules`
3. `git checkout -b develop`

## Tetloose ACF

- [Tetloose-ACF](https://github.com/tetloose/tetloose-ACF) Advanced custom fields Pro - scraper

This is scraper that pulls in the latest version of ACF:

1. Duplicate **Tetloose-ACF** on your own repo
2. Inside **Tetloose-WP** Update line **39** `composer.json` -> `"url": "git@github.com:{repo-name}.git"`
3. Goto the cloned **Tetloose-ACF** `https://github.com/{repo-name}/settings` -> Secrets and Variables -> Actions
4. Create `New Repository secret`
5. **Name** `ACF_PRO_LICENSE`
6. Enter ACF License in **Secret**

## Database

1. Create a new database `database-project-name`

## VHost

Link your development environment to the **web** folder.

1. `cd ~/project-folder/tetloose-wp/web`
2. `valet link project-name`
3. Project is now linked to **project-name.test**

## SSH

For deployment SSH is used to connect your local env to staging or production.

See [SSH](ssh.md)

## Install the requirements

1. `cd ~/path-to-repo/tetloose-wp`
2. `yarn setup`

Set up will first generate a **.env** file in the project root, it will give you options to use a template and manually input the values values or an interactive option.

Check values in `.env` before continuing.

`yarn setup` will continue to install packages. Once it completes, Browser-Sync will open a browser with  **localhost:3000**.

It's very important you **do not** install Wordpress on **localhost:3000**.

This will cause a page reload every time you save code.

Install Wordpress on the vHost url i.e. `project-name.test/wp/wp-admin`.

More info see [FIRST LOAD >>](../Wordpress/first-load.md).

## Navigation

[ENV >>](env.md)
