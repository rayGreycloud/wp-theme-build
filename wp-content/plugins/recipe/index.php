<?php
/*
 * Plugin Name: Recipe
 * Description: A simple WordPress plugin that allows users to create and rate recipes
 * Version: 1.0
 * Author: rayGreycloud
 * Author URI: http://rayGreycloud.com
 * Text Domain: recipe
 */


if (!function_exists('add_action')) {
  die("Sorry, plugin cannot be called directly");
}

// Setup


// Includes
include('includes/activate.php');

// Hooks
register_activation_hook(__FILE__, 'r_activate_plugin');
 ?>
