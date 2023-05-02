<?php 

if ( ! function_exists( 'myfirsttheme_setup' ) ) :
/**
* Sets up theme defaults and registers support for various WordPress features
*
*  It is important to set up these functions before the init hook so that none of these
*  features are lost.
*
*  @since MyFirstTheme 1.0
*/
function myfirsttheme_setup() {
    add_theme_support( 'automatic-feed-links' );
    
    register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'cikada' ),
    'secondary' => __( 'Secondary Menu', 'cikada' )
) );
    
    add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 200, 200);

add_theme_support( 'custom-background' );

$defaults = array(
	
    'width'                 => 1000,
	'height'                 => 500,
    'flex-width'             => true,
    'flex-height'        => true,
    'uploads'                => true,
    'video'                  => true,
);
add_theme_support( 'custom-header', $defaults );
    
    
    
add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 100 )
);

add_filter( 'get_custom_logo', 'change_logo_class' );


function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo', 'nav-title', $html );

    return $html;
}

add_theme_support( 'title-tag' );
add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

register_sidebar( array(
        'name'          => __( 'Top Sidebar', 'cikada' ),
        'id'            => 'sidebar-1',
        'description'   => __('The space after the main navigation in the top right of the screen.', 'cikada'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        
) );
  register_sidebar( array(
        'name'          => __( 'Bottom Sidebar', 'cikada' ),
        'id'            => 'sidebar-2',
        'description'   => __('The middle section of the footer.', 'cikada'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s social-icons-btm">',
        'after_widget'  => '</aside>',
        
) );  
      register_sidebar( array(
        'name'          => __( 'Right Sidebar', 'cikada' ),
        'id'            => 'sidebar-3',   
        'before_widget' => '<div id="%1$s" class="widget %2$s right-sidebar-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
          'after_title' => '</h3>',
        
) );  
     register_sidebar( array(
        'name'          => __( 'Home First Sidebar', 'cikada' ),
        'id'            => 'sidebar-4',
        'description'   => __('The first section of the home page.', 'cikada'),
        'before_widget' => '<div id="%1$s" class="widget %2$s home-shows">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="title-wrapper"><a href="http://cikada.yohut.ie/shows"><h2>',
        'after_title' => '</h2></a></div>',
) );  
    register_sidebar( array(
        'name'          => __( 'Home Second Sidebar', 'cikada' ),
        'id'            => 'sidebar-5',
        'description'   => __('The second section of the home page.', 'cikada'),
        'before_widget' => '<div id="%1$s" class="widget %2$s home-about clearfix">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="title-wrapper"><a href="http://cikada.yohut.ie/about"><h2>',
        'after_title' => '</h2></a></div>',
) ); 
};

 endif;
add_action( 'after_setup_theme', 'myfirsttheme_setup' );


function my_theme_scripts(){
wp_enqueue_style( 'style', get_stylesheet_uri() );

    
wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/functions.js', array(), '1.1', true );
};

add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    if ( ! is_single() ) {
        $more = sprintf( '</br></br><a class="read-more" href="%1$s">%2$s</a>',
            get_permalink( get_the_ID() ),
            __( 'Read More', 'textdomain' )
        );
    }
 
    return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/*
Change the comment form field values
*/
function comment_form_text ($fields) {
    $fields['label_submit'] = 'Post Comment';
    $fields['title_reply'] = 'Leave a comment';
    
    return $fields;
    
}

add_filter('comment_form_defaults', 'comment_form_text');

/*
Change the comment form fields to remove the url
*/

function comment_form_fields ($fields) {
    $fields['url'] = '';
    
    
    return $fields;
}

add_filter('comment_form_default_fields', 'comment_form_fields');




?>