module.exports = {
    extends: 'stylelint-config-standard-scss',
    plugins: [
        'stylelint-order'
    ],
    rules: {
        'selector-pseudo-class-no-unknown': [
            true,
            {
                'ignorePseudoClasses': [
                    'global'
                ]
            }
        ],
        'declaration-block-no-redundant-longhand-properties': [
            true, {
                'ignoreShorthands': ['grid-template']
            }
        ],
        'value-keyword-case': null,
        'declaration-colon-space-after': 'always-single-line',
        'declaration-colon-newline-after': 'always-multi-line',
        'max-empty-lines': 1,
        'string-quotes': 'single',
        'indentation': 'tab',
        'no-duplicate-selectors': true,
        'property-no-vendor-prefix': true,
        'value-no-vendor-prefix': true,
        'number-leading-zero': 'never',
        'at-rule-no-vendor-prefix': true,
        'function-url-quotes': 'never',
        'function-comma-space-after': 'always',
        'color-hex-case': 'lower',
        'color-hex-length': 'short',
        'color-named': [
            'never',
            {
                'ignore': [
                    'inside-function'
                ]
            }
        ],
        'color-no-invalid-hex': true,
        'color-function-notation': 'modern',
        'selector-no-qualifying-type': null,
        'selector-combinator-space-after': 'always',
        'selector-attribute-quotes': 'never',
        'selector-attribute-operator-space-before': 'never',
        'selector-attribute-operator-space-after': 'never',
        'selector-attribute-brackets-space-inside': 'never',
        'selector-pseudo-element-colon-notation': 'double',
        'selector-pseudo-class-parentheses-space-inside': 'never',
        'selector-no-vendor-prefix': true,
        'declaration-block-trailing-semicolon': 'always',
        'declaration-no-important': true,
        'declaration-colon-space-before': 'never',
        'font-weight-notation': 'numeric',
        'font-family-name-quotes': 'always-where-recommended',
        'comment-whitespace-inside': 'always',
        'comment-empty-line-before': 'always',
        'media-feature-range-operator-space-before': 'always',
        'media-feature-range-operator-space-after': 'always',
        'media-feature-parentheses-space-inside': 'never',
        'media-feature-name-no-vendor-prefix': true,
        'media-feature-colon-space-before': 'never',
        'media-feature-colon-space-after': 'always',
        'no-descending-specificity': null,
        'custom-property-empty-line-before': [
            'always',
            {
                'except': [
                    'first-nested',
                    'after-comment',
                    'after-custom-property'
                ]
            }
        ],
        'max-line-length': 200,
        'max-nesting-depth': [
            4,
            {
                'ignore': [
                    'pseudo-classes',
                    'blockless-at-rules'
                ]
            }
        ],
        'order/order': [
            [
                'dollar-variables',
                'declarations',
                'rules',
                {
                    'type': 'at-rule',
                    'name': 'supports'
                },
                {
                    'type': 'at-rule',
                    'name': 'media'
                }
            ],
            {
                'severity': 'warning'
            }
        ],
        'order/properties-order': [
            [
                'content',
                'display',
                'flex',
                'flex-grow',
                'flex-shrink',
                'flex-basis',
                'flex-direction',
                'flex-flow',
                'flex-wrap',
                'vertical-align',
                'position',
                'top',
                'right',
                'bottom',
                'left',
                'z-index',
                'width',
                'min-width',
                'max-width',
                'height',
                'min-height',
                'max-height',
                'margin',
                'margin-top',
                'margin-right',
                'margin-bottom',
                'margin-left',
                'padding',
                'padding-top',
                'padding-right',
                'padding-bottom',
                'padding-left',
                'align-content',
                'align-items',
                'align-self',
                'justify-content',
                'justify-items',
                'justify-self',
                'order',
                'grid',
                'grid-area',
                'grid-template',
                'grid-template-areas',
                'grid-template-rows',
                'grid-template-columns',
                'grid-row',
                'grid-row-start',
                'grid-row-end',
                'grid-column',
                'grid-column-start',
                'grid-column-end',
                'grid-auto-rows',
                'grid-auto-columns',
                'grid-auto-flow',
                'grid-gap',
                'grid-row-gap',
                'grid-column-gap',
                'gap',
                'row-gap',
                'column-gap',
                'opacity',
                'visibility',
                'overflow',
                'overflow-x',
                'overflow-y',
                'overflow-scrolling',
                'float',
                'clear',
                'box-sizing',
                'background',
                'background-color',
                'background-image',
                'background-attachment',
                'background-position',
                'background-position-x',
                'background-position-y',
                'background-clip',
                'background-origin',
                'background-size',
                'background-repeat',
                'fill',
                'stroke',
                'object-fit',
                'clip',
                'border',
                'border-spacing',
                'border-collapse',
                'border-width',
                'border-style',
                'border-color',
                'border-top',
                'border-top-width',
                'border-top-style',
                'border-top-color',
                'border-right',
                'border-right-width',
                'border-right-style',
                'border-right-color',
                'border-bottom',
                'border-bottom-width',
                'border-bottom-style',
                'border-bottom-color',
                'border-left',
                'border-left-width',
                'border-left-style',
                'border-left-color',
                'border-radius',
                'border-top-left-radius',
                'border-top-right-radius',
                'border-bottom-right-radius',
                'border-bottom-left-radius',
                'border-image',
                'border-image-source',
                'border-image-slice',
                'border-image-width',
                'border-image-outset',
                'border-image-repeat',
                'border-top-image',
                'border-right-image',
                'border-bottom-image',
                'border-left-image',
                'border-corner-image',
                'border-top-left-image',
                'border-top-right-image',
                'border-bottom-right-image',
                'border-bottom-left-image',
                'color',
                'font',
                'font-weight',
                'font-style',
                'font-variant',
                'font-size-adjust',
                'font-stretch',
                'font-size',
                'font-family',
                'line-height',
                'letter-spacing',
                'box-decoration-break',
                'box-shadow',
                'outline',
                'outline-width',
                'outline-style',
                'outline-color',
                'outline-offset',
                'table-layout',
                'caption-side',
                'empty-cells',
                'list-style',
                'list-style-position',
                'list-style-type',
                'list-style-image',
                'src',
                'quotes',
                'counter-increment',
                'counter-reset',
                '-ms-writing-mode',
                'text-align',
                'text-align-last',
                'text-decoration',
                'text-emphasis',
                'text-emphasis-position',
                'text-emphasis-style',
                'text-emphasis-color',
                'text-indent',
                'text-justify',
                'text-outline',
                'text-transform',
                'text-wrap',
                'text-overflow',
                'text-overflow-ellipsis',
                'text-overflow-mode',
                'text-shadow',
                'white-space',
                'word-spacing',
                'word-wrap',
                'word-break',
                'overflow-wrap',
                'tab-size',
                'hyphens',
                'interpolation-mode',
                'cursor',
                'resize',
                'pointer-events',
                'user-select',
                'filter',
                'columns',
                'column-span',
                'column-width',
                'column-count',
                'column-fill',
                'column-gap',
                'column-rule',
                'column-rule-width',
                'column-rule-style',
                'column-rule-color',
                'break-before',
                'break-inside',
                'break-after',
                'page-break-before',
                'page-break-inside',
                'page-break-after',
                'direction',
                'orphans',
                'widows',
                'zoom',
                'max-zoom',
                'min-zoom',
                'user-zoom',
                'orientation',
                'unicode-bidi',
                'transition',
                'transition-delay',
                'transition-timing-function',
                'transition-duration',
                'transition-property',
                'transform',
                'transform-origin',
                'animation',
                'animation-name',
                'animation-duration',
                'animation-play-state',
                'animation-timing-function',
                'animation-delay',
                'animation-iteration-count',
                'animation-direction',
                'animation-fill-mode'
            ],
            {
                'unspecified': 'bottom',
                'severity': 'warning'
            }
        ]
    },
    ignoreFiles: [
        'src/scss/utils/icons.scss',
        'src/scss/wordpress.scss',
        ".vscode",
        "node_modules",
        "web",
        ".scripts",
        "vendor"
    ]
}
