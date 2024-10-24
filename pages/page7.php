<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 7</title>
</head>
<body>
    <h2>Loop Statements</h2>
    <p>
        <strong>Task</strong>
                :Declare the whole number variables n and m. Be able to display the 
                following:  
                <ul>
                    <li>Display n x m multiplication table using for <u>loop</u> </li>
                    <li>Display n Fibonacci series and m Fibonacci series using while loop. </li>
                    <li>Compute the factorial of n and summation of m using do…while loop.</li>
                </ul>
    </p>
</body>
</html>

<?php
    $n = 8;
    $m = 10;

    // multiplication table
    echo "<h3>Multiplication Table</h3>";
    for($i = 1; $i <= $n; $i++){
        for($j = 1; $j <= $m; $j++){
            echo $j * $i . "&nbsp;";
        }
        echo "<br>";
    }

    // n Fibonacci series
    echo "<h3>Fibonacci Series for n</h3>";
    // $i = 0;
    // $limit = 10;
    // $count = 0;

    // while ($count <= $limit){
    //     echo $i . " ";

    //     $nextNum = $i + $n;

    //     $i = $n;
    //     $n = $nextNum;

    //     $count++;
    // }
    // echo "<br>";
    $prev = 0;
    $curr = $n;
    $count = 1;
    $limit = 10;
    $sum = $prev+$curr;
    
    while ($count <= $limit){
        echo "$sum  ";
        $sum = $prev + $curr;
        $prev = $curr;
        $curr = $sum;
        $count ++;
    }
    echo "<br>";

    // m Fibonacci series
    echo "<h3>Fibonacci Series for m</h3>";
    $prev = 0;
    $curr = $m;
    $count = 1;
    $limit = 10;
    $sum = $prev+$curr;
    
    while ($count <= $limit){
        echo "$sum  ";
        $sum = $prev + $curr;
        $prev = $curr;
        $curr = $sum;
        $count ++;
    }
    echo "<br>";

    // factorial of n
    echo "<br><h3>Factorial of n</h3>";
    $n = 8;
    $factorialn = 1;
    $f = 1;
    do {
        $factorialn *= $f;
        $f++;
    } while ($f <= $n);
    echo $factorialn . "    ";

    // summation of m
    echo "<br><h3>Summation of m</h3>";
    $m = 10;
    $summation = 0;
    $f = 1;
    do {
        $summation += $f;
        $f++;
    } while ($f <= $m);
    echo $summation . "    ";
    
?>