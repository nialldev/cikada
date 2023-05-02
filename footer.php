  <footer>
           <div class="nav-btm">
           
           <?php get_sidebar( 'bottom' ); ?>
             
           <?php wp_nav_menu(
              array(
                'theme_location'  => 'secondary',
                'container'       =>  NULL,
                'container_class' =>  NULL,
                'menu_class'      => 'footer-navbar',
                'menu_id'         => 'footer-navbar',

              )
            ); ?>
            
            <hr>
            <div class="sign">
				<sub>Powered by <a href="https://wordpress.org/">Wordpress</a>. Theme design by: Niall Tuohy &copy; <?php echo date("Y"); ?></sub>
            </div>
            </div>
            
        </footer>
        
        <?php wp_footer(); ?>
    </body>
</html>