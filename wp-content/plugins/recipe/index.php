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
define('RECIPE_PLUGIN_URL', __FILE__);

// Includes
include('includes/activate.php');
include('includes/init.php');
include('includes/admin/init.php');
include('process/save-post.php');

// Hooks
register_activation_hook(__FILE__, 'r_activate_plugin');
add_action('init', 'recipe_init');
add_action('admin_init', 'recipe_admin_init');
add_action('save_post_recipe', 'r_save_post_admin', 10, 3);

 ?>
