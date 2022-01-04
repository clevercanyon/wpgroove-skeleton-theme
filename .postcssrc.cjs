/**
 * PostCSS config file.
 *
 * @since 1.0.0
 *
 * @note PostCSS is aware of this config file's location.
 *
 * @note PLEASE DO NOT EDIT THIS FILE!
 * This file and the contents of it are updated automatically.
 * Instead of editing, please see source repository @ <https://git.io/JD8Zo>.
 */
/* eslint-env node */

module.exports = function ( api ) {
	return {
		plugins : {
			'postcss-import'     : {},
			'tailwindcss'        : require( './.tailwindrc.cjs' ),
			'postcss-preset-env' : {
				stage    : 1,
				features : {
					'focus-within-pseudo-class' : false,
				},
			},
			'cssnano'            : require( './.cssnanorc.cjs' ),
		},
	};
};