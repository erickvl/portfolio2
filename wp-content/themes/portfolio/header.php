<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php wp_head(); ?>

    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ultra&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/e833849f70.js" crossorigin="anonymous"></script>

</head>
<body <?php body_class(); ?> >

    <header class="fixed-top" style="top: <?php echo is_user_logged_in() ? '32px' : ''; ?>">
        <div class="contact-info-con">
            <div class="container d-table">
                <div class="d-table-cell left-contacts">
                    <?php if ( get_field('email_address') ) : ?>
                        <a href="mailto:<?php the_field('email_address'); ?>" title="Email Address" class="contact-links"><i class="far fa-envelope"></i> <?php the_field('email_address'); ?></a> <span>|</span>
                    <?php endif; ?>

                    <?php if ( get_field('phone_number') ) : ?>
                        <a href="tel:<?php the_field('phone_number'); ?>" title="Phone Number" class="contact-links"><i class="fas fa-phone-square-alt"></i> <?php the_field('phone_number'); ?></a>
                    <?php endif; ?>
                </div>

                <div class="d-table-cell text-right right-contacts">
                    <?php if ( get_field('facebook_link') ) : ?>
                        <a href="<?php the_field('facebook_link'); ?>" title="Facebook" class="contact-links"><i class="fab fa-facebook-square"></i></a>
                    <?php endif; ?>

                    <?php if ( get_field('instagram_link') ) : ?>
                        <a href="<?php the_field('instagram_link'); ?>" title="Instagram" class="contact-links"><i class="fab fa-instagram"></i></a>
                    <?php endif; ?>

                    <?php if ( get_field('twitter_link') ) : ?>
                        <a href="<?php the_field('twitter_link'); ?>" title="Twitter" class="contact-links"><i class="fab fa-twitter-square"></i></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="container d-table h-100">
            
            <div class="d-table-row">
                <!-- <div class="row"> -->
                    <div class="d-table-cell">
                        <a href="<?php echo site_url(); ?>">
                            <?php
                                
                                if ( has_custom_logo() ) :

                                    $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
                            ?>
                                    <img src="<?php echo $image; ?>" alt="Erick Laxamana" class="logo">
                            <?php
                                else :
                                    echo '<span class="logo-text">Erick Laxamana</span>';
                                endif;
                            
                            ?>
                        </a>

                        <div class="mobile-contact-info">
                            <?php if ( get_field('email_address') ) : ?>
                                <a href="mailto:<?php the_field('email_address'); ?>" title="Email Address" class="contact-links"><i class="far fa-envelope"></i> <?php the_field('email_address'); ?></a>
                            <?php endif; ?>

                            <?php if ( get_field('phone_number') ) : ?>
                                <a href="tel:<?php the_field('phone_number'); ?>" title="Phone Number" class="contact-links"><i class="fas fa-phone-square-alt"></i> <?php the_field('phone_number'); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="d-table-cell nav-container">
                        <?php 
                            wp_nav_menu(
                                
                                array(
                                    'menu' => 'Main Menu',
                                    'menu_class' => 'main-navigation'
                                )
            
                            );
                        ?>
                    </div>
                <!-- </div> -->

            </div>

        </div>
        
    </header>
    <main class="page-wrap">