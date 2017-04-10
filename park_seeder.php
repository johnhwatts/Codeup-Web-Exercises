<?php
require __DIR__ . '/parks_migration.php';

$deleteRecords = 'TRUNCATE national_parks';
$connection->exec($deleteRecords);


$parks = [
    ['name' => 'Acadia',   'location' => 'Maine', 'date_established' => '1919-02-26', 'area_in_acres' => '48995.91'],
    ['name' => 'Arches',   'location' => 'Utah', 'date_established' => '1988-10-31', 'area_in_acres' => '8256.67'],
    ['name' => 'Badlands',   'location' => 'South Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => '242755.94'],
    ['name' => 'Big Bend',   'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => '801163.21'],
    ['name' => 'Biscayne',   'location' => 'Florida', 'date_established' => '1980-06-28', 'area_in_acres' => '172971.11'],
    ['name' => 'Canyonlands',   'location' => 'Utah', 'date_established' => '1964-09-12', 'area_in_acres' => '337597.83'],
    ['name' => 'Congaree',   'location' => 'South Carolina', 'date_established' => '1003-11-10', 'area_in_acres' => '26275.82'],
    ['name' => 'Death Valley',   'location' => 'California, Nevada', 'date_established' => '1994-10-31', 'area_in_acres' => '3373063.14'],
    ['name' => 'Denali',   'location' => 'Alaska', 'date_established' => '1917-02-26', 'area_in_acres' => '4740911.16'],
    ['name' => 'Everglades',   'location' => 'Florida', 'date_established' => '1934-05-30', 'area_in_acres' => '1508975.57']
];

foreach ($parks as $park) {
    $insertRecords = "INSERT INTO national_parks (name, location, date_established, area_in_acres)
    VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";

    $connection->exec($insertRecords);
}


 ?>
