<?php  get_header(); ?>
  <?php 
	
	if (have_posts()) :
	while (have_posts()) :
	the_post();
	?>
		<article <?php  post_class()  ?> id="post-<?php  the_ID(); ?>">
			<h2><a href="<?php  echo get_permalink($post->post_parent); ?>" rev="attachment"><?php  echo get_the_title($post->post_parent); ?></a> &raquo; <?php  the_title(); ?></h2>
			<div class="entry">
				<p class="attachment"><a href="<?php  echo wp_get_attachment_url($post->ID); ?>"><?php  echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a></p>
				<div class="caption"><?php  if ( !empty($post->post_excerpt) ) the_excerpt();// this is the "caption"  ?></div>
				<?php  the_content(__('<p class="serif">Read the rest of this entry &raquo;</p>','Commodore')); ?>
				<div class="navigation">
					<div class="alignleft"><?php  previous_image_link()  ?></div>
					<div class="alignright"><?php  next_image_link()  ?></div>
				</div>
				<hr class="clearfix" />
			</div>
		</article>
	<?php  comments_template(); ?>
	<?php  endwhile; else : ?>
		<p><?php _e("Sorry, no attachments matched your criteria.","Commodore"); ?></p>
<?php  endif; ?>
<?php  get_footer(); ?>