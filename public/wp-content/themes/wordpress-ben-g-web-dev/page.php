<?php get_header('secondary') ?>
<section class="content">
    <div class="row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-1-of-4 intro-left slide-left">
            <h2 class="heading-secondary-2"><?php the_title(); ?></h2>
        </div>
        <div class="col-3-of-4 intro-right slide-right paragraph">
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
        </div>
    </div>
</section>
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
<script>

jQuery( document ).ready( function( $ ) {
    var slideInTrigger = document.getElementById('slide-in-trigger').getBoundingClientRect();
    var slideLeft = document.querySelector('.slide-left');
    var slideRight = document.querySelector('.slide-right');

    if (slideInTrigger.top >= 0 && (slideInTrigger.bottom + 200) <= (window.innerHeight || document.documentElement.clientHeight)) {
        slideLeft.classList.add('slides-in-left');
        slideRight.classList.add('slides-in-right');
    }
});

</script>
<?php get_footer('secondary'); ?>