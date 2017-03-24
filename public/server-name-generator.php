<?php

//Create an array of 10 adjectives and output random adjective

$adjectives = ['present', 'fearful', 'slippery', 'abnormal', 'lamentable', 'handsomely', 'quaint', 'breezy', 'delightful', 'huge'];

$adjectiveInput = $adjectives;
$rand_keys = array_rand($adjectiveInput, 2);
$randomAdjective = $adjectiveInput[$rand_keys[0]] . "\n";

//Create an array of 10 nouns and output random noun

$nouns = ['pig', 'nation', 'front', 'place', 'cough', 'position', 'ground', 'aunt', 'amusement', 'toe'];

$nounInput = $nouns;
$rand_keys = array_rand($nounInput, 2);
$randomNoun = $nounInput[$rand_keys[0]] . "\n";



?>

<!DOCTYPE html>

<html>
<head>
    <title>Random Server Name</title>
</head>

<body>
    <h1>Server name generator</h1>
    <?php 
    echo "$randomAdjective $randomNoun";
    ?>
</body>
</html>