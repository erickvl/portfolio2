<?php $image = get_field('hero_background_image'); ?>
<?php 
if( !empty( $image ) ): 
    $imageUrl = $image;
else:
    $imageUrl = 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR_2NGVSKtdlQ1RX8sgvCj9FDL2drwy5vy4lWmsyvHGMlYxn0fl';    
endif; ?>

<section id="section1" style="background-image: url('<?php echo esc_url($imageUrl); ?>');">
        
    <div class="container d-table h-100 py-5">
        <div class="d-table-cell">
            <h1><?php the_field('hero_header_title'); ?></h1>

            <!-- <h5>Erick Laxamana</h5> -->

            <p><?php the_field('hero_description'); ?></p>
            
            <?php
                $learnMoreLink = get_field('hero_learn_more_link');
                $learnMoreLink = explode("#", $learnMoreLink)[0];
            ?>
            <a href="<?php esc_url( the_field('hero_learn_more_link') ); ?>" <?php echo !$learnMoreLink ? '': 'target="_blank" rel="noopener"';?> >Learn More</a>
        </div>
    </div>

</section>
