<?php 
sleep(1); 
$c1 = $_GET['command'];
$fp = fopen("/dev/ttyACM0", "w");
fwrite($fp, chr($c1));
fclose($fp);
?>
<!--Redirect user back to control main page -->
<meta http-equiv="refresh" content="0;url=index.php">

