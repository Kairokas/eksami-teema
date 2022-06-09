<?php
    wp_head();
?>
<div class="page-container" id="page-container">
    <?php
        get_header();
    ?>
    <section class="workers">
        <h2 class="center-text">Meie töötajad</h2>
        <div class="flexbox-workers">
            <!-- siia tulevad töötajate tabid -->

            <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); 
                        ?>
                            <div class="worker">
                                <div class="worker-image">
                                    <?php echo the_post_thumbnail(); ?>
                                </div>
                                <div class="post-textbox">
                                    <h4><?php the_title(); ?></h4>
                                    <?php echo get_post_meta(get_the_ID(), $key = 'Ametikoht', $single = true); ?>
                                    <?php the_content(); ?>
                                    <?php echo get_post_meta(get_the_ID(), $key = 'E-mail', $single = true); ?>
                                </div>
                            </div>
                        <?php
                    }
                }
            ?>
        </div>
    </section>
    <?php get_footer();?>
</div>

