<?php
ERROR_REPORTING(E_ALL);

$datacenters = array("kenwood", "rackspace", "amazon");
$position = rand(0, (count($datacenters)-1));
$active_datacenter = $datacenters[$position] . " (" . ($position + 1) . ")";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>where am i?</title>
<style type="text/css">
body{
	font-family: "Lucida Sans Unicode", "Lucida Grande", Tahoma, Verdana, sans-serif;
	font-size: .8em;
}
#wrapper{
	margin: 10% auto;
	width: 600px;
}
code, pre{
	font-size: 1.4em;
	font-weight: bold;
	background-color: #FFC;
	padding: 4px 6px;
}
pre{
	border: 2px solid #FDE37B;
}
</style>
</head>
<body>
<div id="wrapper">

    you are here = <code><?php echo $_SERVER['HTTP_HOST'] . " -> " .  $_SERVER['SERVER_ADDR'];?></code><br />
    For this page load, I would send you to = <code><?=$active_datacenter ?></code><br />
	<input type="button" name="reload-bttn" value="reload" onclick="window.location=''" style="width: 100px; padding: 4px; font-size: 2em;" /><br />
	<pre>$datacenters <?php print_r($datacenters); ?></pre>
    Initial thought would be to test if datacenters can return alive state before making them possible candidates. If so, they get added to live array, then we route off it.
    If 1 center can't return alive state, send email/alert about it's inoperate state.
</div>
</body>
</html>