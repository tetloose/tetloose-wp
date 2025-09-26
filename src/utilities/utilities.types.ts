export type ObjectToStringProps = {
    [key: string]: string
}

export type LoadingProps = {
    animation?: string
    duration: number
}

export type RequestProps = Array<{
    [key: string]: {
        [key: string]: string | number
    }
}>

export type ResponseProps = {
    [key: string]: RequestProps
}

export type MockParams = {
    status?: number
    statusText?: string
    url?: string
    headers?: object
}

export type FetchParamsProps = {
    (input?: string | Request, init?: RequestInit): Promise<Response>
    mockResponse(body: string, init?: MockParams): FetchParamsProps
    mockResponseOnce(body: string, init?: MockParams): FetchParamsProps
    resetMocks(): void
}

export type AnimateProps = {
    target: gsap.TweenTarget
    fromVars: gsap.TweenVars
    toVars: gsap.TweenVars
}

export type HTMLIFrame = HTMLIFrameElement | null
export type HTMLProps = HTMLElement | null
export type InputProps = HTMLInputElement | null
export type HTMLNodeProps = NodeListOf<HTMLElement> | null
export type ButtonProps = HTMLButtonElement | null
export type HTMLVideoProps = HTMLVideoElement | null

export type StateProps = string | boolean | number | Element | HTMLElement | HTMLVideoElement | HTMLButtonElement | LoadingProps | HTMLNodeProps | null
