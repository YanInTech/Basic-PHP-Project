<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 4</title>
</head>
<body>
    <h2>Using Math Functions</h2>
    <p>
        <strong>Task</strong>
                :Declare five floating point numbers and five whole numbers. Look for at 
                least 15 Math functions and demonstrate the use of these functions using the 
                declared variables. The results must be displayed.
    </p>
</body>
</html>

<?php
    $fpNum1 = 2.2;
    $fpNum2 = 3.3;
    $fpNum3 = 4.4;
    $fpNum4 = 5.5;
    $fpNum5 = 6.6;

    $num1 = -5;
    $num2 = 10;
    $num3 = 15;
    $num4 = 20;
    $num5 = 25;

    echo abs($num1) . '<br>';
    echo ceil($fpNum4) . '<br>';
    echo floor($fpNum2) . '<br>';
    echo round($fpNum5) . '<br>';
    echo sqrt($num5) . '<br>';
    echo pow($num3, $num2) . '<br>';
    echo max($num1, $num2, $fpNum1) . '<br>';
    echo min($num3, $num4, $fpNum2) . '<br>';
    echo rand($num1, $num5) . '<br>';
    echo log($num2) . '<br>';
    echo log10($num5) . '<br>';
    echo exp($num2) . '<br>';
    echo sin($num3) . '<br>';
    echo cos($num4) . '<br>';
    echo tan($num5) . '<br>';

?>