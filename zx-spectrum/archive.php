<?php get_header(); ?>
		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2><?php _e('Archive for the','Commodore'); ?> &#8216;<?php single_cat_title(); ?>&#8217; <?php _e('Category','Commodore'); ?></h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2><?php _e('Posts Tagged','Commodore'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2><?php _e('Archive for ','Commodore'); ?> <?php the_time('F jS, Y',get_option('date_format')); ?></h2><!-- mrock changed -->
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2><?php _e('Archive for ','Commodore'); ?> <?php the_time('F, Y',get_option('date_format')); ?></h2><!-- mrock changed -->
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2><?php _e('Archive for ','Commodore'); ?> <?php the_time('Y',get_option('date_format')); ?></h2><!-- mrock changed -->
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2><?php _e('Author Archive','Commodore'); ?></h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2><?php _e('Blog Archives','Commodore'); ?></h2>
 	  <?php } ?>

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<header>
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>');
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
		    </header>
		
		    <section>
		      		
				<?php  
				//Get images attached to the post
				if(isset($img)) {
				  unset($img);
				}
				$args = array(  
					'post_type' => 'attachment',  
					'post_mime_type' => 'image',  
					'numberposts' => -1,  
						'order' => 'ASC',  
					'post_status' => null,  
					'post_parent' => $post->ID  
				);  
				$attachments = get_posts($args);  
				if ($attachments) {  
					foreach ($attachments as $attachment) {  
						$img = wp_get_attachment_thumb_url( $attachment->ID );  
								break;  
						}  
				//Display image  
							
				}  
				?>  
				
				<div>
					<?php the_excerpt( __('Read the rest of this entry &raquo;','Commodore')); ?>
					<p class="postmetadata"><?php edit_post_link(__('Edit','Commodore'),'',' | '); ?>  <?php comments_popup_link(__('Share your thoughts on this','Commodore'),__('1 Comment','Commodore'),__('% Comments','Commodore')); ?></p>
				</div>
				
			  </section>
				
			</article>

		<?php endwhile; ?>

			<ul class="prevnext">
				<li><?php next_posts_link(__('&lt; Older Entries','Commodore')) ?></li>
				<li><?php previous_posts_link(__('Newer Entries &gt;','Commodore')) ?></li>
			</ul>
			
	<?php else : ?>
	
		<article>

		<?php

		if ( is_category() ) { // If this is a category archive
			printf('<h2 class="center">' . __("Sorry, but there aren't any posts in the %s category yet.","Commodore") . '</h2>', single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo('<h2>' . __("Sorry, but there aren't any posts with this date.","Commodore") . '</h2>');
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf('<h2 class="center">' . __("Sorry, but there aren't any posts by %s yet.","Commodore") . '</h2>', $userdata->display_name);
		} else {
			echo('<h2 class="center">' . __("No posts found.","Commodore") . '</h2>');
		}
		get_search_form();

		?>

		</article>

		<?php endif; ?>
	
<?php get_footer(); ?>