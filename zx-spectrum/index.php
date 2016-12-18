<?php  get_header(); ?>
<?php  //get_search_form(); ?>
	<?php  if (have_posts()) : ?>
		<?php 
	while (have_posts()) :
	the_post();
	?>
			<article <?php  post_class()  ?> id="post-<?php  the_ID(); ?>">
				<header>
				  <h2><a href="<?php  the_permalink()  ?>" rel="bookmark" title="<?php the_title_attribute( array( 'before' => __( 'Permanent Link to', 'Commodore' ))); ?>"><?php the_title(); ?></a></h2>
				  <h3 class="index-date"><?php  the_time(get_option('date_format'))  ?></h3><br>
		    		</header>
		    <section>
				  <?php  the_content(__('Read the rest of this entry &raquo;','Commodore')); ?>
				  <hr class="clearfix" />
          <?php  wp_link_pages('before=<p>&after=</p>&next_or_number=number&pagelink=page %'); ?>
				  <p class="postmetadata"><?php  edit_post_link(__('Edit','Commodore'),'',' | '); ?>  <?php  comments_popup_link(__('Share your thoughts','Commodore'),__('1 Comment','Commodore'),__('% Comments','Commodore')); ?></p>
			  </section>
			</article>
		<?php  endwhile; ?>
			<ul class="prevnext">
				<li><?php  next_posts_link(__('&lt; Older Entries','Commodore'))  ?></li>
				<li><?php  previous_posts_link(__('Newer Entries &gt;','Commodore'))  ?></li>
			</ul>
	<?php  else : ?>
		<article class="noposts">
			<h2><?php _e("404 - Content Not Found","Commodore"); ?></h2>
			<p><?php _e("We don't seem to be able to find the content you have requested - why not try a search below?","Commodore"); ?></p>
			<?php  get_search_form(); ?>
		</article>
	<?php  endif; ?>
<?php  get_footer(); ?>