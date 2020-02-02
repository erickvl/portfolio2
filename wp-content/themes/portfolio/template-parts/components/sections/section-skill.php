<section id="skills">
    <div class="container py-5">
        <h2 class="text-center line-circle light-color"><?php the_field('hp_skill_title'); ?></h2>

        <?php the_field('hp_skill_description'); ?>

        <?php
            $args = array( 'post_type' => 'skill', 'posts_per_page' => 10 );
            $the_query = new WP_Query( $args );
        ?>
        <div class="row mt-5">
        <?php if ( $the_query->have_posts() ) : 
            $ctr = 1;    
        ?>

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                    $percentage = get_field('skill_percentage').'%';

                ?>
                
                    <div class="col-lg-6 mt-3">
                        <div class="row">
                            <div class="col-lg-6 text-left">
                                <?php the_field('skill_name'); ?>
                            </div>
                            <div class="col-lg-6 text-right">
                                <?php the_field('skill_percentage'); ?>%
                            </div>

                            <div class="col-lg-12 mt-3">
                                <div class="skill-container">
                                    <div class="skills html" style="width: <?php echo $percentage; ?>; background-color: #f44336; box-shadow: 0px 0px 2px #f44336;">
                                    </div>
                                    <div class="d-table">
                                        <div class="line-container d-table-cell">
                                            <div class="guideline"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php 
                    $ctr++;
                endwhile; ?>
                <?php wp_reset_postdata(); ?>

            <?php else:  ?>

                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

            <?php endif; ?>
        </div>
    </div>
</section>