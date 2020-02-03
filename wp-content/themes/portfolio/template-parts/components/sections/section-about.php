<?php $image = get_field('about_image'); ?>
<?php 
if( !empty( $image ) ): 
    $imageUrl = $image;
else:
    $imageUrl = 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR_2NGVSKtdlQ1RX8sgvCj9FDL2drwy5vy4lWmsyvHGMlYxn0fl';    
endif; ?>

<section id="about">
    <div class="container py-5 clearfix">
        <h2 class="text-center line-circle"><?php the_field('about_title'); ?></h2>

        <div class="image-container">
            <img src="<?php echo $imageUrl; ?>" alt="Erick Laxamana">
        </div>
        
        <?php the_field('about_description'); ?>
    </div>
</section>