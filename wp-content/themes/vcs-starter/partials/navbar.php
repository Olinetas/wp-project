<header>
    <?php 
    $image = get_field('bb_background_image');
    ?>
        <nav id="home" class="container" style="background-image: url(<?php echo $image['sizes']['2048x2048']; ?>);">
 
            
            <div class="blueasy">   
                    
                    <?php
                    $logoImage = get_field('ho_blueasy_logo', 'option'); 
                
                    ?> 
                           
                        <img class="logo" src="<?php echo $logoImage['sizes']['logo']?>" 
                        alt="<?php bloginfo('name');?>" />
                        <div class="burger">
                            <label class="burger_label burger" for="toggle">&#9776</label>
                            <input type="checkbox" id="toggle" />
                            <?php 
                                $menu_options=[
                                    'menu_class'=> 'ul_logo',
                                    'container'=> 'false',
                                    'theme_location'=>'primary-navigation',
                                    'walker'=> new custom_navwalker()
                                    ];
                                wp_nav_menu($menu_options);
                            ?>
                        </div>
            </div>

   

