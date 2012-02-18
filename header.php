<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8" />

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );

	?></title>
<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<link href='http://fonts.googleapis.com/css?family=Nunito:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<meta name="generator" content="http://switchtohtml5.com">
<?php
wp_head()
?>
</head>
<body>
<div class="header-wrap">
	<header>
	<h1 class="fancylogotext"><?php bloginfo('name'); ?></h1>
	<em class="logo-slogan"><?php bloginfo('description'); ?></em>
		<nav>
		<ul class="menu">
			<?php wp_list_pages('title_li=<li class="active"><a href="/">Home</a></li>'); ?>
		</ul>
		</nav>
	</header>
</div>