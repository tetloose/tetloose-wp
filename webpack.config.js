import path from 'path'
import UglifyJsPlugin from 'uglifyjs-webpack-plugin'
import config from './.gulp/config'

module.exports = {
    mode: config.webpack.mode ? 'development' : 'production',
    entry: config.webpack.entry,
    output: {
        path: path.resolve(__dirname, 'assets'),
        filename: config.webpack.mode
            ? 'js/[name].js'
            : 'js/[name].[contenthash].js',
        chunkFilename: config.webpack.mode
            ? 'js/[name].js'
            : 'js/[name].[contenthash].js'
    },
    stats: 'minimal',
    resolve: {
        extensions: ['.ts', '.tsx', '.js']
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                use: 'babel-loader',
                exclude: /node_modules/
            },
            {
                test: /\.ts(x)?$/,
                loader: 'ts-loader',
                exclude: /node_modules/
            }
        ]
    },
    devtool: config.webpack.mode ? 'inline-source-map' : false,
    plugins: [],
    optimization: {
        minimize: !config.webpack.mode,
        minimizer: [
            new UglifyJsPlugin()
        ],
        runtimeChunk: 'single',
        splitChunks: {
            chunks: 'all',
            maxInitialRequests: Infinity,
            minSize: 0,
            cacheGroups: {
                commons: {
                    test: /[\\/]node_modules[\\/]/,
                    filename: 'vendors.[contenthash].js',
                    chunks: 'all'
                }
            }
        }
    }
}
