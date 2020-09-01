<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_GET['first'], $_GET['second'], $_GET['operator'])) {
        $first = $_GET['first'];
        $second = $_GET['second'];
        $operator = $_GET['operator'];
        echo('<h1>'.$first.' '.$operator.' '.$second.'</h1>');
        if (is_int(intval($first)) && is_int(intval($second))) {
            $result = 0;
            switch ($operator) {
                case 'addition':
                    $result = $first + $second;
                    break;
                case 'subtraction' :
                    $result = $first - $second;
                    break;
                case 'division' :
                    $result = $first / $second;
                    break;
                case 'multiplication' :
                    $result = $first * $second;
                    break;
                case 'modulus' :
                    $result = $first % $second;
                    break;
            }
            echo('<h1>'.$result.'</h1>');

        }
    } else {
        echo('<h1>
    You have to declare the first and the second number and the 3rd parameter should be an operator
</h1>');
    }
?>
</body>
</html>