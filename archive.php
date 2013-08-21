<?php get_header(); ?>
<div class="row">
	<div class="span8">
		<h1><?php _e('blog archive'); ?><?php echo get_the_date('F Y'); ?></h1>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title_attribute(); ?></a></h2>
			<div>
				<span><a href="<?php the_permalink(); ?>"><?php the_time(get_option('date_format')); ?></a></span>
				<span><?php _e('by'); ?><?php the_author_posts_link(); ?></span>
				<span><?php edit_post_link(__('[ Edit ]')); ?></span>
			</div>
			<div>
				<?php the_content(); ?>
			</div>
			<div>
				<span><?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?></span>
				<span><?php comments_popup_link(); ?></span>
			</div>
		</div>

		<?php endwhile; else: ?>
		<div>
			<p><?php _e('no found'); ?></p>
			<?php get_search_form(); ?>
		</div>
		<?php endif; ?>
	</div>
	<div class="span4">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
