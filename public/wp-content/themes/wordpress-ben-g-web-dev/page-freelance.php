<?php 
/* Template Name: Freelance Terms */
?>
<?php get_header('secondary') ?>
<section class="content">
    <div class="row paragraph" id="service-intro">
        <?php the_field('introduction'); ?>
    </div>
    <div class="row">
        <div class="col-1-of-4 intro-left slide-left">
            <h2 class="heading-secondary"><?php the_field('service_one_title'); ?></h2>
        </div>
        <div class="col-3-of-4 intro-right slide-right paragraph">
            <?php the_field('service_one_copy'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-3-of-4 intro-left slide-left paragraph">
            <?php the_field('service_two_copy'); ?>
        </div>
        <div class="col-1-of-4 intro-right slide-right">
            <h2 class="heading-secondary"><?php the_field('service_two_title'); ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-1-of-4 intro-left slide-left">
            <h2 class="heading-secondary"><?php the_field('service_three_title'); ?></h2>
        </div>
        <div class="col-3-of-4 intro-right slide-right paragraph">
            <?php the_field('service_three_copy'); ?>
        </div>
    </div>
    <div class="row">
        <h2 class="heading-secondary" style="text-align:center;"><?php the_field('package_title'); ?></h2>
    </div>
    <div class="row">
        <div id="portfolio-trigger"></div>
        <?php
            $loop = new WP_Query( array(
                'post_type' => 'packages',
                'posts_per_page' => 3
            )
            );
            $popup = 0;
        ?>  
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="col-1-of-3 animation-element porfolio-slide-up">
         <div class="card">
            <div class="card__side">
                <div class="card__picture" style="background-image: 
                linear-gradient(to right bottom, #60D5C0, #2A585E),
                url(<?php echo esc_url( get_the_post_thumbnail_url() ); ?>)";>
                    &nbsp;
                </div>
                <h4 class="card__heading">
                    <span class="card__heading-span card__heading-span--1">
                            <?php the_title(); ?>
                    </span>
                </h4>
                <div class="card__details">
                    <p><?php the_excerpt(); ?></p>
                </div>
            </div>
            <div class="card__side card__side--back card__side--back-1">
                <div class="card__cta">
                    <a href="#popup-<?php echo (esc_url($popup)); ?>" class="btn btn--white">Learn More</a>
                </div>
            </div>
         </div>
    </div>
        <?php $popup++; endwhile; wp_reset_query(); ?>
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
<?php get_footer('secondary'); ?>
<script>
jQuery( document ).ready( function( $ ) {
function check_if_in_view() {

    var slideInTrigger = document.getElementById('slide-in-trigger').getBoundingClientRect();
    var slideUp = document.querySelector('.grid-slide-up');
    var slideLeft = document.getElementsByClassName('slide-left');
    var slideRight = document.getElementsByClassName('slide-right');
    var intro = document.getElementById('service-intro'); 

    intro.classList.add('slide-up');

    if (slideInTrigger.top >= 0 && (slideInTrigger.bottom + 200) <= (window.innerHeight || document.documentElement.clientHeight)) {
        for (var x = 0; x < slideLeft.length; x++) {
            slideLeft[x].classList.add('slides-in-left');
            slideRight[x].classList.add('slides-in-right');   
        }
    }
    
    var slideUpTrigger1 = document.getElementById('portfolio-trigger');
    var bound1 = slideUpTrigger1.getBoundingClientRect();
    var featurePortfolio = document.getElementsByClassName('porfolio-slide-up');


  $.each(featurePortfolio, function() {
    var $element = $(this);
    if (bound1.top >= 0 && (bound1.bottom + 200) <= (window.innerHeight || document.documentElement.clientHeight)) {
        $element.addClass('slide-up');
    } 
  });

}
$(window).on('scroll resize', check_if_in_view);
$(window).trigger('scroll');
});
</script>
<?php
    $loop = new WP_Query( array(
        'post_type' => 'packages',
        'posts_per_page' => 3
    )
    );
    $popup = 0;
?> 
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?> 
    <div class="popup" id="popup-<?php echo (esc_url($popup)); ?>">
        <div class="popup__content">
        <!---
            <div class="popup__left">
                < ?php the_post_thumbnail('large'); ?>
            </div>
        ---->
            <div class="popup__right">
                <a href="#section-tours" class="popup__close">&times;</a>
                <h2 class="heading-secondary">
                <?php the_title(); ?>
                </h2>
                <h3 class="heading-tertiary u-margin-top-sm">
                    <?php the_excerpt(); ?>
                </h3>
                <a href="<?php the_permalink(); ?>" class="btn btn--blue u-margin-top-sm">Learn More About This Package</a>
            </div>
        </div>
    </div>
<?php $popup++; endwhile; wp_reset_query(); ?>