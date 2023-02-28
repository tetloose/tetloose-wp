export const modules = {
    Header: () => import(/* webpackChunkName: "header" */ '../components/header/header.component'),
    Logo: () => import(/* webpackChunkName: "logo" */ '../components/logo/logo.component'),
    Menu: () => import(/* webpackChunkName: "menu" */ '../components/menu/menu.component'),
    SingleColumnContent: () => import(/* webpackChunkName: "single-column-content" */ '../components/single-column-content/single-column-content.component')
}
