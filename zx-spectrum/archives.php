<?php
 /*
Template Name: Archives
*/ ?>

<?php  get_header(); ?>
<?php  //get_search_form(); ?>
<div id="content" class="widecolumn">
<?php  get_search_form(); ?>
<h2><?php _e('Archives by Month:','zx-spectrum'); ?></h2>
	<ul>
		<?php  wp_get_archives(array('type' => 'monthly')); ?>
	</ul>
<h2><?php _e('Archives by Subject:','zx-spectrum'); ?></h2>
	<ul>
		 <?php  wp_list_categories(); ?>
	</ul>
</div>
<?php  get_footer(); ?>