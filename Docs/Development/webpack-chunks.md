# Webpack Chunks

When creating a new component for the project, you need to make the component available to Webpack as a chunk. These components get added to a global Object thats run though an intersection observer, this observer watches until the component is visible on the screen, then it will load its associated files.

## Creating a new Chunk

For example when adding a new component called **My Component**:

See: `src/js/config/modules.config.ts` and add a new line.

`MyComponent: () => import(/* webpackChunkName: "my-component" */ '../components/my-component/my-component.component')`

1. `MyComponent` this is the reference to the TS **Class**, this needs to be **TitleCase**.
2. `my-component` this is the reference to the exported JS file, **lower-hyphenate-case**.
3. `'../components/my-component/my-component.component'` this is where the component **.ts** is stored.

The naming convention is very important for step 3, `{component-name}.{component}`.

# Navigation

[COMPONENTS >>](components.md)
