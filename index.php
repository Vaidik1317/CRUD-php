<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Vaidik</h1>
    <?php
    $fav = "pink";
    switch($fav)
    {
        case "red":
            echo "vedu's favorite color is red";
            break;
        case "pink":
            echo "vedu's favorite color is pink";
            break;
        case "blue":
            echo "vedu's favorite color is Blue";
            break;
        case "yellow":
            echo "vedu's favorite color is yellow";
            break;
        default:
            echo "please select any color";
    }
    ?>
</body>
</html>
