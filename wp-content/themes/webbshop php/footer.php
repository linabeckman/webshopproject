	<footer>
		<h2>About us</h2>
		<nav class="site-nav">
				<?php 
				
				$args = array(
					'theme_location' => 'footer'
					);

					?>

				<?php wp_nav_menu( $args ); ?>
		</nav>		
	</footer>
	<?php wp_footer(); ?>
	</section>
</body>
</html>