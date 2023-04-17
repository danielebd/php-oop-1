<?php
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Type.php';

$dune = new Movie('Dune', array(new Types('fantasy'), new Types('drama')), 120, 'Denis Villeneuve');
$johnwick = new Movie('John Wick', array(new Types('action'), new Types('drama')), 90, 'Chad Stahelski');

var_dump($dune);
var_dump($dune->get_types_as_string())



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <h1>Movies</h1>
    <h2><?php echo $dune->get_title() ?></h2>
    <div>Genere:
        <?php echo $dune->get_types_as_string()  ?>
    </div>
    <h2><?php echo $johnwick->get_title() ?></h2>
    <div>Genere:
        <?php echo $johnwick->get_types_as_string()  ?>
    </div>

</body>

</html>