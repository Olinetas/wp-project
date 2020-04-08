<?php

// check if the repeater field has rows of data
if( have_rows('repeater_lauko_pavadinimas') ):

 	// loop through the rows of data
    while ( have_rows('repeater_lauko_pavadinimas') ) : 
        the_row();
        //get_sub_field('lauko_pavadinimas');
        //the_sub_field('lauko_pavadinimas');
        ?>
        <!-- kartojamas HTML kodas-->
        <?php
    endwhile;
endif;

?>