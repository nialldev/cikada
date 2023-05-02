<?php

/**
 * The template for displaying 404 pages (Not Found)
 */


get_header(); 

?>
            <div class="main-container">
            
             <h1 class="not-found"><?php _e('Error 404', 'cikada'); ?></h1>
               <h2 style="text-align: center;"><?php _e('Oops! This page cannot be found.', 'cikada'); ?></h2>
               <p style="text-align: center; color: white;"><?php _e('Please ensure you typed the correct address into the URL bar and try again or select a page from the main menu.', 'cikada'); ?></p>
                
</div>
<?php get_footer(); ?>
