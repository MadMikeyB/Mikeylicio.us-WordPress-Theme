
<footer>
	<nav>
    <ul class="footerlinks" style="width:400px;"><li><small>&copy; 2012 <?php bloginfo('name'); ?> - Powered by <span id="generator-link"><a href="http://wordpress.org/" title="<?php _e( 'WordPress', 'mikeylicious' ) ?>" rel="generator"><?php _e( 'WordPress', 'mikeylicious' ) ?></a></span></small></li></ul>
		<ul class="footerlinks" style="width:400px;">
			<?php wp_list_pages('title_li=<li class="active"><a href="/">Home</a></li>'); ?>
		</ul>
		
	</nav>
</footer>
<?php wp_footer() ?>
</body>
</html>