<?php 

get_header();

?>


            <?php if ( get_header_image() ) : ?>
    <header>
    
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
    
</header>
<?php endif; ?> 
<?php if ( $paged < 2 ) : ?>
      <p>Text for first page of Category archive.</p>
<?php else : ?>
<?php endif; ?>  


<div class="post-container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   
   
   <div class="home-posts">
        <div class="home-posts-content">
    <?php 
       
       the_title('<h3><a href="' . get_permalink( get_the_ID() ) . '">', '</a></h3>'); ?>
       <p><?php the_time('F j, Y'); ?></p>
    <?php the_post_thumbnail(); ?>
    <?php the_excerpt(); ?>
    
         </div>
    </div>

<?php 

endwhile; 

else :

    _e( 'Sorry, there are no posts available.', 'textdomain' );

endif;


?>
</div>

<aside class="right-sidebar">
    <?php get_sidebar('right') ?>
</aside>

<?php get_footer();
?>