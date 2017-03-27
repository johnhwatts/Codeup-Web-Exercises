<?php 
    
    function randomAdjective() {
        $adjectives = ['present', 'fearful', 'slippery', 'abnormal', 'lamentable', 'handsome', 'quaint', 'breezy', 'delightful', 'huge'];
        return  $adjectives[array_rand($adjectives)];

    }

    function randomNoun() {
        $nouns = ['pig', 'nation', 'front', 'place', 'cough', 'position', 'ground', 'aunt', 'amusement', 'toe'];
        return  $nouns[array_rand($nouns)];
    }

    function pageController()
    {
        $data["randomString"] = randomAdjective() . " " . randomNoun();
        return $data;
    }
    extract(pageController());
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Server Name Generator</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom CSS -->
    <style type="text/css">
        
        h1 {
            text-transform: capitalize;
        }
    </style>

</head>

<body>

    <main class="container">

        <h1><?= $randomString ?></h1>

    </main>
    
    <!-- jQuery Version 1.11.1 -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>