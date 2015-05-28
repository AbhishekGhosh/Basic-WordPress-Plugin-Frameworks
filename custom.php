<?php

/**
 * Plugin Name: Admin Page Plugin
 * Plugin URI: https://thecustomizewindows.com/2015/05/create-wordpress-plugin-to-avoid-snippets-on-themes-functions-php/
 * Description: Custom plugin to add snippets with a blank admin page.
 * Author: Abhishek Ghosh
 * Author URI: https://thecustomizewindows.com
 * Version: 2.0
 */
 
// add snippets here

// custom_plugin, custom plugin, custom are our special names

add_action('admin_menu', 'custom_plugin_setup_menu');
function test_plugin_setup_menu(){
	add_menu_page( 'Custom Plugin Page', 'Custom Plugin', 'manage_options', 'custom-plugin', 'custom_init' );

}
function custom_init(){
	echo "<h1>Admin Function Plugin</h1>";

}


// php better not to close unless needed ?>