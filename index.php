<?php 
$title='Index';
include 'includes/header.php' ?>

<?php
//PHP stuff
echo "This is PHP text on the index page";
echo "<br/>";
echo "Another line in php";
echo "<br/>";
?>

<?php
$name = 'Dirk';
$age = 33;
echo "<h1>Hello " . $name . ".</h1>";
echo "<h1>Im $age years old</h1>"
?>
<?php require 'includes/footer.php' ?>
