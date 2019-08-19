<?php get_header('secondary') ?>
<div id="slide-in-trigger"></div>
<div class="row">
    <div class="col-1-of-2 intro-left slide-left">
        <h2 class="heading-secondary-2">Recent Projects</h2>
    </div>
    <div class="col-1-of-2 intro-right slide-right">
        <p class="paragraph"></p>
    <!---
    < ?php 
    $categories = get_categories( array(
        'taxonomy' => 'types',
        'orderby' => 'name',
        'order'   => 'ASC'
    ) );
    ?>
    < ?php foreach ($categories as $category) { ?>
        <li class="paragraph-md masonryTrigger"><button type="button" data-filter=".<?php echo $category->slug; ?>"><?php echo $category->name; ?></button>
    < ?php } ?>
    --->
    </div>
</div>
<div class="row grid-slide-up" id="height">
    <div class="grid">
    <div class="grid-sizer"></div>
    <?php
    $loop = new WP_Query( array(
        'post_type' => 'portfolio'
      )
    );
    ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php 
            $post = get_the_ID();
            $cpt_taxonomy =  get_the_terms($post, 'types');
            $slugs = wp_list_pluck($cpt_taxonomy, 'slug');
            $class_names = join(' ', $slugs);
        ?>
        <div class="grid-item mix<?php if ($class_names) { echo ' ' . $class_names;} ?>">
            <a href="<?php the_permalink(); ?> ">
                <h2 class="heading-secondary-2"><?php the_title(); ?></h2>
                <?php the_post_thumbnail( 'medium' );    ?>
                <?php  //var_dump($class_names); ?>
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
<script>
(function($) {
	jQuery('.grid').mixItUp({  
        animation: {
        animateResizeContainer: false,
        effects: 'fade scale'
    }
});
})( jQuery );
//var mixer = mixitup('.grid');
//window.addEventListener("load", function(){
//    var fixedHeight = document.getElementById('height');
//    console.log(fixedHeight);
//    var clientHeight = fixedHeight.clientHeight;
//    console.log(clientHeight);
//    fixedHeight.style.height=clientHeight+'px';
//});

</script>
<?php get_footer('secondary'); ?>