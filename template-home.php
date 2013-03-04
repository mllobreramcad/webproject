<?php
/*
Template Name: template-home
*/
?>

<?php get_header(); ?>
			
		<div class="home_heading">
			<h1><?php the_field('heading'); ?></h1>
			<img src="<?php the_field('hero_image'); ?>" alt="" />
			<?php the_field('description'); ?>
		</div>
		
		<div class="home_heading_main">
			<h1><?php the_field('heading_main'); ?></h1>
			<?php the_field('heading_main_description'); ?>
		</div>
		
		<div class="home_heading_aside">
			<?php the_field('aside'); ?>
		</div> 		

<?php get_footer(); ?>