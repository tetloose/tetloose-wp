# Theme Settings

Click the tab at the top, **Theme**, then the sub menu **Settings**.

## Fonts

this is where you define **Font's**

## Colors

This is where you define colors, some default values are already available in the fields, press **Update**. You will see the colors update in the above message.

## Global Styles

This is where you set the global selection color, the background and color of selectable items.

## Scripts

this is an entry point into the projects Head, Body and Footer. You can add any thing custom here. Some project require Google Analytics, instead of altering code, just paste it here and let Wordpress do it for you.

### ACF Fields

- **ACF** -> **Settings**

## Header and Footer

The other sub menus under **Theme** relate to Header and Footer. These are dependent on the header options.

### ACF Fields

- **ACF** -> **header**
- **ACF** -> **footer**

Each component has it's own **Styles** tab, where you can assign various styles to the component, colors are dependent on the selection in **Theme** -> **Settings**.

## Php wrapper components

These files are used to import headers, footers etc. These includes are pre set up in **Tetloose-theme** so we only need to define the routes in `src/js/components/wrapper/**/*`

You can switch out different components for the theme header / footer in the below files:

- `src/js/components/wrapper/wrapper-header.php`
- `src/js/components/wrapper/wrapper-footer.php`

# Navigation

[STATIC CONTENT >>](static-content.md)
