# ACF

Tetloose-WP relies on Advanced Custom Fields ACF. When ever a **field** or **post type** is created or removed ACF will generate / update the associated json file for it. The files are stored in `src/acf`.

These fields / post types can now be version controlled.

## Option pages

Option pages are stored `src/js/components/functions/acf.php` line **35 - 73**.

To add another:

```
acf_add_options_page(
    array(
        'icon_url' => 'dashicons-welcome-write-blog',
        'position' => 84,
        'page_title' => 'News Landing',
        'menu_title' => 'News Landing',
        'menu_slug' => 'news-landing',
        'parent_slug' => 'edit.php?post_type=news',
        'capability' => 'edit_posts',
        'redirect' => false,
        'autoload' => true,
    )
);
```

- See [DASH ICONS](https://developer.wordpress.org/resource/dashicons/#pinterest)
- See [ACF OPTION PAGE](https://www.advancedcustomfields.com/resources/options-page/)

# Navigation

[HOME >>](../../README.md)
