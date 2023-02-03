import { GridBrakePointProps } from '../../html/grid.types'

type DataProps = Array<{
    brakepoint: GridBrakePointProps
}>

export const data: DataProps = [
    {
        brakepoint: {
            lrg: '1-third'
        }
    },
    {
        brakepoint: {
            med: 'half',
            lrg: '2-third'
        }
    }
]
