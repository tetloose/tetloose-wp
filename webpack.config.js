import path from 'path'
import UglifyJsPlugin from 'uglifyjs-webpack-plugin'
import MiniCssExtractPlugin from 'mini-css-extract-plugin'
import CssMinimizerPlugin from 'css-minimizer-webpack-plugin'
import config from './.gulp/config'

module.exports = {
    mode: config.webpack.mode ? 'development' : 'production',
    entry: config.webpack.entry,
    output: {
        path: path.resolve(__dirname, config.webpack.output),
        filename: config.webpack.mode
            ? 'js/[name].js'
            : 'js/[name].[contenthash].js',
        chunkFilename: config.webpack.mode
            ? 'js/[name].js'
            : 'js/[name].[contenthash].js'
    },
    stats: 'minimal',
    resolve: {
        extensions: ['.ts', '.tsx', '.js', '.css', '.scss']
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
            },
            {
                test: /\.styles.scss$/,
                use: [
                    config.webpack.mode ? 'style-loader' : MiniCssExtractPlugin.loader,
                    {
                        loader: 'css-loader',
                        options: {
                            sourceMap: true
                        }
                    },
                    {
                        loader: 'postcss-loader'
                    },
                    {
                        loader: 'sass-loader',
                        options: {
                            implementation: require('sass'),
                            sourceMap: true
                        }
                    }
                ]
            },
            {
                test: /\.module.scss$/,
                use: [
                    config.webpack.mode ? 'style-loader' : MiniCssExtractPlugin.loader,
                    {
                        loader: 'css-modules-typescript-loader'
                    },
                    {
                        loader: 'css-loader',
                        options: {
                            modules: true,
                            sourceMap: true
                        }
                    },
                    {
                        loader: 'postcss-loader'
                    },
                    {
                        loader: 'sass-loader',
                        options: {
                            implementation: require('sass'),
                            sourceMap: true
                        }
                    }
                ]
            }
        ]
    },
    devtool: config.webpack.mode ? 'inline-source-map' : false,
    plugins: [
        new MiniCssExtractPlugin({
            filename: config.webpack.mode
                ? 'css/[name].css'
                : 'css/[name].[contenthash].css',
            chunkFilename: config.webpack.mode
                ? 'css/[name].css'
                : 'css/[name].[contenthash].css'
        })
    ],
    optimization: {
        minimize: !config.webpack.mode,
        minimizer: [
            new CssMinimizerPlugin(),
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
                    filename: config.webpack.mode
                        ? 'js/vendors.js'
                        : 'js/vendors.[contenthash].js',
                    chunks: 'all'
                }
            }
        }
    }
}
