<?php
require 'parks_migration.php';

$deleteRecords = 'TRUNCATE national_parks';
$connection->exec($deleteRecords);


$parks = [
    ['name' => 'jason@codeup.com',   'location' => 'Jason Straughan', 'date_established' => '', 'area_in_acres' => ''],
    ['name' => 'jason@codeup.com',   'location' => 'Jason Straughan', 'date_established' => '', 'area_in_acres' => ''],
    ['name' => 'jason@codeup.com',   'location' => 'Jason Straughan', 'date_established' => '', 'area_in_acres' => ''],
    ['name' => 'jason@codeup.com',   'location' => 'Jason Straughan', 'date_established' => '', 'area_in_acres' => ''],
    ['name' => 'jason@codeup.com',   'location' => 'Jason Straughan', 'date_established' => '', 'area_in_acres' => ''],
    ['name' => 'jason@codeup.com',   'location' => 'Jason Straughan', 'date_established' => '', 'area_in_acres' => ''],
    ['name' => 'jason@codeup.com',   'location' => 'Jason Straughan', 'date_established' => '', 'area_in_acres' => ''],
    ['name' => 'jason@codeup.com',   'location' => 'Jason Straughan', 'date_established' => '', 'area_in_acres' => ''],
    ['name' => 'jason@codeup.com',   'location' => 'Jason Straughan', 'date_established' => '', 'area_in_acres' => ''],
    ['name' => 'jason@codeup.com',   'location' => 'Jason Straughan', 'date_established' => '', 'area_in_acres' => '']
];

foreach ($parks as $park) {
    $insertRecords = "INSERT INTO national_parks (email, name) VALUES ('{$user['email']}', '{$user['name']}')";

    $dbc->exec($query);

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}


 ?>
