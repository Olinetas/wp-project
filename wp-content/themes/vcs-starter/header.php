<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<title><?php wp_title();?></title>
		<?php
            wp_head();
        ?>
	</head>
    <body>
        <?php get_template_part('partials/navbar');?>
            