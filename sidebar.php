
	<ul>
	<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
	<?php get_sidebar(); ?>
	<?php endif; ?>
	</ul>
