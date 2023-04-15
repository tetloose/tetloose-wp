export const modules = {
    Header: () => import(/* webpackChunkName: "header" */ '../components/header/header.component'),
    Menu: () => import(/* webpackChunkName: "menu" */ '../components/menu/menu.component'),
    Navigation: () => import(/* webpackChunkName: "navigation" */ '../components/navigation/navigation.component'),
    Footer: () => import(/* webpackChunkName: "footer" */ '../components/footer/footer.component'),
    Social: () => import(/* webpackChunkName: "social" */ '../components/social/social.component'),
    Hero: () => import(/* webpackChunkName: "hero" */ '../components/hero/hero.component'),
    Content: () => import(/* webpackChunkName: "content" */ '../components/content/content.component'),
    Title: () => import(/* webpackChunkName: "title" */ '../components/title/title.component'),
    FullBleedImage: () => import(/* webpackChunkName: "full-bleed-image" */ '../components/full-bleed-image/full-bleed-image.component'),
    HalfBleedImages: () => import(/* webpackChunkName: "half-bleed-images" */ '../components/half-bleed-images/half-bleed-images.component'),
    ContentImage: () => import(/* webpackChunkName: "content-image" */ '../components/content-image/content-image.component'),
    FullBleedVideo: () => import(/* webpackChunkName: "full-bleed-video" */ '../components/full-bleed-video/full-bleed-video.component'),
    AddPosts: () => import(/* webpackChunkName: "add-posts" */ '../components/add-posts/add-posts.component'),
    Excerpt: () => import(/* webpackChunkName: "excerpt" */ '../components/excerpt/excerpt.component'),
    PostNav: () => import(/* webpackChunkName: "psot-nav" */ '../components/post-nav/post-nav.component')
}
