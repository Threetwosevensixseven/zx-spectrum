<?php  get_header(); ?>
	<article id="search-results">
	<?php  if (have_posts()) : ?>
		<h2 class="pagetitle"><?php _e("Search Results for","zx-spectrum"); ?> &quot;<?php  the_search_query(); ?>&quot;</h2>
		<?php 
	while (have_posts()) :
	the_post();
	?>
			<div <?php  post_class()  ?>>
				<h3 id="post-<?php  the_ID(); ?>">&bull; <a href="<?php  the_permalink()  ?>" rel="bookmark" title="<?php the_title_attribute( array( 'before' => __( 'Permanent Link to', 'zx-spectrum' ))); ?>"><?php the_title(); ?></a></h3>
				<small><?php  the_time(get_option('date_format'))  ?></small>
			</div>
		<?php  endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php  next_posts_link(__('&laquo; Older Entries','zx-spectrum'))  ?></div>
			<div class="alignright"><?php  previous_posts_link(__('Newer Entries &raquo;','zx-spectrum'))  ?></div>
		</div>
	<?php  else : ?>
		<h2><?php  the_search_query(); ?><br /></h2>
		<h2 class="error"><?php _e("2 Variable not found, 0:1","zx-spectrum"); ?></h2>
	<?php  endif; ?>
<?php 
	
	if(is_active_widget(false,false,'search')){
		//echo "Active Search Widget"; //We don't need to place the search box here, since we have already into the sidebar.
	} else {
		get_search_form();
	}

	?>
	</article>
<?php  get_footer(); ?>