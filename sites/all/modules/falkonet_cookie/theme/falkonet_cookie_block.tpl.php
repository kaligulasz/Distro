<?php 
	global $base_url;
	
	drupal_add_css(drupal_get_path('module', 'falkonet_cookie') . '/css/jquery.modal.css', array(
		'preprocess' => false
	));
	drupal_add_css(drupal_get_path('module', 'falkonet_cookie') . '/css/cookie_alert.css', array(
		'preprocess' => false
	));
	
        drupal_add_js($base_url . '/misc/ui/jquery.ui.core.min.js');
	//drupal_add_js($base_url . '/misc/ui/jquery.ui.widget.min.js');
	drupal_add_js($base_url . '/misc/ui/jquery.ui.mouse.min.js');
	drupal_add_js($base_url . '/misc/ui/jquery.ui.draggable.min.js');
	drupal_add_js($base_url . '/misc/ui/jquery.ui.position.min.js');
	drupal_add_js($base_url . '/misc/ui/jquery.ui.resizable.min.js');
	drupal_add_js($base_url . '/misc/ui/jquery.ui.dialog.min.js');
        drupal_add_js('http://code.jquery.com/jquery-migrate-1.2.1.js');
	drupal_add_js(falkonet_cookie_get_path() . '/js/cookie_alert.js');
?>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('body').append('<div id="falkonet_cookie_alert"></div>');
		
		$('#falkonet_cookie_alert').load('<?php echo $base_url ?>/falkonet/falkonet_cookie_ajax');
	});
</script>