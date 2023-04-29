export const modules = {
    Header: () => import(/* webpackChunkName: "header" */ '../components/header/header.component'),
    Menu: () => import(/* webpackChunkName: "menu" */ '../components/menu/menu.component'),
    Navigation: () => import(/* webpackChunkName: "navigation" */ '../components/navigation/navigation.component'),
    Footer: () => import(/* webpackChunkName: "footer" */ '../components/footer/footer.component'),
    Social: () => import(/* webpackChunkName: "social" */ '../components/social/social.component'),
    AddPosts: () => import(/* webpackChunkName: "add-posts" */ '../components/add-posts/add-posts.component'),
    Excerpt: () => import(/* webpackChunkName: "excerpt" */ '../components/excerpt/excerpt.component'),
    PostNav: () => import(/* webpackChunkName: "post-nav" */ '../components/post-nav/post-nav.component')
}
