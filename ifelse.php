<?php 
$title = "if...else Statesments";
include 'includes/header.php' ?>
<h1>If else Statesments</h1>
<?php
$grade = 95;
if ($grade > 65) {
    echo "<p>You passed with: <span style='color:green'>$grade</span></p>";
} elseif ($grade < 65) {
    echo "<p>You failed with: <span style='color:red'>$grade</span></p>";
}
?>
<?php require 'includes/footer.php' ?>