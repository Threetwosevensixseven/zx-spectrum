<?php  if (post_password_required() ) { ?>
  <p class="nocomments"><?php _e("This post is password protected. Enter the password to view comments.","zx-spectrum"); ?></p>
<?php 
		return;
	}

	?>
<!-- You can start editing here. -->
<?php  if ( have_comments() ) : ?>
  <section class="comments">
    <header>
      <h2><?php  comments_number(__('No Comments','zx-spectrum'),__('One Comment','zx-spectrum'),__('% Comments','zx-spectrum') ); ?> </h2>
    </header>
    <ol class="commentlist">
      <?php  wp_list_comments(array('avatar_size' => 70)); ?>
    </ol>
    <div class="navigation">
      <div class="alignleft"><?php  previous_comments_link()  ?></div>
      <div class="alignright"><?php  next_comments_link()  ?></div>
    </div>
<?php  else :// this is displayed if there are no comments so far  ?>
  <?php  if ( comments_open() ) : ?>
    <!-- If comments are open, but there are no comments. -->
  <?php  else :// comments are closed  ?>
    <?php  if(!is_page()) { ?>
      <!-- If comments are closed. -->
      <p class="nocomments"><?php _e("Comments are closed.","zx-spectrum"); ?></p>
    <?php  } ?>
  <?php  endif; ?>
    <hr class="clearfix" />
<?php  endif; ?>
<?php  if (comments_open()) : ?>
    <?php  comment_form(); ?>
    <hr class="clearfix" />
<?php  endif;// if you delete this the sky will fall on your head  ?>
</section>