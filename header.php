<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<div class="wrapper">
    <header class="top_header">
        <div class="container cf">
            <div class="header_third search_section menu_button cf">
                <div class="menu_icon">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times" style="display: none;"></i>
                </div>
                <div class="search_box">
                    <?php echo get_search_form(); ?>
                </div>
            </div>
            <div class="header_third logo_section">
                <a href="<?php echo home_url("/"); ?>" class="logo_link"><img src="<?php echo ale_get_option('sitelogo'); ?>" alt="" /></a>
            </div>
            <div class="header_third social_section">
                <?php if(ale_get_option('vm')) { ?><a href="<?php echo ale_get_option('vm'); ?>" class="social_link"><i class="fab fa-vimeo-v"></i></a><?php } ?>
                <?php if(ale_get_option('insta')) { ?><a href="<?php echo ale_get_option('insta'); ?>" class="social_link"><i class="fab fa-instagram"></i></a><?php } ?>
                <?php if(ale_get_option('twi')) { ?><a href="<?php echo ale_get_option('twi'); ?>" class="social_link"><i class="fab fa-twitter-square"></i></a><?php } ?>
                <?php if(ale_get_option('fb')) { ?><a href="<?php echo ale_get_option('fb'); ?>" class="social_link"><i class="fab fa-facebook-f"></i></a><?php } ?>
            </div>
        </div>
        <nav class="top_navigation">
            <div class="container">
                <?php
                if ( has_nav_menu( 'header_menu' ) ) {
                    wp_nav_menu(array(
                        'theme_location'=> 'header_menu',
                        'menu'			=> 'Header Menu',
                        'menu_class'	=> 'ale_headermenu cf',
                        'walker'		=> new Aletheme_Nav_Walker(),
                        'container'		=> '',
                    ));
                }
                ?>
                <div class="donate_button">
                    <a href="<?php //echo ale_get_option('donate_link'); ?>"><?php _e('Donate', 'iglesia'); ?></a>
                </div>
            </div>
        </nav>
    </header>
    <section class="home_slider"></section>
</div>