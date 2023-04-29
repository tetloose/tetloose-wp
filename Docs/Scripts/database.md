# Database Deployment

## Push

`yarn db:push`

Follow the prompts:

This will do the following:

1. Export local database via wp-cli
2. Rsync the database to server
3. Import the database via wp-cli
4. Search and replace urls
5. Remove database local + server

## Pull

`yarn db:pull`

Follow the prompts:

This will do the following:

1. Export server database via wp-cli
2. Rsync the database to local
3. Import the database via wp-cli
4. Search and replace urls
5. Remove database local + server

# Navigation

[UPLOADS >>](uploads.md)
