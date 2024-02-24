type BodyProps = {
    classNames?: string
    text?: string
}

type BreakPointGenerics =
    'half' |
    '1-third' |
    '2-third' |
    '1-forth' |
    '3-forth' |
    undefined

export type BreakPointProps = {
    sml?: BreakPointGenerics
    med?: BreakPointGenerics
    lrg?: BreakPointGenerics
    xlrg?: BreakPointGenerics
    xxlrg?: BreakPointGenerics
}

export type GridDataProps = Array<{
    body?: BodyProps
    breakPoint: BreakPointProps
    classNames?: string
}>

export type ImageProps = {
    alt?: string
    sml: string
    med: string
    lrg: string
    xlrg: string
    xxlrg: string
}

export type iframeProps = {
    className?: string,
    ratio: '21x9' | '16x9' | '4x6' | '4x3' | undefined
    src: string
    rest?: string
}
