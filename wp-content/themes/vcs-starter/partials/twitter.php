<section>
    <div class="container_services">
        <div class="twitter">
            <h2 class="services after_line"><?php the_field('ht_twitter');?></h2>
        </div>
        <div class="twitter">

            <i class="bird"><?php the_field('ht_twitter_logotype');?></i>
            <?php
                $link = get_field('ht_twitter_link');
                $target = $link['target']? ' target="_blank" ' : '';
            ?>
            <a href="<?php echo $link['url'] ?>"<?php echo $target;?>></a>
        </div>
        <div>
            <h3 class="cookie">
                <?php the_field('ht_twitter_paragraph');?>
            </h3>
        </div>
    </div>
</section>