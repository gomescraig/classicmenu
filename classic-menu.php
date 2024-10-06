<?php
/*
Plugin Name: Classic Menus for Block Themes
Description: Activates the legacy menu system in block themes, allowing multiple menus alongside block themes.
Version: 1.1
Author URI: https://pixelvise.com
Author: Pixelvise
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function pixelvise_enable_classic_menu_ui() {
    add_theme_support('menus');
}
add_action('after_setup_theme', 'pixelvise_enable_classic_menu_ui');
