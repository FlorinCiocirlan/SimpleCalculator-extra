<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="display: flex;justify-content: center;align-items: center">
<div style="width: fit-content;height: fit-content">
<form action="" method="POST">
    <input type="text" name="first">
    <label >x</label>
    <br />
    <input type="text" name="second" >
    <label >y</label>
    <br />
    <input type="text" name="operator" >
    <label >operation</label>
    <br />
    <br />
    <input type="submit" name="submit" value="Calculate"  style="display: block">
</form>
</div>
<?php
    if (isset($_POST['submit'])) {
        $first = $_POST['first'];
        $second = $_POST['second'];
        $operator = $_POST['operator'];
        $result = 0;
        switch ($operator) {
            case 'addition' :
                $result = $first + $second;
                break;
            case 'subtraction' :
                $result = $first - $second;
                break;
            case 'multiplication' :
                $result = $first * $second;
                break;
            case 'division' :
                $result = $first / $second;
                break;
        }
        echo '<h1 style="display: block">Your operation was : '.$first.' '.$operator.' '.$second.'</h1>';
        echo '<h1 style="display: block">The result is '.$result.'</h1>';
    }
?>
</body>
</html>