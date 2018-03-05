<?php get_header(); ?>
    <!-- Content -->

    <div class="contain contacts_box">
        <div class="container">
            <h2 class="page_title"><?php _e('Gallery','aletheme'); ?></h2>
                <div class="page_content gallery-page cf">
                    <?php
                    $i = 0;

                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="gallery-post">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                if($i == 2) {
                                    echo get_the_post_thumbnail($post->ID,'gallery-medium');
                                } else if($i == 7) {
                                    echo get_the_post_thumbnail($post->ID,'gallery-large');
                                } else {
                                    echo get_the_post_thumbnail($post->ID,'gallery-small');
                                }

                                $i++; ?>

                                <span class="mask">
                                    <span class="arrow"><i class="fas fa-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    <?php endwhile;  endif;  ?>
                </div>
                <?php global $wp_query;
                    if($wp_query->max_num_pages >1) {
                ?>
                <div class="pagination">
                    <div class="paginate_prev">
                        <?php
                        if(get_previous_posts_link()) {
                            echo get_previous_posts_link('<i class="fas fa-angle-left"></i>');
                        } else {
                            echo '<i class="fas fa-angle-left"></i>';
                        } ?>
                    </div>
                    <div class="paginate_items">
                        <?php ale_page_links(); ?>
                    </div>
                    <div class="paginate_next">
                        <?php
                        if(get_next_posts_link()) {
                            echo get_next_posts_link('<i class="fas fa-angle-right"></i>');
                        } else {
                            echo '<i class="fas fa-angle-right"></i>';
                        } ?>
                    </div>
                </div>
                <?php }; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>