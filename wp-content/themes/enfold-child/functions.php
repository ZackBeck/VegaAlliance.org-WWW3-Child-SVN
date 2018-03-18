<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_ext1', 'https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700' );
        wp_enqueue_style( 'chld_thm_cfg_separate', trailingslashit( get_stylesheet_directory_uri() ) . 'ctc-style.css', array( 'avia-grid','avia-base','avia-layout','avia-module-button','avia-module-hr','avia-module-icon','avia-module-numbers','avia-module-portfolio','avia-module-table','layerslider-front','layerslider','avia-scs','avia-popup-css','avia-print','avia-custom' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css' );

// END ENQUEUE PARENT ACTION

// BEGIN Category Metabox sizing.

function change_cat_meta_postbox_css(){
   ?>
   <style type="text/css">
   .wp-tab-panel, .categorydiv div.tabs-panel,
   .customlinkdiv div.tabs-panel,
   .posttypediv div.tabs-panel,
   .taxonomydiv div.tabs-panel {
       min-height: 200px;
       max-height: 500px;/* change this to own wishes */
   }
#poststuff #post-body.columns-2 {
    margin-right: 370px;
}
   #post-body.columns-2 #postbox-container-1 {
    margin-right: -370px;
    width: 350px;
}
#poststuff #post-body.columns-2 #side-sortables {
    width: 350px;
}
   </style>
   
<?php
}

add_action('admin_head', 'change_cat_meta_postbox_css');

// END Category Metabox sizing.
