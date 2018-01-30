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


    function init() {

        say_Something();
        echo '<br>';
        calculate();

    }
    function say_Something (){

        echo 'Hello Students!';
    }

    function calculate() {

        echo 2+2;
    }

    init();

    ?>
    
    </body>
</html>