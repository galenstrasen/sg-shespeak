<?php

define('CAT_FRIENDS', 16);
define('CAT_ACTIVISTS', 15);
define('CAT_BOOKS', 17);

// THEME SETUP
require_once('inc/theme-setup.php');

// ENQUEUE SCRIPTS & STYLES
require_once('inc/load-scripts.php');

// REGISTER CUSTOM POST TYPE
require_once('inc/register-post-type.php');

// REGISTER CUSTOM TAXONOMY
//require_once('inc/register-taxonomy.php');

// REGISTER SIDEBARS
require_once('inc/register-sidebars.php');

// REGISTER MENUS
require_once('inc/register-menus.php');

// CUSTOM CAT TEMPLATE
require_once('inc/custom-cat-template.php');

// CUSTOM EXCERPT LENGTHS
require_once('inc/custom-excerpts.php');

// CUSTOM IMAGE SIZE
require_once('inc/custom-img-size.php');

// FAMILY TREE
require_once('inc/is-tree.php');

// require_once('inc/gravity_form_filters.php');

// MAP FUNC
require_once('inc/map-function.php');

// HIDES ADMIN BAR FOR DEV PURPOSES - this can also be done via Dashboard in WP Engine options
 add_filter('show_admin_bar', '__return_false');

// ACF - Add Multiple Options Pages (you need to have the ACF Options Page Add-On installed
require_once('inc/options-pages.php');

// CUSTOM DASHBOARD WIDGET
// require_once('inc/dashboard-widget.php');

?>