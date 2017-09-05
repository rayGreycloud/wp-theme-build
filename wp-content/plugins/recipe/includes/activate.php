<?php

function r_activate_plugin() {
  // Check WP version
  if (version_compare(get_bloginfo('version'), '4.5', '<')) {
    wp_die(__('You must update WordPress to use this plugin', 'recipe'));
  }
}
 ?>
