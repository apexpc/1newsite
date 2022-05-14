<?php
$title = 'Arrays and Printouts';
include 'includes/header.php' ?>
<h1>Arrays and Printouts</h1>
<h2>Arrays</h2>
<?php
$food = array('banana', 'chicken', 'potato');
echo "<p>single item at location [0]: <strong>$food[0]</strong> </p>";
echo "Using print_r(arr_name): ";
echo print_r($food);
echo "<br/> Using a for loop to extract items: ";
echo "food array contains:";

for ($count = 0; $count < count($food); $count++) {
    echo "$food[$count],";
}
?>
<?php require 'includes/footer.php' ?>