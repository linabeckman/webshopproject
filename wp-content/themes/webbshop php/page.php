<?php get_header(); ?> 

<section id="main">
<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
	<ul id="gallery">
				<li>
					<div class="inner">
						<?php the_post_thumbnail(); ?>
					</div>
				</li>

<?php endwhile; endif; ?>

<?php get_footer();?>