<?php

/**
 * Plugin Name: Complex Page Plugin
 * Plugin URI: https://thecustomizewindows.com/2015/05/create-wordpress-plugin-to-avoid-snippets-on-themes-functions-php/
 * Description: Custom plugin to add snippets with a blank admin page.
 * Author: Abhishek Ghosh
 * Author URI: https://thecustomizewindows.com
 * Version: 2.0
 */
 
// add snippets here

// complexplugin-admin-page.php and complexplugin-admin-sub-page.php are two blank sub php pages

add_action( 'admin_menu', 'complex_admin_menu' ); 
function complex_admin_menu() { 
 add_menu_page( 'Complex Top Level Menu Example', 'Complex Top Level Menu', 'manage_options', 'complexplugin/complexplugin-admin-page.php', 'complexplguin_admin_page', 'dashicons-tickets', 6 ); 
 add_submenu_page( 'complexplugin/complexplugin-admin-page.php', 'Complex Plugin Sub Level Menu Example', 'Sub Level Menu', 'manage_options', 'complexplugin/complexplugin-admin-sub-page.php', 'complexplguin_admin_sub_page' ); 
}


// php better not to close unless needed ?>