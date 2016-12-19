<?php  get_header(); ?>
<?php  //get_search_form(); ?>
	<?php 
	
	if (have_posts()) :
	while (have_posts()) :
	the_post();
	?>
			<article <?php  post_class()  ?> id="post-<?php  the_ID(); ?>">
				<header>
				  <h2><?php  the_title(); ?></h2>
				  <h3 class="post-date"><?php  the_time(get_option('date_format'))  ?></h3><br>
		    		</header>
				<section>
				<?php  the_content(__('Read the rest of this entry &raquo;','zx-spectrum')); ?>
					<hr class="clearfix" />
        			<?php  the_tags('<p class="post_tags"><mark>Tagged with:</mark> ', ' | ' ,  '</p>'); ?>
			        <p class="post_categories"><mark><?php _e("Categorized as:","zx-spectrum"); ?></mark> <?php  the_category(' | '); ?> </p>
					  <?php  edit_post_link(__('Edit This Post','zx-spectrum'), '<p class="postmetadata">', '</p>'); ?>
  				  <?php  if(!comments_open()) { ?>
              <p><?php _e("Comments are disabled on this post","zx-spectrum"); ?></p>
            <?php  } ?>
					<hr class="clearfix" />
			        <?php  wp_link_pages('before=<p class="pagination">&after=</p>&next_or_number=number&pagelink=page %'); ?>
				</section>
			</article>
			<?php  comments_template(); ?>
	<?php  endwhile; else : ?>
		<p><?php _e("Sorry, no posts matched your criteria.","zx-spectrum"); ?></p>
	<?php  endif; ?>
<?php  get_footer(); ?>