<?php
function ru_setup_theme() {
  // Unneeded except for older wp versions
  // add_theme_support( 'menus' );

  register_nav_menu(
    'primary',
    __( 'Primary Menu', 'udemy' )
  );
}
?>
