<?php  get_header(); ?>
  <article class="noposts">
  	<h2 style="margin-bottom: 0px;"><?php _e('READY.<br>404 - FILE NOT FOUND<br><br>READY.','Commodore'); ?></h2>
<?php 
	
	if(is_active_widget(false,false,'search')){
		//echo "Active Search Widget"; //We don't need to place the search box here, since we have already into the sidebar.
	} else {
		get_search_form();
	}

	?>
  </article>
<?php  get_footer(); ?>