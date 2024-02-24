import { defineConfig } from 'vitest/config'
import { resolve } from 'path'

export default defineConfig({
    resolve: {
        alias: {
            '@': resolve(__dirname, 'src'),
            '@styles': resolve(__dirname, 'src/scss'),
            '@components': resolve(__dirname, 'src/components'),
            '@elements': resolve(__dirname, 'src/elements'),
            '@utilities': resolve(__dirname, 'src/utilities'),
            '@config': resolve(__dirname, 'src/config')
        }
    },
    test: {
        globals: true,
        environment: 'jsdom',
        setupFiles: './vitest.setup.ts',
        exclude: [
            '.vscode',
            'node_modules',
            'web',
            '.scripts',
            'vendor'
        ]
    }
})
