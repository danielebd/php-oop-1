<?php
require_once __DIR__ . '/Function.php';
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
    <?php foreach ($results as $result) : ?>
        
        <h2><?php echo $result->get_title() ?></h2>
        <div><?php echo "Regista: {$result->get_director()}" ?></div>
        <div><?php echo "Durata: {$result->get_duration()}min" ?></div>
        <div>Genere:
            <?php echo $result->get_types_as_string()?>
        </div>
    <?php endforeach ?>

</body>

</html>