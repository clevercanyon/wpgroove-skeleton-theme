/**
 * Cssnano config file.
 *
 * @since 1.0.0
 *
 * @note Cssnano doesn't know to look for `.cssnanorc.cjs` files, unfortunately.
 * If you ever need to call cssnano directly be sure to tell it where the config file lives.
 * It's not an issue at this time because we don't call it directly. This file is require()'d elsewhere.
 *
 * @note PLEASE DO NOT EDIT THIS FILE!
 * This file and the contents of it are updated automatically.
 * Instead of editing, please see source repository @ <https://git.io/JD8Zo>.
 */
/* eslint-env node */

module.exports = {
	preset : [
		'default',
		{
			discardComments : {
				removeAll : true,
			},
		},
	],
};