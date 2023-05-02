# ENV

## DEVELOPMENT PROXY

This will be the linked project host i.e. **project-name.test**.

## STATIC VARIABLES

These values should be left as they are, they are used for deployment, if your production instance of Wordpress uses a different folder name for wp-content, change it here etc.

- WP_CONTENT=`wp-content`
- WP_THEME=`wp-content/themes`
- WP_PLUGINS=`wp-content/plugins`
- WP_UPLOADS=`wp-content/uploads`
- LOCAL_APP=`web/app`
- LOCAL_THEME=`web/app/themes/tetloose-theme`
- LOCAL_PLUGINS=`web/app/plugins`
- LOCAL_UPLOADS=`web/app/uploads`

## TOOLKIT VARIABLES

These variables are used in the shell script `toolkit`. URLs are used to search and replace fields in the database, it's fine to set these as // if both local, production and staging use https, other wise prefix with http:// https://.

- TOOLKIT_PRODUCTION_SSH=`project-name-production`
- TOOLKIT_PRODUCTION_DIR=`~/project-name`
- TOOLKIT_PRODUCTION_URL=`https://project-name.com`
- TOOLKIT_STAGING_SSH=`project-name-staging`
- TOOLKIT_STAGING_DIR=`~/project-name`
- TOOLKIT_STAGING_URL=`https://project-name.staging.com`
- TOOLKIT_LOCAL_DIR=`~/Sites/Clients/project-name`
- TOOLKIT_LOCAL_URL=`http://project-name.test`
- TOOLKIT_UPLOADS_DIR=`web/app/uploads`
- TOOLKIT_BACKUP_DIR=`~/Dropbox/Backups/project-name`

## PRODUCTION WORDPRESS OPTIONS

- PRODUCTION_DB_HOST=`127.0.0.1`
- PRODUCTION_DB_NAME=`dbname`
- PRODUCTION_DB_USER=`user`
- PRODUCTION_DB_PASSWORD=`password`

## STAGING WORDPRESS OPTIONS

- STAGING_DB_HOST=`127.0.0.1`
- STAGING_DB_NAME=`dbname`
- STAGING_DB_USER=`user`
- STAGING_DB_PASSWORD=`password`

## LOCAL WORDPRESS OPTIONS

- DB_PREFIX=`tetlooseWP_`
- DB_HOST=`127.0.0.1`
- DB_NAME=`database-project-name`
- DB_USER=`root`
- DB_PASSWORD=`root`
- WP_ENV=`development`
- WP_HOME=`http://project-name.test`
- WP_SITEURL=`${WP_HOME}/wp`

## THEME OPTIONS

For development, setting this to **no** will remove jQuery from the theme, setting this to **yes** will add it back in. The version below should be the latest, if you want to use jQuery.

```
USE_JQUERY=no
JQUERY_VERSION=https://code.jquery.com/jquery-3.6.3.min.js'
```

## GENERATE YOUR KEYS HERE: https://roots.io/salts.html

You have to generate your own keys, goto [Salts](https://roots.io/salts.html) copy the **ENV Format** and paste at the bottom of the env.

## Navigation

[COMMANDS >>](commands.md)
