<?php 

function lastest_stories_func( $atts ){
    
    $story = <<<XML
        
XML;
    include youth_space_stories_plugin_dir_path ().'page-templates/latest_stories.php';
    return $story;
}
add_shortcode( 'lastest_stories', 'lastest_stories_func' );