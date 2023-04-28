# Utilities

## Figures

### TS Helper

`src/js/config/figures.ts`

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

`src/js/config/iframes.ts`

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

### TS Helper

`src/js/config/iframes.ts`

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

# Navigation

[Partials >>](partials.md)
