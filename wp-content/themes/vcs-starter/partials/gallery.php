<section>
    <div class="container_portfolio images_portfolio">
   
        <div class="images"> 
                <?php 
                    $galleryImage = get_field('hg_image_1');
                ?>
            <a class="portfolio_img"><img src="<?php echo $galleryImage['sizes']['gallery']; ?>" alt="<?php bloginfo('name');?>" /></a>
                <?php 
                    $galleryImage = get_field('hg_image_2');
                ?>
            <a class="portfolio_img"><img src="<?php echo $galleryImage['sizes']['gallery']; ?>" alt="<?php bloginfo('name');?>" /></a>
                <?php 
                    $galleryImage = get_field('hg_image_3');
                ?>
            <a class="portfolio_img"><img src="<?php echo $galleryImage['sizes']['gallery']; ?>" alt="<?php bloginfo('name');?>" /></a>
                <?php 
                    $galleryImage = get_field('hg_image_4');
                ?>
            <a class="portfolio_img"><img src="<?php echo $galleryImage['sizes']['gallery']; ?>" alt="<?php bloginfo('name');?>" /></a>
        </div>
        <div class="images">
             <?php 
                    $galleryImage = get_field('hg_image_5');
                ?>
            <a class="portfolio_img"><img src="<?php echo $galleryImage['sizes']['gallery']; ?>" alt="<?php bloginfo('name');?>" /></a>
             <?php 
                    $galleryImage = get_field('hg_image_6');
                ?>
            <a class="portfolio_img"><img src="<?php echo $galleryImage['sizes']['gallery']; ?>" alt="<?php bloginfo('name');?>" /></a>
             <?php 
                    $galleryImage = get_field('hg_image_7');
                ?>
            <a class="portfolio_img"><img src="<?php echo $galleryImage['sizes']['gallery']; ?>" alt="<?php bloginfo('name');?>" /></a>
             <?php 
                    $galleryImage = get_field('hg_image_8');
                ?>
            <a class="portfolio_img"><img src="<?php echo $galleryImage['sizes']['gallery']; ?>" alt="<?php bloginfo('name');?>" /></a>
        </div>
    </div>
</section>