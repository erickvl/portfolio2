<section id="projects">
    <div class="container py-5">
        <h2 class="text-center line-circle"><?php the_field('project_title'); ?></h2>

        <p><?php the_field('projects_introduction'); ?></p>


        <?php
            $args = array( 'post_type' => 'project', 'posts_per_page' => 10 );
            $the_query = new WP_Query( $args );
        ?>

        <div class="projects-con">

            <?php if ( $the_query->have_posts() ) : 
                $ctr = 1;    
            ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <?php $image = get_field('project_logo'); 
                        if( !empty( $image ) ): 
                            $imageUrl = $image;
                        else:
                            $imageUrl = 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQSrV26C43rvwKcuHvkT7FHKUUOurQqgE83m3fk0G_LXME6k-C4';
                        endif; 
                    ?>

                    <div class="project">
                        <a href="<?php esc_url(the_field('project_url')); ?>">
                            <div class="image-container">
                                <img src="<?php echo $imageUrl; ?>" alt="<?php the_field('project_name'); ?>">
                            </div>
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <span><?php the_field('project_name'); ?></span>
                                </div>
                            </div>
                        </a>
                    </div>


                <?php $ctr++; endwhile; ?>
                <?php wp_reset_postdata(); ?>

            <?php else:  ?>

                <p><?php _e( 'Sorry, no projects to display.' ); ?></p>

            <?php endif; ?>

        </div> <!-- project con -->
    </div>
</section>