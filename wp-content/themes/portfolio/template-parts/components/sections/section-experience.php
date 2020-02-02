<section id="experience">
    <div class="container py-5">
        <h2 class="text-center line-circle">Experience</h2>

        <?php
            $args = array( 'post_type' => 'experience', 'posts_per_page' => 10 );
            $the_query = new WP_Query( $args );
        ?>

        <div class="experience-container">

            <?php if ( $the_query->have_posts() ) : 
                
                $ctr = 0;    
            ?>

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                
                <div class="row">
                    <div class="col-lg-6 left-con exp-content">

                        <?php if ( $ctr%2 == 1 ) : ?>

                            <div class="icon-container d-table">
                                <span class="d-table-cell">
                                    <?php the_field('icon'); ?>
                                </span>
                            </div>

                            <strong><?php the_field('year_start_and_end'); ?></strong>

                            <h4><?php the_field('job_title'); ?></h4>
                            <h6><?php the_field('company_name'); ?></h6>

                            <?php the_field('job_description'); ?>

                        <?php endif; ?>

                    </div>
                    <div class="col-lg-6 right-con exp-content">

                        <?php if ( $ctr%2 == 0 ) : ?>

                            <div class="icon-container d-table">
                                <span class="d-table-cell">
                                    <?php the_field('icon'); ?>
                                </span>
                            </div>

                            <strong><?php the_field('year_start_and_end'); ?></strong>

                            <h4><?php the_field('job_title'); ?></h4>
                            <h6><?php the_field('company_name'); ?></h6>

                            <?php the_field('job_description'); ?>

                        <?php endif; ?>
                        
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
        
        <div class="experience-container" style="display: none !important">
            <div class="row">
                <div class="col-lg-6 left-con exp-content"></div>
                <div class="col-lg-6 right-con exp-content">

                    <div class="icon-container d-table">
                        <span class="d-table-cell">
                            <i class="fas fa-suitcase"></i>
                        </span>
                    </div>

                    <strong>2019 - 2020</strong>

                    <h4>Web Developer</h4>
                    <h6>Quedy Media Inc.</h6>

                    <ul>
                        <li>Develop new and maintain existing projects</li>
                        <li>Deploy website on the server</li>
                        <li>Develop and deploy mobile app</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 left-con exp-content">

                <div class="icon-container d-table">
                        <span class="d-table-cell">
                            <i class="fas fa-suitcase"></i>
                        </span>
                    </div>

                    <strong>2018 - 2019</strong>

                    <h4>Web Developer</h4>
                    <h6>Transformational Outsourcing Inc.</h6>

                    <ul dir="rtl">
                        <li>Convert psd file to website</li>
                        <li>Test the website and identify any technical problems</li>
                        <li>Create and modify custom code, widgets and plugins for WordPress</li>
                        <li>Responsive Design</li>
                    </ul>

                </div>
                <div class="col-lg-6 right-con exp-content">

                </div>
            </div>
        </div>

    </div>
</section>