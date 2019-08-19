<?php get_header('secondary');?>

<div class="row">
    <div class="col-1-of-2 intro-left slide-left">
        <h2 class="heading-secondary-2"><?php the_field('title', get_option('page_for_posts')); ?></h2>
    </div>
    <div class="col-1-of-2 intro-right slide-right">
        <p class="paragraph"><?php the_field('supporting_content', get_option('page_for_posts')); ?></p>
    </div>
</div>
<section class="content">
    <div class="b-page">
    <div class="row blog-page">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php 
            $categories = get_the_category();
            $slugs = wp_list_pluck($categories, 'slug');
            $class_names = join(' ', $slugs);
        ?>
            <div class="blog-page-post mix<?php if ($class_names) { echo ' ' . $class_names;} ?>">
                <div class="blog-page-copy">
                    <p class="paragraph-md"><?php echo(get_the_excerpt()); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn-txt btn--read-more">
                        Read More
                    </a>
                </div>
                <div class="blog-page-img">
                    <?php the_post_thumbnail('thumbnail'); ?>
                </div>
            </div>
        <?php endwhile; wp_reset_query(); endif; ?>
    </div>
    <?php get_sidebar(); ?>
    </div>
</section>
<script>

(function() {
    var slideInTrigger = document.getElementById('slide-in-trigger').getBoundingClientRect();
    var slideLeft = document.querySelector('.slide-left');
    var slideRight = document.querySelector('.slide-right');

    if (slideInTrigger.top >= 0 && (slideInTrigger.bottom + 200) <= (window.innerHeight || document.documentElement.clientHeight)) {
        slideLeft.classList.add('slides-in-left');
        slideRight.classList.add('slides-in-right');
    }

    var mixer = mixitup('.blog-page');

})();

//jQuery( document ).ready( function( $ ) {});

</script>
<?php get_footer('secondary'); ?>