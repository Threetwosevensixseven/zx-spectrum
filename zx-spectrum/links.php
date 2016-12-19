<?php
 /*
Template Name: Links
*/ ?>
<?php  get_header(); ?>
<?php  //get_search_form(); ?>
<article id="links">
<h2><?php _e("Links:","zx-spectrum"); ?></h2>
<ul>
<?php  wp_list_bookmarks(); ?>
</ul>
</article>
<?php  get_footer(); ?>