<?php 
add_action("wp_enqueue_scripts", "get_my_scripts");

function get_my_scripts(){
    wp_enqueue_style("style", get_stylesheet_directory_uri() ."/style.css");
  
}
?>