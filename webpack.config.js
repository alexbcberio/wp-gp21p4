const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const path = require("path");
const webpack = require('webpack');

const devMode = process.env.NODE_ENV === "development";
const outDir = "assets";

const webpackConfig = {
  mode: devMode ? "development" : "production",
  entry: [
    "./src/index.js",
    "./src/scss/main.scss"
  ],
  output: {
    path: path.resolve(__dirname, outDir),
    filename: "app.js",
  },
  module: {
    rules: [
      {
        test: /\.(sa|sc|c)ss$/i,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'sass-loader',
        ],
      }
    ],
  },
  plugins: [
    new webpack.ProgressPlugin(),
    new CleanWebpackPlugin(),
    new MiniCssExtractPlugin({
      filename: '[name].css',
      chunkFilename: '[id].css',
    })
  ],
  optimization: {
    minimize: !devMode,
    minimizer: [
      "...",
      new CssMinimizerPlugin()
    ]
  }
};

if (devMode) {
  webpackConfig.devtool = "inline-source-map";
}

module.exports = webpackConfig;