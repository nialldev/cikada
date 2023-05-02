<?php
/**
 * The template for displaying all single pages

 */

get_header();
?>

	<div class="main-container">
              
                    
            <?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
               <div class="page-intro-title">
                        <div class="title-wrapper"><?php the_title('<h1>', '</h1>'); ?></div>
                    </div>
                <?php 
                the_content(); 
				

			endwhile; // End of the loop.
			?>
</div>
<?php
get_footer();
