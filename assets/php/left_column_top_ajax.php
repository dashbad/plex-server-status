<!DOCTYPE html>
<?php
	Ini_Set( 'display_errors', true );
	include("functions.php");

	$plexSessionXML = simplexml_load_file($plex_server_ip.'/status/sessions');
		// extra if code for only displaying weather when plex is playing:   && count($plexSessionXML->Video) > 0
		//echo '<h4 class="exoextralight">Forecast</h4>';
		//echo '<iframe id="forecast_embed" type="text/html" frameborder="0" height="245" width="100%" src="http://forecast.io/embed/#lat=40.7838&lon=-96.622773&name=Lincoln, NE"> </iframe>';
		makeWeatherSidebar();
?>
