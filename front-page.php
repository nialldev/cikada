<?php 

/**
 * The main template file
 */

get_header();

?>
 
 <header class="header-video">
   <?php the_custom_header_markup();?>
    </header>
  

  <div class="shows-block">
     <?php get_sidebar( 'home-first' ); ?>
             </div>           
                
  <?php get_sidebar( 'home-second' ); ?>
                                    
 <?php  get_footer(); ?>
        
        
    
