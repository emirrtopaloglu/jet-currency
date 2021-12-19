<?php
/**
 * Temajet Core
 *
 * @package           Temajet
 * @author            Emir Topaloğlu
 * @copyright         2021 Temajet
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Jet - Döviz, Altın, Kripto
 * Plugin URI:        https://temajet.com/
 * Description:       Temajet teması için döviz, altın ve kripto para birimi fiyatını gösteren bileşen ve sayfa şablonu için eklenti.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Temajet
 * Author URI:        https://temajet.com/
 * Text Domain:       jet-currency
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

defined( 'ABSPATH' ) || exit; // Exit directly

// Plugins Files

require_once( 'doviz-widget.php' );
require_once( 'crypto-widget.php' );

// Styles & Scripts

function temajet_core_scripts() {
    wp_register_style( 'jet-currency', plugins_url('style.css', __FILE__) );
    wp_enqueue_style( 'jet-currency' );

    wp_enqueue_script( 'jet-currency', plugin_dir_url( __FILE__ ) . 'main.js', array('jquery'), true, true );
}   

add_action('wp_enqueue_scripts', 'temajet_core_scripts');


?>