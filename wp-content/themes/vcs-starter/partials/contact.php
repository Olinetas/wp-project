 <section>
    <div class="container_services just form contacts_background" id="contact"action="mail.php" method="post">
        <div class="icons_services">
            <h2 class="services"><?php the_field('cb_contact');?></h2>
        </div>
        <div class="third second_media">
            <div>
                <div class="flex">
                    <div>
                        <label class="label_fname" for="fname">
                            <?php the_field('cb_full_name');?>
                        </label>
                    </div>
                    <div>
                    <div>
                        <?php
                            echo do_shortcode(get_field('cb_form_shortcode_full_name'));
                        ?>   
                    </div>
                    </div>
                    <div>
                        <label class="label_email" for="fname">
                            <?php the_field('cb_email');?>
                        </label>
                    </div>
                    <div>
                        <?php
                            echo do_shortcode(get_field('cb_form_shortcode_email'));
                        ?>   
                    </div>
                </div>
            </div>
            <div class="third second_media">
                <div class="paragraph">
                    <div>
                        <p>
                            <?php the_field('cb_contact_paragraph');?>
                        </p>
                    </div>
                    <div>
                        <p class="contacts"> 
                            <?php 
                                $contact = get_field('cb_contact_information');
                                echo nl2br($contact);
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="third">
            <div>
                <div>
                    <label class="label_message" for="message">Message</label>
                </div>
            </div>
        </div>
        <div>
            <div>
                <div>
                    <?php
                        echo do_shortcode(get_field('cb_form_shortcode_message'));
                    ?>   
                </div>
            </div>
        </div>
        <div>
            <div>
                <?php
                    echo do_shortcode(get_field('cb_form_shortcode_send_message'));
                ?>   
            </div>
        </div>
    </div>
</section>