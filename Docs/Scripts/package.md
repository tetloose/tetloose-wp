# Package

Creates a zip for standard Wordpress deployment.

`yarn package`

Follow the prompts:

This will do the following:

1. Updates composer packages
2. Creates Package folder `./package/tetloose-date-time`
3. Search replace database urls via wp-cli local to production
4. Exports database via wp-cli to `./package/tetloose-date-time/package.sql`
5. Search replace database urls via wp-cli production to local
6. Copies mu-plugins / plugins / uploads / Theme to `./package/tetloose-date-time`
7. Creates a zip of `./package/tetloose-date-time`
8. Cleans up files

# Navigation

[PATTERN LIBRARY >>](pattern-library.md)
