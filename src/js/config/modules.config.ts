export const modules = {
    Header: () => import(/* webpackChunkName: "header" */ '../components/header/header.component'),
    Navigation: () => import(/* webpackChunkName: "navigation" */ '../components/navigation/navigation.component'),
    Footer: () => import(/* webpackChunkName: "footer" */ '../components/footer/footer.component'),
    AddPosts: () => import(/* webpackChunkName: "add-posts" */ '../components/add-posts/add-posts.component'),
    PostNav: () => import(/* webpackChunkName: "post-nav" */ '../components/post-nav/post-nav.component')
}
