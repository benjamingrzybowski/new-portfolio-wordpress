<?php get_header('secondary') ?>
<style>

.slide-right img {
    width: 100%;
    height: 100%;
}

</style>
<div id="slide-in-trigger"></div>
<section class="content">
    <div class="row">
    <?php if ( have_posts() ) {while ( have_posts() ) {the_post(); ?>
        <div class="col-1-of-4 intro-left slide-left">
            <h2 class="heading-secondary">
                <?php the_title(); ?>
            </h2>
        </div>
        <div class="col-2-of-4 grid-slide-up">
            <div class="paragraph">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="col-1-of-4 intro-right slide-right">
            <?php the_post_thumbnail('medium'); ?>
        </div>
    </div>
    <?php
        $contactForm = get_field('display_contact_form');
        if( $contactForm == 'Display') { ?>
    <section class="section-booking">
        <div class="row">
            <!--<div class="book form-slide-up">-->
                <div class="book">
                 <div class="book__form">
                        <div class="u-margin-btm-sm">
                        </div>
                    <?php gravity_form(1, false, false, false, false, true); ?>
                 </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <?php   } // end while 
         } // end if
    ?>
        <?php 
            $next_post_link_url = get_permalink( get_adjacent_post(false,'',false)->ID ); 
            $prev_post_link_url = get_permalink( get_adjacent_post(false,'',true)->ID ); 
        ?>
        <a href="<?php echo($prev_post_link_url); ?>" class="btn-txt btn--pagination-left">
            &larr; Previous
        </a>
        <a href="<?php echo($next_post_link_url); ?>" class="btn-txt btn--pagination-right">
            Next &rarr;
        </a>
</section>
<script>

jQuery( document ).ready( function( $ ) {
    var slideInTrigger = document.getElementById('slide-in-trigger').getBoundingClientRect();
    var slideLeft = document.querySelector('.slide-left');
    var slideRight = document.querySelector('.slide-right');
    var slideUp = document.querySelector('.grid-slide-up');

    if (slideInTrigger.top >= 0 && (slideInTrigger.bottom + 200) <= (window.innerHeight || document.documentElement.clientHeight)) {
        slideLeft.classList.add('slides-in-left');
        slideRight.classList.add('slides-in-right');
        slideUp.classList.add('slide-up');
    }
});

</script>
<?php get_footer(); ?>