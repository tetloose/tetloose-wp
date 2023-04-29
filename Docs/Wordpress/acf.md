# ACF

Tetloose-WP relies on Advanced Custom Fields ACF. When ever a **field** or **post type** is created or removed ACF will generate / update the it's corrisponding json file. The files are stored here `src/acf`.

This allows us to version fields and post types.

On first load of the project, goto **ACF** and sync all the avalible fields and post types.

## Option pages

ACF allows us to create option pages that sit in the sidebar, this is really handy for content that isn't apart of the loop.

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

- [SETTINGS >>](settings.md)
