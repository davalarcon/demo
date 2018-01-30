<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
    
<?php

$x = 'Outside';

function convert(){
    global $x;
    $x = "inside";
}
echo '<br>';
echo $x;
echo '<br>';
convert();
echo $x, '<br>';
echo $x;

?>    

    </body>
</html>