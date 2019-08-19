<?php 
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
) );
?>
<div class="sidebar" id="sidebar">
    <h3 class="heading-secondary-2">Sidebar</h3>
    <ul>
        <?php foreach ($categories as $category) { ?>
            <li class="paragraph-md"><button type="button" data-filter=".<?php echo $category->slug; ?>"><?php echo $category->name; ?></button>
</li>
            <!--<li class="paragraph-md"><a href="< ?php get_category_link( $category->term_id ) ?>">< ?php echo($category->name); ?></a></li>-->
        <?php } ?>
   </ul>
</div>