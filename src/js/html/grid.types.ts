type GridBrakePointGenerics =
    'half' |
    '1-third' |
    '2-third' |
    '1-forth' |
    '3-forth' |
    undefined

export type GridBrakePointProps = {
    sml?: GridBrakePointGenerics
    med?: GridBrakePointGenerics
    lrg?: GridBrakePointGenerics
    xlrg?: GridBrakePointGenerics
    xxlrg?: GridBrakePointGenerics
}
