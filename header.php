<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="robots" content="noindex,nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        
            <div class="main-header">
                      
                      
                      
                       
                          <?php if ( function_exists( 'the_custom_logo' ) ) {
                                     the_custom_logo();
                                    }; ?>
                           
                       
        
        <a href="javascript:void(0)" onclick="toggleNav()">
             <div class="nav-icon">
                   <img src="<?php echo get_template_directory_uri(); ?>/img/burger-icon.png"/>
             </div>
        </a>
         <?php wp_nav_menu(
              array(
                'theme_location'  => 'primary',
                'container'       => 'nav',
                'container_class' => 'main-nav clearfix navbar-home',
                'menu_class'      => 'navbar',
                'menu_id'         => 'navbar',

              )
            ); ?>
              
                <div id="sidebar-top">
             <?php get_sidebar( 'top' ); ?>
             </div>
             
            </div>