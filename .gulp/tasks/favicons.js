import { generateFavicon } from 'gulp-real-favicon'
import { favicons as config } from '../config'
import { reload } from 'browser-sync'

const generateFavIconFunc = () => {
    return generateFavicon({
        masterPicture: config.entry,
        dest: config.output,
        iconsPath: '',
		design: {
			ios: {
				pictureAspect: 'noChange',
				assets: {
					ios6AndPriorIcons: false,
					ios7AndLaterIcons: false,
					precomposedIcons: false,
					declareOnlyDefaultIcon: true
				}
			},
			desktopBrowser: {
				design: 'raw'
			},
			windows: {
				pictureAspect: 'noChange',
				backgroundColor: config.appColour,
				onConflict: 'override',
				assets: {
					windows80Ie10Tile: false,
					windows10Ie11EdgeTiles: {
						small: false,
						medium: true,
						big: false,
						rectangle: false
					}
				}
			},
			androidChrome: {
				pictureAspect: 'noChange',
				themeColor: config.appColour,
				manifest: {
					display: 'standalone',
					orientation: 'notSet',
					onConflict: 'override',
					declared: true
				},
				assets: {
					legacyIcon: false,
					lowResolutionIcons: false
				}
			},
			safariPinnedTab: {
				pictureAspect: 'blackAndWhite',
				threshold: 75,
				themeColor: config.appColour
			}
		},
        settings: {
            scalingAlgorithm: 'Mitchell',
            errorOnImageTooSmall: false,
			readmeFile: false,
			htmlCodeFile: false,
			usePathAsIs: false
        },
        markupFile: config.jsonTemplate
    })
}

export const favicon = (cb) => {
    generateFavIconFunc()
    cb()
}
