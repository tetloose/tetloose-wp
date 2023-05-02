# Deploy

## Initial Setup

1. Setup a database for Wordpress on Production / Staging
2. Make sure Environment Wordpress Options are in `.env`

Run `yarn setup` and select option 1/2.

Follow the prompts.

This will:

1. SSH into the environment
2. Download Wordpress via WP-CLI
3. Config wp-config
4. Rsync Theme, Plugins, Uploads
5. Sync the Local database to the selected environment

## Yarn Deploy

`yarn deploy`

Follow the prompts:

This will do the following:

1. Run tests
2. Update plugins + Wordpress
3. Build the project
4. Commit the project
5. Rsync Theme to selected environment

## Symlinks

You might not be able to change the servers document root. To get around this you can symlink the directory:

1. `ssh project-name`
2. `mv public public-bak`
3. `ln -s ~/project-name/ ~/public`
4. remove `public-bak`

# Navigation

[DATABASE >>](database.md)
