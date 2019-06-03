<?php get_header('secondary') ?>
<?php if ( have_posts() ) {while ( have_posts() ) { the_post(); ?>
<section class="content">
    <div class="row flex-row">
        <?php
        if (get_field('top_right_photo')) {
        ?>
        <div class="col-2-of-4 port">
            <div class="port-content">
                <h2 class="heading-secondary">
                    <?php the_title(); ?>
                </h2>
                <br>
                <div class="paragraph">
                    <?php the_field('top_left_copy') ?> 
                </div>
            </div>
        </div>
        <div class="col-2-of-4">
            <img src="<?php the_field('top_right_photo') ?>" alt="<?php the_field('alt_text_top_right_photo'); ?>" class="port-img">
        </div>
        <?php
        } else {
        ?>
        <div class="port">
            <div class="port-content">
                <h2 class="heading-secondary">
                    <?php the_title(); ?>
                </h2>
                <br>
                <div class="paragraph">
                    <?php the_field('top_left_copy') ?> 
                </div>
            </div>
        </div>
        <?php 
        }
        ?>
    </div>
    <div class="row flex-row">
    <?php
        if (get_field('bottom_left_photo')) {
        ?>
        <div class="col-2-of-4">
            <img src="<?php the_field('bottom_left_photo') ?>" alt="<?php the_field('alt_text_bottom_left_photo'); ?>" class="port-img">
        </div>
        <div class="col-2-of-4 port">
            <div class="port-content">
                <div class="paragraph">
                    <?php the_field('bottom_right_copy') ?>
                </div>
            </div>
        </div>
        <?php
        } else {
        ?>
        <div class="port">
            <div class="port-content">
                <div class="paragraph">
                    <?php the_field('bottom_right_copy') ?>
            </div>
            </div>
        </div>
        <?php 
        }
        ?>
    </div>
    <?php   } // end while ?>
    <a href="<?php previous_posts_link('previous'); ?>" class="btn-txt btn--pagination-left">
        &larr; Previous
    </a>
    <a href="<?php next_posts_link('previous'); ?>" class="btn-txt btn--pagination-right">
        Next &rarr;
    </a>
    <?php 
         } // end if
    ?>
</section>
<?php get_footer(); ?>