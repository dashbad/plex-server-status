<!DOCTYPE html>
<?php
	Ini_Set( 'display_errors', true );
	include("functions.php");
?>
<html lang="en">
	<script>
	// Enable bootstrap tooltips
	$(function ()
	        { $("[rel=tooltip]").tooltip();
	        });
	</script>
<?php
	$plexSessionXML = simplexml_load_file($plex_local_ip.'/status/sessions');
	$clientIP = get_client_ip();

	if($clientIP == '10.0.1.1' && ($plexSessionXML->Video[0]['addedAt']) == null) {
		echo '<hr>';
		echo '<h1 class="exoextralight" style="margin-top:5px;">';
		echo '<iframe id="forecast_embed" type="text/html" frameborder="0" height="245" width="100%" src="http://forecast.io/embed/#lat=51.4908&lon=--0.1111&name=Kennington, London"> </iframe>';
		echo 'Forecast';
	}
?>
