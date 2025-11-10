<?php if ( is_active_sidebar( 'your-sidebar-slug' ) ) { ?>
	<ul id="sidebar-1" class="sidebar-widget">
        
		<?php dynamic_sidebar('your-sidebar-slug'); ?>
	</ul>
<?php } ?>