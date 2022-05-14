<?php 
$title = 'Do...While Loops';
include 'includes/header.php' ?>
<h1>While / Do...While Loops</h1>
<h2>While Loops</h2>
<?php
$food = array('banana', 'chicken', 'potato');
$foodlength = count($food);
$i = 0;
while ($i < $foodlength) {
    echo "$food[$i] ";
    $i++;
}
?>
<h2>Do...while</h2>
<?php
$numbers = array(1, 3, 6, 8, 56, 224, 776, 99, 0);
$arr_size = count($numbers);
$i = 0;
echo "The numbers are: ";
do {
    echo $numbers[$i] . " ";
    $i++;
} while ($i < $arr_size);
?>
<?php require 'includes/footer.php' ?>