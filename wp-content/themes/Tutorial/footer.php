<footer class="site-footer">
	<p><?php bloginfo('name'); ?> - &copy; <?php echo date ('Y');?></p>



			<nav class="site-nav">
				<?php 
				
				$args = array(
					'theme_location' => 'footer'
					);

					?>

				<?php wp_nav_menu( $args ); ?>
			</nav>
<?php wp_footer(); ?>
</footer>
</div>
</body>
</html>
