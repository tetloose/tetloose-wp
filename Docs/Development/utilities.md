# Utilities

## Figures

### TS Helper

`src/js/utilities/figures.utilities.ts`

```
<figure
    data-styles="figure-css-module-styles"
    class="u-figure js-figure u-skeleton-figure"
    data-animation="fade-in"
    data-duration="200"
    data-alt="This is alt text"
    data-src="https://picsum.photos/400/500"
    data-srcset="https://picsum.photos/700/800 1440w, https://picsum.photos/600/700 1024w, https://picsum.photos/500/600 960w, https://picsum.photos/400/500 480w"
    data-size="cover"
    data-rest="title='test title' data-anything='so on and so forth'"
></figure>

```

### PHP Partial

`src/js/components/partials/partials-figure.php`

```
<?php
$image = get_field( 'image' );

get_template_part(
    'components/partials-figure',
    null,
    array(
        'image' => $image,
        'styles' => 'image-css-module-styles',
        'class_names' => 'class-names',
        'animation' => 'fade-in',
        'animation_duration' => 200,
        'rest' => 'title="test title" data-anything="cool"'
    )
);
?>
```

## iFrames

### TS Helper

`src/js/utilities/iframes.utilities.ts`

```
<div
    data-styles="iframe-css-module-styles"
    class="u-media ratio-16x9 js-iframe u-skeleton-media"
    data-animation="fade-in"
    data-duration="200"
    data-src="https://www.youtube.com/embed/j6JppVyKE-k?autoplay=1&mute=1"
    data-rest="title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen">
</div>

```

### PHP Partial

`src/js/components/partials/partials-iframe.php`

```
<?php
$iframe = get_field( 'iframe' );

get_template_part(
    'components/partials-iframe',
    null,
    array(
        'src' => $iframe,
        'styles' => '',
        'class_names' => 'ratio-16x9',
        'animation' => 'fade-in',
        'animation_duration' => 200,
        'rest' => ''
    )
);
?>
```

## Video iFrames (YouTube Vimeo)

Wordpress allows you to paste a YouTube or Vimeo link directly into the content editor, the editor will automatically build an iFrame for you. To style this correctly we need to convert the output into a string, strip out any paragraph tags, then place the iFrame into a div with the utility classes. The TS helper does this for you.

### TS Helper

`src/js/utilities/iframes.utilities.ts`

```
<div
    data-styles=""
    class="js-videoIframe"
    data-video="{iFrame}"
    data-size="ratio-16x9"
    data-animation="fade-in"
    data-duration="200"></div>
```

### PHP Partial

`src/js/components/partials/partials-video.php`

```
<?php
$video = get_field( 'video' );

get_template_part(
    'components/partials-video',
    null,
    array(
        'styles' => '',
        'class_names' => '',
        'video' => esc_attr( $video ),
        'ratio' => 'ratio-16x9',
        'animation' => 'fade-in',
        'animation_duration' => 200
    )
);
?>
```

## Content

### PHP Partial

`src/js/components/partials/partials-content.php`

```
<?php
$content = get_field( 'content' );

get_template_part(
    'components/partials-content',
    null,
    array(
        'styles' => '',
        'class_names' => '',
        'content' => $content,
    )
);
?>
```

## Form

Used with embedded forms.

### PHP Partial

`src/js/components/partials/partials-form.php`

```
<?php
$form = get_field( 'form' );

get_template_part(
    'components/partials-form',
    null,
    array(
        'styles' => '',
        'class_names' => '',
        'form' => $form,
    )
);
?>
```

## Logo

Adding logos

### PHP Partial

`src/js/components/partials/partials-logo.php`

```
<?php
$logo = get_field( 'logo' );

get_template_part(
    'components/partials-logo',
    null,
    array(
        'image' => $logo,
        'href' => home_url( '/' ),
        'styles' => '',
        'class_names' => '',
        'mobile_width' => 100,
        'desktop_width' => 200,
        'figure_styles' => '',
        'figure_class_names' => '',
        'animation' => 'fade-in',
        'animation_duration' => 200,
        'rest' => ''
    )
);
?>
```

## Form

Used to generate social links with icons.

### PHP Partial

```
$social = get_field( 'social' );

get_template_part(
    'components/partials-social',
    null,
    array(
        'styles' => '',
        'class_names' => '',
        'socials' => $social,
        'link_styles' => '',
        'link_class_names' => '',
    )
);
```

## Navigation

Acf Navigation field

### PHP Component

`src/js/components/navigation/navigation-component.php`

```
<?php
$navigation = get_field( 'navigation' );

get_template_part(
    'components/navigation-component',
    null,
    array(
        'tag' => 'nav',
        'id' => $navigation->ID,
        'styles' => 'main-nav',
        'class_names' => '',
        'ul_styles' => 'main-nav__ul',
        'ul_class_names' => '',
        'aria_expanded' => '',
        'animation' => 'fade-in',
    )
);
?>
```

### TS File

`src/js/components/navigation/navigation.component.ts`

`this.subNav(this.module, styles['sub-nav__item'], styles['is-active'])` removes unwanted wp class names and populates active states with css module classes.

### Styles

`src/js/components/navigation/navigation.module.scss`

## Links

Acf Link fields.

### PHP Partial

`src/js/components/partials/partials-link.php`

```
<?php
$_link = get_field( 'link' );

get_template_part(
    'components/partials-link',
    null,
    array(
        'link' => $_link,
        'styles' => '',
        'class_names' => '',
    )
);
?>
```

## Nav Links

Links with icons instead of text.

### PHP Partial

`src/js/components/partials/partials-navlink.php`

```
<?php
$prev_post = get_previous_post();
$prev_title = strip_tags( str_replace( '"', '', $prev_post->post_title ) );

get_template_part(
    'components/partials-navlink',
    null,
    array(
        'styles' => '',
        'class_names' => 'u-icon-prev',
        'href' => get_permalink( $prev_post->ID ),
        'title' => $prev_title ? $prev_title : '',
    )
);
?>
```

## HTML Grid / Content

TypeScript function to create html grid elements wrapped in a content element.

- `src/js/html/row.html.ts`
- `src/js/html/column.html.ts`
- `src/js/html/content.html.ts`


```
import { row, column, content } from './html'
import { GridDataProps } from './html.types'

const gridData: GridDataProps = [
    {
        body: {
            classNames: 'class-1',
            text: 'Column 1'
        },
        breakPoint: {
            lrg: '1-third'
        },
        classNames: 'col-1'
    },
    {
        body: {
            classNames: 'class-2 class-3',
            text: 'Column 2'
        },
        breakPoint: {
            lrg: '2-third'
        },
        classNames: 'col-2'
    }
]

$HTMLElement.innerHtml = gridData
    .map((col) => {
        const { body, breakPoint, classNames } = col

        return column(
            content(
                body && body.text ? body.text : '',
                body && body.classNames ? body.classNames : ''
            ),
            breakPoint,
            classNames ? classNames : ''
        )
    })
    .join(' ')

```

# Navigation

[ICONS >>](icons.md)
