<section>
    <div class="container_services" id="services">
        <div class="icons_services">
            <h2 class="services"><?php the_field('hs_services');?></h2>
        </div>
        <div class="icons_services">
            <?php

                // check if the repeater field has rows of data
                if( have_rows('hs_services_icons') ):

 	                // loop through the rows of data
                    while ( have_rows('hs_services_icons') ) : 
                        the_row();
                        //get_sub_field('lauko_pavadinimas');
                        //the_sub_field('lauko_pavadinimas');
                        ?>
                        <div class="column">
                            <?php the_sub_field('icons');?>
                            <h3><?php the_sub_field('title');?></h3>
                            <p><?php the_sub_field('description');?></p>
                        </div>
                        <!-- kartojamas HTML kodas-->
                        <?php
                    endwhile;
                endif;

            ?>
        </div>
    </div>
</section>
