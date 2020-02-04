<?php
/*
 * Template Name: Map Page
 * description: >-
  Page template without sidebar
 */

get_header(); ?>

	<?php do_action('salt_container_above'); ?>

	<div id="container" class="container" role="container">

	<?php do_action('salt_container_inside_above'); ?>
		
		<main id="main" class="row" role="main">
			
			<?php do_action('salt_section_above'); ?>
	
			<section class="col-sm-6">
			
				<?php do_action('salt_section_inside_above'); ?>
	
				<?php
                // Start the loop.
                while (have_posts()) : the_post();
        
                    // Include the page content template.
                    get_template_part('partials/content/content', 'map');
        
                // End the loop.
                endwhile;
                ?>
			
				<?php do_action('salt_section_inside_below'); ?>
	
			</section>
		
			<?php do_action('salt_section_below'); ?>

		</main><!-- /#main -->
			
	<?php do_action('salt_container_inside_below'); ?>

	</div><!-- /#container -->
	
	<?php do_action('salt_container_below'); ?>

<?php get_footer(); ?>