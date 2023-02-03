import { modules } from './modules'

export const components = document.querySelectorAll('[data-module]') as NodeListOf<HTMLElement> | null

export function loadComponent(target: HTMLElement, chunk: string): void {
    Object.entries(modules).forEach(([key, value]) => key === chunk
        && value()
            .then((res: { default: (arg0: HTMLElement) => void }) => {
                res.default(target)
            })
            .catch((error: string): void => alert(error))
    )
}
