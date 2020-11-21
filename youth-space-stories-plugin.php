<?php
/**
 * Plugin Name:Youth Space Stories
 * Plugin URI: https://www.linearc.biz/profile/
 * Description: This creates suscribe, unsuscribe and email verification compatibility for linearc site.
 * Version: 1.2
 * GitHub Plugin URI: https://github.com/Linearc-Inc/wp-youth-space-stories
 * Author: Isakiye Afasha
 * Author URI: http://www.iamafasha.com
 */
// Make sure we don't expose any info if called directly

if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

function youth_space_stories_plugin_dir_path(){
  return plugin_dir_path(__FILE__);
}

function youth_space_stories_plugin_dir_url(){
  return plugin_dir_url( __FILE__ );
}

require_once plugin_dir_path( __FILE__ ).'/classes/Updater.php';
require_once plugin_dir_path( __FILE__ ).'/classes/PageTemplater.php';
require_once plugin_dir_path( __FILE__ ).'/inc/custom_template.php';
require_once plugin_dir_path( __FILE__ ).'/inc/custom-post-type-stories.php';
require_once plugin_dir_path( __FILE__ ).'/inc/shortcode.php';

if ( is_admin() ) {
  //  new Linearc\Plugin\YouthSpaceStories\Updater( __FILE__, 'Linearc-Inc', "wp-youth-space-stories");
}