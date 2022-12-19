<?php
/**
* Plugin Name: Мой супер плагин
* Plugin URI: https://github.com/net22sky/wp-vue-sidebar
* Description: Этот плагин делает мир лучше!
* Version: 1.0.0
* Author: WordPress студия NV3
* Author URI: https://nv3.ru/
* License: GPL2
*/

// don't call the file directly
    if ( !defined( 'ABSPATH' ) ) exit;

new VUE_SIDEBAR;

class VUE_SIDEBAR {
    protected $_java_path;
    protected $_yui_path;

    function __construct() {

    }

}