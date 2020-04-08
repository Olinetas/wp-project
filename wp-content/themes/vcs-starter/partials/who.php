<section>
    <?php 
    $image = get_field('hw_who_background');
    ?>
    <div class="container_services just background" style="background-image: url(<?php echo $image['sizes']['2048x2048']; ?>);">
        <div class="icons_services">
            <h2 class="services"><?php the_field('hw_who_section');?></h2>
        </div>
        <div class="third">
            <div class="third_paragraph">
                <p> <?php the_field('hw_first_paragraph');?></p>
                <p> <?php the_field('hw_second_paragraph');?></p>
            </div>
            <div class="logotypes">
                <p><?php the_field('hw_third_paragraph');?></p>
                <div class="logo_images_padding">
                <?php

                // check if the repeater field has rows of data
                if( have_rows('hw_who_section_icons_repeater') ):

 	                // loop through the rows of data
                    while ( have_rows('hw_who_section_icons_repeater') ) : 
                        the_row();
                        //get_sub_field('lauko_pavadinimas');
                        //the_sub_field('lauko_pavadinimas');
                        ?>
                      
                            <i class="logo_images"><?php the_sub_field('twitter_logo');?></i>
                            <i class="logo_images"><?php the_sub_field('google_logo');?></i>
                            <i class="logo_images"><?php the_sub_field('ball_logo');?></i>
                            <i class="logo_images"><?php the_sub_field('coffee_logo');?></i>
                   
                        <!-- kartojamas HTML kodas-->
                        <?php
                    endwhile;
                endif;

                ?>
                </div>
            </div>
        </div>
    </div>
</section>