<?php 

$datetime = new DateTime();
echo $datetime->format('Y-m-d H:i:s');
echo "<br>";
echo $datetime->format('i');
echo "<br>";
echo $datetime->format('l');
echo "<br>";
echo $datetime->format('m');
?>