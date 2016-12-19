</section>
		<?php  get_sidebar(); ?>
	  </div>
  		<footer>
        <!-- Feel free to remove the credit below, but we'd love it if you would leave it in! -->
  			<p>
  				(C) <?php  echo date("Y")  ?> <?php  bloginfo('name'); ?> | <strong><?php printf( __( 'zx-spectrum', 'zx-spectrum' ),''); ?></strong> WordPress theme by <a href="<?php echo esc_url('http://www.threetwosevensixseven.com/'); ?>" title="<?php esc_attr_e( 'Threetwosevensixseven', 'zx-spectrum' ); ?>"><strong><?php printf( __( 'Threetwosevensixseven', 'zx-spectrum' ),''); ?></strong></a><br />
  				<a href="<?php  bloginfo('rss2_url'); ?>"><?php _e("Entries (RSS)","zx-spectrum"); ?></a> <?php _e("and","zx-spectrum"); ?> <a href="<?php  bloginfo('comments_rss2_url'); ?>"><?php _e("Comments (RSS)","zx-spectrum"); ?></a>
  			</p>
  		</footer>
  		<?php  wp_footer(); ?>
       <!-- closes container div from header -->
</div>
	</body>
</html>