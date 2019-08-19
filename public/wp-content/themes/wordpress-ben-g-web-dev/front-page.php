<?php get_header() ?>
 <section class="section-about">
                <div class="u-center-text u-margin-btm-bg">
                    <h2 class="heading-secondary">
                        <?php the_field('introduction_line'); ?>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-1-of-2 intro-left slide-left">
                        <div id="slide-in-trigger"></div>
                        <h3 class="heading-tertiary u-margin-btm-sm">
                            <?php the_field('large_text_1'); ?>
                        </h3>
                        <p class="paragraph">
                            <?php the_field('supporting_text_1'); ?>
                        </p>
                        <h3 class="heading-tertiary u-margin-btm-sm">
                            <?php the_field('large_text_2'); ?>
                            </h3>
                            <p class="paragraph">
                                <?php the_field('supporting_text_2'); ?>
                            </p>
                            <a href="/service-packages/" class="btn-txt">
                                Learn More &rarr;
                            </a>
                    </div>
                    <div id="help-dest"></div>
                    <div class="col-1-of-2 intro-right slide-right">
                        <div class="comp">
                            <img srcset="<?php the_field('headshot_photo'); ?> 300w, <?php the_field('headshot_photo'); ?> 1000w" 
                                 src="<?php the_field('headshot_photo'); ?>"
                                 size="(max-width: 900px) 20vw, (max-width: 600px) 30vw, 300px"
                                 alt="1"    
                                 class="comp__photo comp__photo--p1">
                            <!--<h2 id="cta">Learn More About Me</h2>-->
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-tours" id="section-tours">
                <div class="u-center-text u-margin-btm-bg">
                <div id="grid-slide-up-trigger"></div>
                    <h2 class="heading-secondary">
                        <?php the_field('portfolio_introduction_line'); ?>
                    </h2>
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

                <div class="u-center-text u-margin-top-sm">
                        <a href="#" class="btn btn--blue">See More Of My Work</a>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/mtn-outline-black.png" style="width:100%; padding: 5rem 0 0 0;"alt="" id="form-slide-trigger">  
            </section>
            <section class="section-booking">
                <div class="row">
                    <div class="book form-slide-up">
                         <div class="book__form">
                                <div class="u-margin-btm-sm">
                                    <h2 class="heading-secondary">
                                        <?php the_field('contact_introduction_line'); ?>
                                    </h2>
                                </div>
                            <?php gravity_form(1, false, false, false, false, true); ?>
                         </div>
                    </div>
                </div>
            </section>
            <?php get_footer(); ?>