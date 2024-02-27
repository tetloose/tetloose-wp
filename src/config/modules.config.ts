export const modules = {
    Header: () => import(/* webpackChunkName: "header" */ '@components/header/header.component'),
    Navigation: () => import(/* webpackChunkName: "navigation" */ '@components/navigation/navigation.component'),
    Footer: () => import(/* webpackChunkName: "footer" */ '@components/footer/footer.component'),
    AddPosts: () => import(/* webpackChunkName: "add-posts" */ '@components/add-posts/add-posts.component'),
    PostNav: () => import(/* webpackChunkName: "post-nav" */ '@components/post-nav/post-nav.component'),
    AnimatedBanner: () => import(/* webpackChunkName: "animated-banner" */ '@components/animated-banner/animated-banner.component'),
    Hero: () => import(/* webpackChunkName: "hero" */ '@components/hero/hero.component'),
    Title: () => import(/* webpackChunkName: "title" */ '@components/title/title.component'),
    Content: () => import(/* webpackChunkName: "content" */ '@components/content/content.component'),
    ContentImage: () => import(/* webpackChunkName: "content-image" */ '@components/content-image/content-image.component'),
    FullBleedImage: () => import(/* webpackChunkName: "full-bleed-image" */ '@components/full-bleed-image/full-bleed-image.component'),
    HalfBleedImages: () => import(/* webpackChunkName: "half-bleed-images" */ '@components/half-bleed-images/half-bleed-images.component'),
    FullBleedVideo: () => import(/* webpackChunkName: "full-bleed-video" */ '@components/full-bleed-video/full-bleed-video.component'),
    Form: () => import(/* webpackChunkName: "form" */ '@components/form/form.component'),
    SongKick: () => import(/* webpackChunkName: "song-kick" */ '@components/song-kick/song-kick.component'),
    Music: () => import(/* webpackChunkName: "music" */ '@components/music/music.component'),
    Figure: () => import(/* webpackChunkName: "figure" */ '@components/figure/figure.component'),
    Iframe: () => import(/* webpackChunkName: "iframe" */ '@components/iframe/iframe.component')
}
