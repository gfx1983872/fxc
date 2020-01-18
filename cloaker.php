<?php
//new php file
$ip  = $_SERVER['REMOTE_ADDR'];
$ips = is_array(unserialize(file_get_contents('ips.db'))) ? unserialize(file_get_contents('ips.db')) : array();
if (!in_array($ip, $ips)) {
    $ips[] = $ip;
}
file_put_contents('ips.db', serialize($ips));
?>
<!DOCTYPE html>
<html>
<head>
	<title>Just page 2</title>
</head>
<body>
<div class="erterte">
	<div class="erwerwe">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ut incidunt officiis esse culpa doloremque cumque quos? Ut vero facere tempora eum ducimus nam, sunt error, molestiae placeat nemo voluptas.
	</div>
</div>
</body>
</html>