<?php 
/**
 * Template Name: Contact Us
 */

get_header(); ?>

<div class="container">
    <h1><?php the_title(); ?></h1>

    <div class="row">

        <div class="col-lg-6">
            Contact Form
        </div>

        <div class="col-lg-6">
            <?php get_template_part('template-parts/section', 'content'); ?>
        </div>

    </div>

</div>

<?php get_footer(); ?>