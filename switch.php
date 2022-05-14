<?php 
$title = 'Switch Stamesments';
include 'includes/header.php'?>
    <h1>Switch Statesment</h1>
    <?php
    $size = 'v';
    switch ($size) {
        case 'S':
            echo "Shirt size is: Small";
            break;
        case 'M':
            echo "Shirt size is: Medium";
            break;
        case 'L':
            echo "Shirt size is: Large";
            break;
            default:
            echo "Enter a valid Size.";
    }
    ?>
<?php require 'includes/footer.php' ?>