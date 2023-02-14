# Setup

This setup uses [Valet](https://laravel.com/docs/9.x/), which is super fast, takes a bit of config, but it's worth it, as you have full control of your development environment.

Another option is to use [Trellis](https://roots.io/trellis/docs/installation/). This uses a Vagrant box, and requires zero set up time. The only issue is it's a bit slow.

## Clone the project

1. `cd ~/project-folder`
2. `git clone git@github.com:tetloose/tetloose-wp.git`
3. `git checkout -b develop`

## Tetloose ACF

- [Tetloose-ACF](https://github.com/tetloose/tetloose-ACF) Advanced custom fields Pro - scraper

This is scraper to pull in the latest version of ACF, to use this:

1. Duplicate repo on your own repo
2. Update line **39** `composer.json` -> `"url": "git@github.com:{repo-name}.git"`
3. Goto `https://github.com/{repo-name}/settings` -> Secrets and Variables -> Actions
4. Create `New Repository secret`
5. **Name** `ACF_PRO_LICENSE`
6. Enter ACF License in **Secret**

## Database

1. Create a new database `database-name`

## VHost

Link your development environment to the **web** folder.

1. `cd ~/project-folder/tetloose-wp/web`
2. `valet link project-name`
3. Project is now linked to **project-name.test**

## SSH

For deployment SSH is used to connect your local env to staging or production.

See [SSH](ssh.md)

## Install the requirments

1. `cd ~/path-to-repo/tetloose-wp`
2. `yarn setup`

Set up will first generate a **.env** file, it will give you options to use a template and manually alter the values or an interactive option.

Check values in `.env` before continuing.

## Navigation

[ENV >>](env.md)
