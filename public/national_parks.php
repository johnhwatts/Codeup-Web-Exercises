<?php

// connnect to db, present db connection as $connection variable

require __DIR__ . "/../db_connect.php";

// Input is talking to the request superglobal

require_once '../Input.php';

$page = Input::get('page', 1);
$limit = '4';
$offset = $limit * ($page - 1);
$totalParks = $connection->query("SELECT count (*) FROM national_parks")->fetchColumn();

// protect from looking at blank pages past the number of results

$maxPage = ($totalParks / $limit) - 1;

// get all parks with a limit per page

$query = "SELECT * FROM national_parks LIMIT {$limit} OFFSET {$offset}";
$statement = $connection->query($query);
$parks = [];

while ($park = $statement->fetch(PDO::FETCH_ASSOC))
{
$parks[] = $park;
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- Custom font-family  -->
    <link href="https://fonts.googleapis.com/css?family=PT+Mono" rel="stylesheet">
    <!-- latest compiled and minified CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- custom CSS -->
    <link rel="stylesheet" href="/css/national_parks.css">

    <title>National Parks</title>
</head>

<body>
    <main class="container">
        <h1>National Parks</h1>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Date Established</th>
                        <th>Area in Acres</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <?php foreach($parks as $park): ?>
                <tbody>
                    <tr>
                        <td>
                            <?= $park['name'] ?>
                        </td>
                        <td>
                            <?= $park['location'] ?>
                        </td>
                        <td>
                            <?= $park['date_established'] ?>
                        </td>
                        <td>
                            <?= $park['area_in_acres'] ?>
                        </td>
                        <td>
                            <?= $park['description'] ?>
                        </td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
        </div>

              <?php $page = 1;
                  for ($i = 1; $i <= $totalParks; $i+=$limit) { ?>
                      <a href="national_parks.php?page=<?=$page?>">
                          <div class="btn btn-primary">
                              <?=$page++?>
                          </div>
                      </a>
              <?php } ?>
    </main>
</body>

</html>
