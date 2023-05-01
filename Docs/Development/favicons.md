# Favicons

Update `src/favicon/favicon.png`, then run: `yarn favicons`.

Favicons will be auto generated and added to `web/app/themes/tetloose-theme/favicons`.

Favicons are included in the head here -> `src/js/components/wrapper/wrapper-header-favicons.php`.

If you add a new favicon, you must update `$favicon_version` on line **9** in `src/js/components/wrapper/wrapper-header-favicons.php` to bust the cache.

`$favicon_application_colour` this changes the tab color for specific browsers.

```
$favicon_version = 'tetloose';
$favicon_application_colour = '#ff69b4';
```

# Navigation

[SCRIPTS >>](../Scripts/index.md)
