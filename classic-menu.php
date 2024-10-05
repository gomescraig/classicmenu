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

// Use a unique prefix for function names
function pixelvise_enable_classic_menu_ui() {
    add_theme_support('menus');
}
add_action('after_setup_theme', 'pixelvise_enable_classic_menu_ui');

// Remove unused register_classic_menus function
// If needed in the future, add specific locations here

// Function to display any menu by menu name or menu ID
function pixelvise_display_classic_menu_by_name_or_id($menu_name_or_id) {
    if (wp_get_nav_menu_object($menu_name_or_id)) {
        wp_nav_menu(array('menu' => $menu_name_or_id));
    } else {
        echo 'Menu not found';
    }
}
