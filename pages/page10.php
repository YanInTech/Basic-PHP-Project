<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 10</title>
</head>
<body>
    <h2>Two-dimensional Array</h2>
    <p>
        <strong>Task</strong>
                :Create an NxN array and store NxN integers in each cell. Be able to display the 
                following: 
                <ul>
                    <li>The sum of each row and column</li>
                    <li>Average of each row and column</li>
                    <li>Sum and average of the two diagonals</li>
                    <li>The smallest and the largest number in each row and column</li>
                    <li>Overall sum and average </li>
                    <li>Overall smallest and largest numbers</li>
                </ul>
    </p>
</body>
</html>

<?php
    $x = array(1, 2, 3, 4, 5);
    $y = array(6, 7, 8, 9, 10);

    for ($i = 0; $i < count($x); $i++){
        for ($j = 0; $j < count($y); $j++){
            echo $x[$i] * $y[$j] . "&nbsp;";
        }
        echo "<br>";
    }
    
    
?>