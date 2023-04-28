# Favicons

Update `src/favicon/favicon.png`, favicons will be generated `web/app/themes/tetloose-theme/favicons`.

Favicons are included in the head inside the theme -> `web/app/themes/tetloose-theme/inc/header/head/head-favicons.php`.

If you add a new favicon, you must update `head-favicons.php` `$favicon_version` or it will show the old one.

`$favicon_application_colour` this changes the tab colour for specific browsers.

```
$favicon_version = 'tetloose';
$favicon_application_colour = '#ff69b4';
```

# Navigation

[TS >>](ts.md)
