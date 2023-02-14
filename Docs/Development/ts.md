# Typescript

Entry `src/app.ts`

This will load in components, figures, iframes and the intersection observer.

# Observer

`src/config/observer`

This will observe the document, if a component, figure or iframe hits the intersection it will load it.

## Components

Component sit in `src/js/components`.

### PHP Component

prefix of **components-** at the start, then the **component-name**.

### TS Component

{component-name}.component.ts

### SCSS Module (optional)

{component-name}.module.scss

### SCSS File (optional)

{component-name}.styles.scss

### Test file

{component-name}.test.scss

The folder structure will look like this

```
{component-name}
    components-{component-name}.php
    {component-name}.component.ts
    {component-name}.module.scss
    {component-name}.styles.scss
    {component-name}.test.ts
```

## PHP Component

These components markup need a data attribute of

- `data-module="ComponentName"`
- `data-animation="animation-name"`

## TS Component

`{component-name}.component.ts`

This is a Class with the same name as data-module, e.g. `ComponentName`

```
export class ComponentName {
    module: HTMLElement
    animation?: string

    constructor(module: HTMLElement) {
        this.module = module
    }
}
```

We need to now tell Webpack that we want to create a dynamic module for this component.

add a new key value to `src/js/config/modules.ts` object.

```
export const modules = {
    ComponentName: () => import(/* webpackChunkName: "component-name" */ '../components/component-name/component-name.component') // <---- new  key value
    SingleColumnContent: () => import(/* webpackChunkName: "single-column-content" */ '../components/single-column-content/single-column-content.component')
}
```

Once this Component hits the intersection it will load its assets.

## Figures

Markup for figures should follow this pattern for the intersection to pick it up and load it.

```
<figure
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

## iFrames

Markup for iFrames should follow this pattern for the intersection to pick it up and load it.

```
<div
    class="u-media ratio-16x9 js-iframe u-skeleton-media"
    data-src="https://www.youtube.com/embed/j6JppVyKE-k?autoplay=1&mute=1"
    data-rest="title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen">
</div>

```

# Navigation

[SCSS >>](scss.md)
