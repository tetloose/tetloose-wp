## SVG Sprite

1. Add svg to `src/sprite`
2. `src/scss/utils/sprite.scss`

## How to use in markup

```
<i class="u-sprite-{sprite-name}">
  <svg><use xlink:href="./web/app/theme/tetloose/app/images/sprites/svg.svg#{sprite-name}" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg>
</i>
```

Replace {sprite-name} width the name of the svg dropped into **src/sprite**.

# Navigation

- [ICONS >>](icons.md)
