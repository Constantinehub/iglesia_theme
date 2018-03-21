    <!-- Footer -->

    <footer class="main-footer <?php if(!is_page_template('page-home.php')) {echo 'border-top-footer'; } ?>">
        <div class="top_footer">
            <div class="container">
                <div class="footer_logo footer_inner">
                    <?php if(ale_get_option('footerlogo')) { ?>
                        <a href="<?php echo home_url("/"); ?>" class="logo_link"><img src="<?php echo ale_get_option('footerlogo'); ?>" alt="" /></a>
                    <?php } ?>
                </div>
                <div class="footer_menu footer_inner">
                    <h5><?php _e('Information','alethemes'); ?></h5>
                    <?php
                    if ( has_nav_menu( 'footer_menu' ) ) {
                        wp_nav_menu(array(
                            'theme_location'=> 'footer_menu',
                            'menu'			=> 'Footer Menu',
                            'menu_class'	=> 'footermenu cf',
                            'walker'		=> new Aletheme_Nav_Walker(),
                            'container'		=> '',
                        ));
                    }
                    ?>
                </div>
                <div class="footer_contact footer_inner">
                    <h5><?php _e('Contacts','alethemes'); ?></h5>
                    <?php if(ale_get_option('footer_phone')) { ?>
                        <div class="footer_phone"><?php echo ale_get_option('footer_phone'); ?></div>
                    <?php } ?>
                    <?php if(ale_get_option('footer_address')) { ?>
                        <div class="footer_address"><?php echo ale_get_option('footer_address'); ?></div>
                    <?php } ?>
                    <?php if(ale_get_option('footer_email')) { ?>
                        <div class="footer_email"><a href="mailto:<?php echo ale_get_option('footer_email'); ?>"> <?php echo ale_get_option('footer_email'); ?></a></div>
                    <?php } ?>
                </div>
                <div class="footer_twitter footer_inner">
                    <?php get_sidebar('footer'); ?>
                </div>
            </div>
        </div>
        <div class="bottom_footer">
            <div class="container">
                <div class="copyrights">
                    <!--  Copyright  -->
                    <?php if (ale_get_option('copyrights')) : ?>
                        <?php echo ale_option('copyrights'); ?>
                    <?php else: ?>
                        &copy; <?php _e('2013 All Rights Reserved “Iglesia”', 'aletheme')?>
                    <?php endif; ?>
                </div>
                <div class="footer_social">
                    <?php if(ale_get_option('vm')) { ?><a href="<?php echo ale_get_option('vm'); ?>" class="social_link"><i class="fab fa-vimeo-v"></i></a><?php } ?>
                    <?php if(ale_get_option('insta')) { ?><a href="<?php echo ale_get_option('insta'); ?>" class="social_link"><i class="fab fa-instagram"></i></a><?php } ?>
                    <?php if(ale_get_option('twi')) { ?><a href="<?php echo ale_get_option('twi'); ?>" class="social_link"><i class="fab fa-twitter-square"></i></a><?php } ?>
                    <?php if(ale_get_option('fb')) { ?><a href="<?php echo ale_get_option('fb'); ?>" class="social_link"><i class="fab fa-facebook-f"></i></a><?php } ?>
                </div>
            </div>
        </div>
    </footer>
</div>

    <!-- Scripts -->
    <?php wp_footer(); ?>
</body>
</html>