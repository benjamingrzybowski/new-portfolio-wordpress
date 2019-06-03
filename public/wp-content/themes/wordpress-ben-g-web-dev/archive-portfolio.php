<?php get_header('secondary') ?>
<div id="slide-in-trigger"></div>
<div class="row">
    <div class="col-1-of-2 intro-left slide-left">
        <h2 class="heading-secondary-2">Some content</h2>
    </div>
    <div class="col-1-of-2 intro-right slide-right">
        <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, placeat? Non fugiat optio iure. Dolores atque quas, aliquam debitis sunt sequi cum accusamus, quisquam dicta voluptatum nemo! Illum, enim! Officia.</p>
    </div>
</div>
<div class="row grid-slide-up">
    <div class="grid">
    <div class="grid-sizer"></div>
    <?php
    $loop = new WP_Query( array(
        'post_type' => 'portfolio'
      )
    );
    ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="grid-item">
            <a href="<?php the_permalink(); ?> ">
                <h2 class="heading-secondary-2"><?php the_title(); ?></h2>
                <?php the_post_thumbnail( 'medium' );    ?>
                <p class="paragraph"><?php echo  get_the_excerpt(); ?></p>
            </a>
            <br>
            <hr>
        </div>
    <?php endwhile; wp_reset_query(); ?>
</div>
<div class="clearfix"></div>
<br>
<br>
</div>
<?php get_footer('secondary'); ?>