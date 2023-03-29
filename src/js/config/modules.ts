export const modules = {
    Header: () => import(/* webpackChunkName: "header" */ '../components/header/header.component'),
    Menu: () => import(/* webpackChunkName: "menu" */ '../components/menu/menu.component'),
    Navigation: () => import(/* webpackChunkName: "navigation" */ '../components/navigation/navigation.component'),
    Footer: () => import(/* webpackChunkName: "footer" */ '../components/footer/footer.component'),
    Social: () => import(/* webpackChunkName: "social" */ '../components/social/social.component'),
    Content: () => import(/* webpackChunkName: "content" */ '../components/content/content.component'),
    Title: () => import(/* webpackChunkName: "title" */ '../components/title/title.component')
}
