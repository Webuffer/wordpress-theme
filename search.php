<?php get_header(); ?>
<div>
	<div class="span8">
		<h1><?php _e('search result'); echo ':'.get_search_query(); ?></h1>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			// 显示文字摘要
			<?php the_excerpt(); ?>
		<?php endwhile; else: ?>
		
			<p><?php _e('no search result.'); ?></p>
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div>
	<div class="span4">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
