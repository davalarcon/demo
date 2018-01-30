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
    
    function greeting($message) {

        echo $message;
    }

    greeting ("hello Everybody");
    
    function addNumbers($number1, $number2) {

        $sum = $number1 + $number2;

        echo $sum;
    }

    addNumbers (20,30);
    ?>
    
    </body>
</html>