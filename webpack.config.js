const defaultConfig = require("./node_modules/@wordpress/scripts/config/webpack.config");
const path = require('path');

module.exports = {
	...defaultConfig,
	entry: ['./blocks/index.js', './blocks/editor.scss', './blocks/frontend.scss'],
	output: {
		path: path.resolve(__dirname, 'assets'),
		filename: 'js/editor.blocks.js',
	},
	module: {
		rules: [
			/**
			 * Running Babel on JS files.
			 */
			...defaultConfig.module.rules,
			{
				test: /\.scss$/,
				use: [
					{
						loader: 'file-loader',
						options: {
							name: 'css/[name].blocks.css',
						}
					},
					{
						loader: 'extract-loader'
					},
					{
						loader: 'css-loader?-url'
					},
					{
						loader: 'postcss-loader'
					},
					{
						loader: 'sass-loader'
					}
				]
			}
		]
	}
};
