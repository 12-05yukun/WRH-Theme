<?php 
// Register Custom Post Type 



require_once('whr-post.php');

function enque_whr_stuff() {
    wp_enqueue_style( 'whr-style', get_template_directory_uri().'/whr/whr.css' );
    wp_enqueue_style( 'whr-font', 'https://fonts.googleapis.com/css2?family=Noto+Serif&family=Work+Sans:wght@400;700&display=swap"');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
    wp_enqueue_style( 'whr-slider', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_script( 'whr-slider-script', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true );
    wp_enqueue_script( 'whr-calendar-script2', get_template_directory_uri().'/whr/pickmeup.min.js', array('jquery'), '1.4.14', true );
    wp_enqueue_script( 'whr-scroll-reveal', 'https://unpkg.com/scrollreveal', array('jquery'), '1.4.1', true );
    wp_enqueue_style( 'whr-calendar-style2', get_template_directory_uri().'/whr/pickmeup.css');
    //wp_enqueue_script( 'whr-reveal', 'https://unpkg.com/scrollreveal', array('jquery'), '1.8.1', false );
    //wp_enqueue_script( 'whr-number', '//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js', array('jquery'), '2.0.6', false );
    wp_enqueue_script( 'whr-script', get_template_directory_uri() . '/whr/whr.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'enque_whr_stuff' );

add_action('get_header', 'remove_admin_login_header');

//remove comments
add_action('admin_menu', function () {
        remove_menu_page('edit-comments.php');
    });
add_action('init', function () {
        if (is_admin_bar_showing()) {
            remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 0);
        }
    });

add_action('acf/init', 'my_acf_op_init');


add_action( 'init', 'create_kontakt', 0 );
add_action( 'init', 'create_job', 0 );
add_action( 'init', 'create_room', 0 );
add_action( 'init', 'create_angebot', 0 );
add_action( 'init', 'disable_editor', 0 );


add_filter('acf/update_value/type=date_time_picker', 'my_update_value_date_time_picker', 10, 3);

function my_update_value_date_time_picker( $value, $post_id, $field ) {
    return strtotime( $value );
}

function remove_admin_login_header() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}

function disable_editor() {
  remove_post_type_support('page', 'editor'); 
  remove_post_type_support('post', 'editor');          
}

function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('WRH Settings'),
            'menu_title'    => __('WRH Settings'),
            'menu_slug'     => 'WRH-settings',
            'capability'    => 'manage_options',
            'redirect'      => false
        ));
    }

  function render_content($id = null) {
      if(!$id) {
             $id = get_the_id();
      }
      $content = get_field('inhalt', $id);
      if($content) {
           foreach($content as $block) {
                $template = get_template_directory().'/whr/inhalt/'.$block['acf_fc_layout'].'.php';
                if(!file_exists($template)) {
                     echo '<div class="row layout-'.$block['acf_fc_layout'].'">Achtung, kein Templatefile definiert: '.$block['acf_fc_layout'].'</div>';
                     continue;
                }
                
                include $template;
                
           }
      }
   }

}