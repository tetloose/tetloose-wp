type BrakePointGenerics =
    'half' |
    '1-third' |
    '2-third' |
    '1-forth' |
    '3-forth' |
    undefined

export type BrakePointProps = {
    sml?: BrakePointGenerics
    med?: BrakePointGenerics
    lrg?: BrakePointGenerics
    xlrg?: BrakePointGenerics
    xxlrg?: BrakePointGenerics
}

export type GridDataProps = Array<{
    brakepoint: BrakePointProps
}>
