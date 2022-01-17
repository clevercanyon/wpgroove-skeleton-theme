<?php
/**
 * WP Groove™ {@see https://wpgroove.com}
 *  _       _  ___       ___
 * ( )  _  ( )(  _`\    (  _`\
 * | | ( ) | || |_) )   | ( (_) _ __   _      _    _   _    __  ™
 * | | | | | || ,__/'   | |___ ( '__)/'_`\  /'_`\ ( ) ( ) /'__`\
 * | (_/ \_) || |       | (_, )| |  ( (_) )( (_) )| \_/ |(  ___/
 * `\___x___/'(_)       (____/'(_)  `\___/'`\___/'`\___/'`\____)
 */
// <editor-fold desc="Strict types, namespace, use statements, and other headers.">

/**
 * Declarations & namespace.
 *
 * @since 2021-12-25
 */
declare( strict_types = 1 );
namespace WP_Groove\Skeleton_Theme;

/**
 * Utilities.
 *
 * @since 2021-12-15
 */
use Clever_Canyon\{Utilities as U};

/**
 * Framework.
 *
 * @since 2021-12-15
 */
use WP_Groove\{Framework as WPG};

/**
 * Theme.
 *
 * @since 2021-12-15
 */
use WP_Groove\{Skeleton_Theme as WP};

// </editor-fold>

/**
 * Theme.
 *
 * @since 2021-12-15
 */
class Theme extends WPG\A6t\Theme {
	/**
	 * On `after_setup_theme` hook.
	 *
	 * @since 2021-12-15
	 */
	public function on_after_setup_theme() : void {
		parent::on_after_setup_theme();
		// Nothing for now.
	}

	/**
	 * On `init` hook.
	 *
	 * @since 2021-12-15
	 */
	public function on_init() : void {
		parent::on_init();
		// Nothing for now.
	}
}
