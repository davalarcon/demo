<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

    <?php

   $names = array('David', 'Lucas', 'Eric');

    print_r($names);


    $fullName = array('firstName' => 'David' , 'secondName' => 'Alarcon' );

    echo $fullName['firstName'] . ' ' . $fullName['secondName'];

    ?>
    
    </body>
</html>