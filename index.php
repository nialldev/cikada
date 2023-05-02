<?php 

get_header();

?>


            <!--<?php if ( get_header_image() ) : ?>
    <header>
    
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
    
</header>
<?php endif; ?>-->  
<div class="post-container">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   
   
   <div class="home-posts clearfix">

        <div class="home-posts-content">
    <?php 
       
       the_title('<h3><a href="' . get_permalink( get_the_ID() ) . '">', '</a></h3>'); ?>
       <div><p><?php echo get_the_date(); ?></p></div>
       <div class="home-posts-content-align">
       <?php if ( has_post_thumbnail()) : ?>
    <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
<?php endif; ?>
    
    <?php the_excerpt(); ?>
    </div>
         </div>
     </div>
<?php 

endwhile; 

else :

    _e( 'Sorry, there are no posts available.', 'textdomain' );

endif;


?>

 <div class="pagination clearfix">
<?php the_posts_pagination(); ?>
    	
</div>
</div>
<aside class="right-sidebar">
    <?php get_sidebar('right') ?>
</aside>

<?php get_footer();
?>