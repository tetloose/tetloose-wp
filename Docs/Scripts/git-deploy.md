# Git Deploy

## Initial Setup

1. `ssh project-name`
2. `mkdir project-name`
3. `cd project-name`
4. `git clone git@github.com:tetloose/tetloose-wp.git --recurse-submodules .`
5. `git checkout -b {deployment-branch}` - ignore if deployment branch is **main**

## Symlink Project folder

If you don't have access to document roots in your hosting you may need to symlink the project, the example below uses a document root of `public`.

1. `ssh project-name`
2. `mv public public-bak`
3. `ln -s ~/project-name/web/ ~/public`
4. remove `public-bak`

## Yarn Deploy

`yarn deploy`

Follow the prompts:

This will do the following:

1. Run tests
2. Update plugins + Wordpress
3. Build the project
4. Commit the project
5. SSH into environment
6. Stash any changes
7. Pull the latest code
8. Re apply the stash

# Navigation

[DATABASE >>](database.md)
