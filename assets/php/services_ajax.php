<!DOCTYPE html>
<?php
	Ini_Set( 'display_errors', true );
	include("functions.php");
	include("service.class.php");
	include("serviceSAB.class.php");
?>
<html lang="en">
	<script>
	// Enable bootstrap tooltips
	$(function ()
	        { $("[rel=tooltip]").tooltip();
	        });
	</script>
<?php 
$sabnzbdXML = simplexml_load_file('http://127.0.0.1:7878/api?mode=qstatus&output=xml&apikey='.$sabnzbd_api);

if (($sabnzbdXML->state) == 'Downloading'):
	$timeleft = $sabnzbdXML->timeleft;
	$sabTitle = 'SABnzbd ('.$timeleft.')';
else:
	$sabTitle = 'SABnzbd';
endif;

$services = array(
	new service("Plex", 32400, "http://dashbad.com:32400/web/index.html#!/dashboard"),
	new service("pfSense", 80, "http://192.168.1.1", "192.168.1.1"),
	new serviceSAB($sabTitle, 7878, "http://dashbad.com:7878", "127.0.0.1:7878"),
	new service("SickBeard", 8081, "http://dashbad.com:8081"),
	new service("CouchPotato", 5050, "http://dashbad.com:5050"),
	#new service("Transmission", 9091, "http://d4rk.co:9091"),
	new service("Subsonic",4040, "http://dashbad.com:4040")
	
);
?>
<table class ="center">
	<?php foreach($services as $service){ ?>
		<tr>
			<td style="text-align: right; padding-right:5px;" class="exoextralight"><?php echo $service->name; ?></td>
			<td style="text-align: left;"><?php echo $service->makeButton(); ?></td>
		</tr>
	<?php }?>
</table>
