<?php
    $items = array('Item One', 'Item Two', 'Item Three');
    $allItems = array_merge($items, $_POST);

    // Can use this function as a helper function to prevent security vulnerabilities on anything we echo in PHP
    function ouput($string) {
        echo htmlspecialchars(strip_tags($string));
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Alternative Syntax</title>
</head>
<body>
    <h1>List of Items</h1>
    <ul>
    <?php foreach ($allItems as $item): ?>
        <!-- Whatever variable we are echoing, instead of echoing the htmlspecialchars every time we can use our own function i.e. output($item) instead of echo htmlspecialchars(strip_tags($item)) -->
        <li><?php echo htmlspecialchars(strip_tags($item)); ?></li> 
    <?php endforeach; ?>
    </ul>

    <form method="POST" action="/form-example.php">
        <input type="text" id="newitem" name="newitem" placeholder="Add new todo item">
        <input type="submit" value="add">
    </form>
</body>
</html>