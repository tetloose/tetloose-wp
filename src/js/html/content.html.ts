export function content(content: string, classes: string): string {
    return `
        <div class="u-content ${classes && classes}">
            ${content}
        </div>
    `
}
