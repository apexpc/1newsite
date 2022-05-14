<?php 
$title = "String Manipulation";
include 'includes/header.php'?>
    <h1>String Manipulation</h1>
    <?php
    $string1="this is string 1 ";
    $string2="this is string 2 ";
    $string3=$string1.$string2;

    echo "String1: " .$string1;
    echo"<br/>";
    echo "String2: " .$string2;
    echo"<br/>";
    echo "Strings concatinated: " .$string1. " ".$string2;

    echo "<br>Strings first letter capitalized: ".ucfirst($string3);
    echo "<br>Strings every word capitalized: " .strtoupper($string3);
    echo "<br>Strings first letter of each word capitalized: " .ucwords($string3);
    echo "Where is the 'string' word: at position ".stripos($string3,"string");
    ?>
<?php require 'includes/footer.php' ?>