<?php
/*
Plugin Name: w3tc-footer-remover
Description: This plugin is for removing the annoying footer generated by w3tc
Version: 1.0.1
Author: Ryan NA
Author URI: https://au.linkedin.com/in/na-yan-28bbb0b6
Network: True
*/


function remove_footer(){
	// Disable W3TC footer comment for everyone but Admins (single site & network mode)
	if(!current_user_can('activate_plugins')){
	 	add_filter('w3tc_can_print_comment','__return_false',10,1);
	}

	// Disable W3TC footer comment for all users
	//add_filter('w3tc_can_print_comment','__return_false',10,1);
}

add_action('plugins_loaded','remove_footer');




