<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>

    <?php   
    
    function calculate($number1, $number2) {

        $sum = $number1 + $number2;

        return $sum;
    }

    $results = calculate(20,30);
    echo $results;
    echo "<br>";

    $results = calculate (50, $results);
    echo $results;
    echo "<br>";
    
    
    ?>
    
    </body>
</html>