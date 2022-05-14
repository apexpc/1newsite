<?php 
$title= "Functions";
include 'includes/header.php' ?>
<h1>Functions</h1>

<?php
function sum($sum1 = 0, $sum2 = 0)
{
    $sum3 = $sum1 + $sum2;
    return $sum3;
}
echo "The sum of 20 + 5 is: " . sum(20, 5);

function product($num1 = 1, $num2 = 1)
{
    $num3 = $num1 * $num2;
    return $num3;
}
echo "<br>The product of 6*6 is: " . product(6, 6);
?>

<?php require 'includes/footer.php' ?>