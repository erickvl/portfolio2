<?php 

if ( have_posts() ) : 
    
    while( have_posts() ) : 
        
        the_post();

        include('components/sections/hero.php');

        include('components/sections/section-about.php');

        include('components/sections/section-experience.php');

        include('components/sections/section-skill.php');

        include('components/sections/section-project.php');

    endwhile; 

endif; 

?>