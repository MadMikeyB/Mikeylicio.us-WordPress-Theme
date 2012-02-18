<?php get_header(); ?>
<div class="content-wrap">

	<div class="content-top-menu">
		<nav>
		
			<?php if (is_home()): ?>
			<ul>
				<?php wp_list_categories('title_li=<li class="active">Categories</li>'); ?> 
			</ul>
			<?php endif; ?>
			
			<?php if (!is_home()): ?>
			<?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
			<?php endif; ?>
			
		</nav>
	</div>
	<div class="clear"></div>
<aside>
<?php get_sidebar(); ?>
</aside>
<article>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
 <p class="meta"><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?> in <?php the_category(', '); ?></p>
 <?php the_content(); ?>
 <?php if (is_single()): ?>
<?php comment_form() ?>
<?php endif; ?>
 <?php endwhile; else: ?>
 <p>Sorry, no posts matched your criteria.</p>
 <?php endif; ?>
</article> 
	<div class="clear"></div>
</div>
<?php get_footer(); ?>
