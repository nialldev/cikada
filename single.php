<?php 

/**
 * The template for displaying all single posts
 *
 * Theme: Cikada
 * Author: Niall Tuohy
 
 */

get_header();

?>

<main class="post-main">

<?php 
    
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_title('<h1>', '</h1>'); ?>
    <div class="post-meta">
       <?php
        if ( (bool) get_the_author_meta( 'description' ) ) : ?>
        <div class="author-bio">
            <p class="author-title">
                <span class="author-heading">
                    <?php
                    printf(
                        /* translators: %s: post author */
                        __( 'Published by %s', 'cikada' ),
                        esc_html( get_the_author() )
                    );
                    ?>
                </span>
            </p>
          
        </div><!-- .author-bio -->
        <?php endif; ?>
        <p class="post-date"><?php the_time('F j, Y'); ?></p>
        </div>
    <?php the_content(); ?>
    
    
    <div class="single-post-nav">
    <span class="single-post-nav-prev">
<?php previous_post_link('&laquo; %link', 'Previous: %title'); ?>
        </span>
    <span class="single-post-nav-next">
    
        <?php next_post_link('%link &raquo;', 'Next: %title'); ?>
    
    </span>
    </div>
    <?php
    // Previous/next post navigation.
         /*   the_post_navigation( array(
                'next_text' => '<span class="post-title nav-next">%title &gt;&gt;</span>' . '<span class="meta-nav nav-next" aria-hidden="true">' . __( 'Next:', 'cikada' ) . '</span> ',
                
                'prev_text' => '<span class="meta-nav nav-prev" aria-hidden="true">' . __( '&lt;&lt; Previous:', 'cikada' ) . '</span> ' . '<span class="post-title nav-prev">%title</span>' ,
                'screen_reader_text' => __( 'Post navigation', 'cikada' ),
                
            ) );*/
    ?>
    
 </main>
 
 <div class="post-comments">
<?php 

 
            
     if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
endwhile; 

else :

    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );

endif;
?>

</div>

<?php
get_footer();
?>


<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 
 
get_header(); ?>
 
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
 
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
 
            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called called content-___.php
             * (where ___ is the post format) and that will be used instead.
             
            get_template_part( 'content', get_post_format() );
 
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
 
            // Previous/next post navigation.
            the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
            ) );
 
        // End the loop.
        endwhile;
        ?>
 
        </main><!-- .site-main -->
    </div><!-- .content-area -->
 
<?php get_footer(); ?>*/