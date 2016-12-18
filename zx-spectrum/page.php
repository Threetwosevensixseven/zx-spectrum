<?php  get_header(); ?>
<?php  //get_search_form(); ?>
	<?php 
	
	if (have_posts()) :
	while (have_posts()) :
	the_post();
	?>
			<article <?php  post_class()  ?> id="post-<?php  the_ID(); ?>">
				<header>
				  <h1><?php  the_title(); ?></h1>
	    	</header>
		    <section>

					<?php 
						if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							the_post_thumbnail();
						} 
					?>

				  <?php  the_content(__('Read the rest of this entry &raquo;','Commodore')); ?>
          <hr class="clearfix" />
          <?php  wp_link_pages('before=<p>&after=</p>&next_or_number=number&pagelink=page %'); ?>
				  <?php  edit_post_link(__('Edit','Commodore'), '<p>', '</p>'); ?>
			  </section>
				<hr class="clearfix" />
			</article>
      <?php
	
	if(comments_open()) {
		comments_template();
	}

	?>
	<?php  endwhile; else : ?>
		<p><?php _e("Sorry, no posts matched your criteria.","Commodore"); ?></p>
	<?php  endif; ?>
<?php  get_footer(); ?>