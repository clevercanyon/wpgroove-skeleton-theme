<?php
/** WP Groove™ <https://wpgroove.com>
 *  _       _  ___       ___
 * ( )  _  ( )(  _`\    (  _`\
 * | | ( ) | || |_) )   | ( (_) _ __   _      _    _   _    __  ™
 * | | | | | || ,__/'   | |___ ( '__)/'_`\  /'_`\ ( ) ( ) /'__`\
 * | (_/ \_) || |       | (_, )| |  ( (_) )( (_) )| \_/ |(  ___/
 * `\___x___/'(_)       (____/'(_)  `\___/'`\___/'`\___/'`\____)
 */
/**
 * Theme Name: Skeleton Theme
 * Theme URI: https://wpgroove.com/product/skeleton-theme
 *
 * Description: This is a skeleton directory for new WP Groove WordPress themes.
 * Tags: blog, one-column, custom-background, custom-colors, custom-logo, custom-menu, editor-style, featured-images, footer-widgets, full-width-template, rtl-language-support, sticky-post, theme-options, threaded-comments, translation-ready, block-styles, wide-blocks, accessibility-ready
 *
 * Version: 1.0.0
 * Stable tag: 1.0.0
 *
 * Requires PHP: 7.4
 * Requires at least: 5.8.2
 * Tested up to: 5.8.2
 *
 * Author: WP Groove
 * Author URI: https://wpgroove.com
 * Donate link: https://wpgroove.com/donate
 * Contributors: clevercanyon
 *
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Text Domain: wpgroove-skeleton-theme
 * Domain Path: /languages
 *
 * Update URI: https://wpgroove.com/product/skeleton-theme/update
 */
namespace WP_Groove\Skeleton_Theme;

/**
 * No direct access.
 *
 * @since 1.0.0
 */
if ( ! defined( 'WPINC' ) ) {
	exit( 'No direct access.' );
}

/**
 * Loads theme.
 *
 * @since 1.0.0
 */
require_once __DIR__ . '/vendor/autoload.php';
Theme::load( __FILE__, '1.0.0' /* @version */ );
