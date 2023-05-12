# Page Builder

This is a user friendly name given to the components.

The page builder exists on every page / post, allows you build custom pages / posts using the available components using ACF Flexible Content.

On first sync of ACF, you will have access to every component ever built for Tetloose-WP, but they don't actually exist in `src/js/components` only the core ones.

1. add-posts
2. archive
3. excerpt
4. footer
5. functions
6. header
7. navigation
8. pages
9. partials
10. post-nav
11. wrapper

To add these missing components, use `yarn add-component` to add them from the component library.

Once you have all the desired components, you will need to go into **ACF** -> **Shared Fields**, to the bottom, expand **components**. Then delete the unwanted components i.e **Animated Banner**, **Hero** etc.

The idea to make every element editable, this gives the user complete control over the end product. It can take a bit longer getting pages / posts set up, once they are the Plugin **Easy Post Duplicator** will allow you to duplicate the page / post.

# Navigation

[COMPONENTS >>](components.md)
