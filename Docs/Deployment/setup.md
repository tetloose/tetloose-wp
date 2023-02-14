# Deployment

## SSH into server

See [SSH](ssh.md) for more info

1. `ssh project-name`
2. `mkdir project-name`
3. `cd project-name`
4. `git clone git@github.com:tetloose/tetloose-wp.git`
5. `git checkout -b {deployment-branch}` - ignore if deployment branch is **main**

## Symlink Project folder

If you don't have access to document roots in your hosting you may need to symlink the project, the example below uses a document root of `public`

1. `ssh project-name`
2. `mv public public-bak`
3. `ln -s ~/project-name/web/ ~/public`
4. remove `public-bak`
