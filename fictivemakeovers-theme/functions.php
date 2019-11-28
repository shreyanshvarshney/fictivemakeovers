<?php 
  
  function fictivemakeovers_files() {
      wp_enqueue_style('custom_google_font1', '//fonts.googleapis.com/css?family=Muli:400,800&display=swap');
      wp_enqueue_style('custom_google_font2', '//fonts.googleapis.com/css?family=Assistant|Kanit&display=swap');
      wp_enqueue_style('fictivemakeovers_main_styles', get_stylesheet_uri());
      wp_enqueue_script('font-awesome', '//use.fontawesome.com/7ee029a83b.js');
      
  }

  add_action('wp_enqueue_scripts','fictivemakeovers_files');
?>