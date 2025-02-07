<?php
defined( 'ABSPATH' ) or die( 'No script kiddies, please!' );
?>
<h1 class="search-title">
    Today &amp; Later / Search
</h1>
<div class="order-search-form">
	<form action="<?=esc_url(admin_url('admin.php'));?>" method="GET" class="form_pickup_date">
        <input type="hidden" name="page" value="<?=esc_attr($objConf->getExtURL_Prefix());?>order-search-results" />
        <input type="hidden" name="back_tab" value="pickups" />
		<div class="col-date-field">
			<?=esc_html($lang['LANG_FROM_TEXT']);?> &nbsp;
			<input type="text" name="from_date" class="from_pickup_date" />
			<img src="<?=esc_url($staticURLs['PLUGIN_COMMON']['ADMIN_IMAGES'].'Month.png');?>" alt="Date Selector" class="pickup_date_datepicker_from_image date-selector-image" />
			 &nbsp;&nbsp;&nbsp;&nbsp;
			<strong><?=esc_html($lang['LANG_TO_TEXT']);?></strong> &nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="till_date" class="to_pickup_date" />
			<img src="<?=esc_url($staticURLs['PLUGIN_COMMON']['ADMIN_IMAGES'].'Month.png');?>" alt="Date Selector" class="pickup_date_datepicker_to_image date-selector-image" />
		</div>
		<div class="col-search">
			<input type="submit" value="Find" name="search_pickup_date" />
		</div>
	</form>
</div>
<script type="text/javascript">
jQuery(document).ready(function() {
    'use strict';
	jQuery(".from_pickup_date").datepicker({
        maxDate: "+365D",
		numberOfMonths: 2,
        dateFormat: '<?=esc_js($settings['conf_datepicker_date_format']);?>',
        firstDay: <?=esc_js(get_option('start_of_week'));?>
	});
	jQuery(".to_pickup_date").datepicker({
		maxDate: "+365D",
		numberOfMonths: 2,
        dateFormat: '<?=esc_js($settings['conf_datepicker_date_format']);?>',
        firstDay: <?=esc_js(get_option('start_of_week'));?>
	});
	jQuery(".pickup_date_datepicker_from_image").on( "click", function() {
		jQuery(".from_pickup_date").datepicker("show");
	});
	jQuery(".pickup_date_datepicker_to_image").on( "click", function() {
		jQuery(".to_pickup_date").datepicker("show");
	});
});
</script>