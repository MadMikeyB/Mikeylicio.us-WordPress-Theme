<?php get_header(); ?>
	<div class="content-wrap">
<?php the_post(); ?>

				<div class="content-top-menu">
                <nav>
					<?php if (function_exists('breadcrumbs'))
    breadcrumbs(); ?>
                </nav>
                </div>
                
                <aside>
                <?php get_sidebar(); ?>	
                </aside>
                <article>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					
					<div class="entry-meta">
						<span class="meta-prep meta-prep-author"><?php _e('By ', 'shape'); ?></span>
						<span class="author vcard"><a class="url fn n" href="<?php echo
get_author_link(false, $authordata->ID, $authordata->user_nicename); ?>" title="<?php printf(__
('View all posts by %s', 'shape'), $authordata->display_name); ?>"><?php the_author(); ?></a></span>
						<span class="meta-sep"> | </span>
						<span class="meta-prep meta-prep-entry-date"><?php _e('Published ',
'shape'); ?></span>
						<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time(get_option
('date_format')); ?></abbr></span>
						<?php edit_post_link(__('Edit', 'shape'), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">",
"</span>\n\t\t\t\t\t") ?>						
					</div><!-- .entry-meta -->
					
					<div class="entry-content">
<?php the_content(); ?>
<?php wp_link_pages('before=<div class="page-link">' . __('Pages:', 'shape') .
'&after=</div>') ?>
					</div><!-- .entry-content -->
					
																		
				</div><!-- #post-<?php the_ID(); ?> -->			
				</article>
                
				<div class="content-top-menu" style="width: 55% !important;">
                <nav>
					<ul style="width: 100%;">
                    <div class="nav-previous"><li><?php previous_post_link('%link',
'<span class="meta-nav">&lt;</span> <small>%title</small>') ?></li></div>
					<div class="nav-next"><li><?php next_post_link('%link',
'<small>%title</small> <span class="meta-nav">&gt;</span>') ?></li></div>
				    </ul>
                </nav>
                </div><!-- #nav-below -->					

<?php comments_template('comments', true); ?>

<div class="clear"></div>
		</div>
<?php get_footer(); ?>