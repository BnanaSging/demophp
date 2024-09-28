<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $week = "Monday";
    switch ($week){

        case "Monday":
            echo"weekdays";
            break;
        case "Tuesday":
            echo"weekdays";
            break;
        case "WEdnesday":
            echo"weekdays";
            break;
        case "Thursday":
            echo"weekdays";
            break;
        case "Friday":
            echo"weekdays";
            break;
        case "Saturday":
            echo"weekends";
            break;
        case "sunday":
            echo"weekends";
            break;
            default:
            echo "not valid date";
            break;

        }
    
    ?>
</body>
</html>