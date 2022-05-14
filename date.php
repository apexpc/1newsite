<?php 
$title = 'Time and Date';
include 'includes/header.php' ?>
<h1>Time and Date</h1>
<?php
date_default_timezone_set("America/Los_Angeles");
$date = date("l, F d, Y G:i:s A");
echo "Time zone: " . date_default_timezone_get() . "<br>";
echo $date;
?>
<?php require 'includes/footer.php' ?>