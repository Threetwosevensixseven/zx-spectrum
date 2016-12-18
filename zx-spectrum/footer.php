</section>
		<?php  get_sidebar(); ?>
	  </div>
  		<footer>
        <!-- Feel free to remove the credit below, but we'd love it if you would leave it in! -->
  			<p>
  				&copy; <?php  echo date("Y")  ?> <?php  bloginfo('name'); ?> | <strong><?php printf( __( 'Commodore', 'Commodore' ),''); ?></strong> by <a href="<?php echo esc_url('http://unitednetworksonline.com/wordpress-themes/'); ?>" title="<?php esc_attr_e( 'United Networks', 'Commodore' ); ?>"><strong><?php printf( __( 'United Networks', 'Commodore' ),''); ?></strong></a><br />
  				<a href="<?php  bloginfo('rss2_url'); ?>"><?php _e("Entries (RSS)","Commodore"); ?></a> <?php _e("and","Commodore"); ?> <a href="<?php  bloginfo('comments_rss2_url'); ?>"><?php _e("Comments (RSS)","Commodore"); ?></a>
  			</p>
  		</footer>
  		<?php  wp_footer(); ?>
       <!-- closes container div from header -->
</div>
	</body>
</html>