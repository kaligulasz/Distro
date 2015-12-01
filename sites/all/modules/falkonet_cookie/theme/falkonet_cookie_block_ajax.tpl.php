<?php
if(!isset($_COOKIE['falkonet_cookie_alert_' . $uid])) :
?>

<div id="falkonet_cookie_alert">
	<div class="ca_content_wrapper">
		<div class="ca_buttons">
			<button id="ca_accept">Zamknij</button>
		</div>
		<!-- <div class="ca_title">Ważne: Strona wykorzystuje pliki cookies.</div> -->

		<!-- Używamy informacji zapisanych za pomocą cookies i podobnych technologii m.in. w celach reklamowych i statystycznych oraz w celu dostosowania serwisu do indywidualnych potrzeb użytkowników. Korzystanie z witryny bez zmiany ustawień dotyczących cookies oznacza, że będą one zamieszczane w Państwa urządzeniu końcowym. Możecie Państwo dokonać w każdym czasie zmiany ustawień dotyczących cookies. Więcej informacji można znaleźć w naszej -->
		<div class="content">
		Pliki cookie pomagają nam udostępniać nasze usługi. Korzystanie ze strony jest równoznaczne z akceptacją treści w
		<a href="#" id="ca_cookies_policy">polityce cookies</a>
		</div>
	</div>

	<div id="ca-popup-wrapper">
		<?php echo $content ?>
	</div>
</div>


<script type="text/javascript">
jQuery(document).ready(function ($) {
	jQuery('#ca_cookies_policy').click(function(event) {
		  event.preventDefault();
		  jQuery('#ca-popup-wrapper').dialog({
		  	position: { my: "center", at: "center", of: window },
		  	width: '800',
		  	modal: true

		  	});
	});

	jQuery('.ca_close').click(function(event) {
		jQuery.modal.close();
	});

	jQuery('#ca_accept').click(function(event) {
		falkonet_set_cookie('falkonet_cookie_alert_<?php echo $uid ?>', 'accepted', 30);
		jQuery('#falkonet_cookie_alert').hide();
	});
});
</script>

<?php
else:
?>
<script type="text/javascript">
	falkonet_set_cookie('falkonet_cookie_alert_<?php echo $uid ?>', 'accepted', 30);
</script>
<?php
endif;