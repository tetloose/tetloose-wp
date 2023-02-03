export function addClassNames(element: HTMLElement, classes: string): void {
    if (classes && element) {
        classes
            .split(' ')
            .forEach(name => name && element.classList.add(name))
    }
}
