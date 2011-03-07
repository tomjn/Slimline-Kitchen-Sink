<?php
/* 
Plugin Name: Slimline Kitchen Sink
Plugin URI: http://www.tomjn.com
Description: Force shows the kitchen sink puts both toolbars on the same bar to save vertical space if there's enough screenspace
Version: 0.2
Author: Tom J Nowell
Author URI: http://tomjn.com
*/

if(is_admin()){
	function adminback_footerjs(){
		?>
		<script>
			jQuery(document).ready(function(){
				setTimeout( function(){
					jQuery('#content_wp_adv, .mce_wp_adv').hide();
					jQuery('.mceToolbarRow2, #content_toolbar2').show();
				},20);
			});
		</script>
		<style>#content_toolbar1, .mceToolbarRow1 { float:left; } #content_toolbar2, .mceToolbarRow2 { margin-top:2px; }</style>
		<?php
	}
	add_action ('admin_footer', 'adminback_footerjs',100);
}
