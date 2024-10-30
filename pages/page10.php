<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/page10.css">
    <link rel="stylesheet" href="../global.css">
    <script src="https://kit.fontawesome.com/51db7b286b.js" crossorigin="anonymous"></script>
    <title>Page 10</title>
</head>
<body>
    <div class="box">
        <div class="title">
            <p>
                <div>
                    <span class="h3"><a href="page9.php"><i class="fa-solid fa-arrow-left"></i></a></span>
                    <span class="h2">Two-dimensional Array</span> 
                    <span class="h3"><a href="../index.php"><i class="fa-solid fa-arrow-right"></i></a> </span>
                    <span class="back"><a href="../index.php"><i class="fa-solid fa-house"></i></a></span>    
                </div>
            </p>
            <p>Create an NxN array  and store integers in each cell</p>
            <p>Display the sum and average of each row, columns, two diagonals, and overall numbers</p>
            <p>Display the smallest and largest number in each row, column, and overall numbers</p>
        </div>

        <form action="page10.php" method="POST">
        <div class="divide">
            <div class="input">
                <div>
                <label>Enter the value of n:</label>
                <input type="text" name="n">     
                </div>
            <input type="submit" name="display" value="Generate numbers and table">

            <?php
                try{
                    if(isset($_POST['display'])){
                        $n = (int)$_POST['n'];

                        createArray($n);
                    }     
                } catch (DivisionByZeroError $e){
                    echo "Invalid integer input";
                }
                   function createArray($n){
                        $array = [];

                        echo "<table border='1' cellspacing='0' cellpadding='5' style='margin-top: 10px;' class='table'>";
                    
                        for ($i = 0; $i < $n; $i++){
                            echo "<tr>";
                            for ($j = 0; $j < $n; $j++){
                                $array[$i][$j] = rand(1, 100);
                                echo "<td>" . $array[$i][$j] . "</td>";
                            }
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo "</div>"; 
                        echo "<div class='result'>";
                        echo "<h3>Result</h3>";
                        rowColSumAve($array, $n);
                        twoDiagonalSumAve($array, $n);
                        smallLargeRowCol($array, $n);
                        overallSumAveMinMax($array, $n);
                        echo "</div>";
                    }
                
            ?>
        </div>
    </div>   
                </div> 
    </form>
</body>
</html>

<?php
    function rowColSumAve($array, $n){
        $rowSum = [];
        $rowAve = [];
        $colSum = [];
        $colAve = [];

        for ($i = 0; $i <$n; $i++){
            $rowSum[$i] = array_sum($array[$i]);
            $rowAve[$i] = $rowSum[$i] / $n;
        }

        for ($j = 0; $j < $n; $j++){
            $colSums = 0;
            for ($i = 0; $i < $n; $i++){
                $colSums += $array[$i][$j];
            }
            $colSum[$j] = $colSums;
            $colAve[$j] = $colSums / $n;
        }

        echo "<p><span>Sum each row</span>-&nbsp;";
        foreach ($rowSum as $sum){
            echo $sum . ",&nbsp;";
        }
        echo "</p>";

        echo "<p><span>Average each row</span>-&nbsp;";
        foreach ($rowAve as $ave){
            echo number_format($ave, 1)  . ",&nbsp;";
        }
        echo "</p>";


        echo "<p><span>Sum each column</span>-&nbsp;";
        foreach ($colSum as $sum){
            echo $sum . ",&nbsp;";
        }
        echo "</p>";


        echo "<p><span>Average each column</span>-&nbsp;";
        foreach ($colAve as $ave){
            echo number_format($ave, 1)  . ",&nbsp;";
        }
        echo "</p>";

    }

    function twoDiagonalSumAve($array, $n){
        $diagonal1Sum = 0;
        $diagonal2Sum = 0;
        for ($i = 0; $i < $n; $i++){
            $diagonal1Sum += $array[$i][$i];
            $diagonal2Sum += $array[$i][$n - $i - 1];
        }
        
        $diagonal1Ave = $diagonal1Sum / $n;
        $diagonal2Ave = $diagonal2Sum / $n;

        echo "<p><span>Sum of the two diagonals</span>-&nbsp;";
        echo $diagonal1Sum . ",&nbsp;" . $diagonal2Sum . "</p>";
        echo "<p><span>Average of the two diagonals</span>-&nbsp;";
        echo number_format($diagonal1Ave,2) . ",&nbsp;" . number_format($diagonal2Ave,2) . "</p>";
    }

    function smallLargeRowCol($array, $n){
        $rowMin = [];
        $rowMax = [];
        $colMin = [];
        $colMax = [];

        for ($i = 0; $i < $n; $i++){
            $rowMin[$i] = min($array[$i]);
            $rowMax[$i] = max($array[$i]);
        }

        for ($j = 0; $j < $n; $j++){
            $colMin[$j] = $array[0][$j];
            $colMax[$j] = $array[0][$j];

            for ($i = 1; $i < $n; $i++){
                if($array[$i][$j] < $colMin[$j]){
                    $colMin[$j] = $array[$i][$j];
                }

                if($array[$i][$j] > $colMax[$j]){
                    $colMax[$j] = $array[$i][$j];
                }
            }
        }

        echo "<p><span>Smallest and Largest Number in row </span>-&nbsp;</p>";
        for ($i = 0; $i < $n; $i++){
            echo "<p><span>Row $i -> Min: " . $rowMin[$i] . ",Max: " . $rowMax[$i] . "</p>";
        }

        echo "<p><span>Smallest and Largest Number in row</span>-&nbsp;</p>";
        for ($j = 0; $j < $n; $j++){
            echo "<p><span>Column $i -> Min: " . $colMin[$j] . ",Max: " . $colMax[$j] . "</p>";
        }

        
    }

    function overallSumAveMinMax($array, $n){
        $overallSum = 0;
        $overallMin = $array[0][0];
        $overallMax = $array[0][0];

        foreach ($array as $row){
            foreach ($row as $num){
                $overallSum += $num;
                if ($num < $overallMin){
                    $overallMin = $num;
                }
                if ($num > $overallMax){
                    $overallMax = $num;
                }
            }
        }
        $overallAve = $overallSum / ($n * $n);

        echo "<p><span>Overall Sum</span>-&nbsp; " . $overallSum . "</p>";
        echo "<p><span>Average</span>-&nbsp; " . number_format($overallAve, 1) . "</p>";
        echo "<p><span>Minimum</span>-&nbsp; " . $overallMin . "</p>";
        echo "<p><span>Maximum</span>-&nbsp; " . $overallMax . "</p>";
    }

    // createArray(3);
?>

<?php
    include ('../includes/footer.html');
?>