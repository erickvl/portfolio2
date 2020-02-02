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