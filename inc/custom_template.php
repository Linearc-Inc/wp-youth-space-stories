<?php 


/* Filter the single_template with our custom function*/
add_filter('single_template', 'story_custom_template');

function story_custom_template($single) {
    global $post;

    /* Checks for single template by post type */
    if ( $post->post_type == 'stories' ) {
        if ( file_exists( youth_space_stories_plugin_dir_path() . '/page-templates/single-stories.php' ) ) {
            return youth_space_stories_plugin_dir_path() . '/page-templates/single-stories.php';
        }else{
          die(youth_space_stories_plugin_dir_path() . '/page-templates/single-stories.php');
        }
    }

    return $single;

}