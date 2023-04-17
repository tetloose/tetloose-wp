import { EventProps } from '../components/song-kick/song-kick.types'

export type StateProps = string | boolean | number | HTMLElement | EventProps | null

export type ObjectToStringProps = {
    [key: string]: string
}
