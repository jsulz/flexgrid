<?php 

get_header();

if( have_posts() ) {
	while( have_posts() ) {
		the_post(); ?>
			<h1><? the_title(); ?></h1>
			<article>
			<? the_content(); ?>
			</article>
		<?
	}
}

get_footer();

?>