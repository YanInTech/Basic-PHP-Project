<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/page7.css">
    <link rel="stylesheet" href="../global.css">
    <script src="https://kit.fontawesome.com/51db7b286b.js" crossorigin="anonymous"></script>
    <title>Loop Statements</title>
</head>
<body>
    <div class="box">
        <div class="title">
            <p>
                <div>
                    <span class="h3"><a href="page6.php"><i class="fa-solid fa-arrow-left"></i></a></span>
                    <span class="h2">Loop Statements</span> 
                    <span class="h3"><a href="page8.php"><i class="fa-solid fa-arrow-right"></i></a> </span>
                    <span class="back"><a href="../index.php"><i class="fa-solid fa-house"></i></a></span>    
                </div>
            </p>
            <p>Declare the whole variable n and m</p>
            <p>Display n x m multiplication table using for loop</p>
            <p>Display n Fibonacci series and m Fibonacci series using while loop</p>
            <p>Compute the factorial of n and summation of m using do... while loop</p>
        </div>
        
        <form action="page7.php" method="POST">
            <div class="input">
                <label>Enter the value of n:</label>
                <input type="number" name="n" placeholder="Enter number 1 - 10" required min="1" max ="10">    
            </div>
            <div class="input">
                <label>Enter the value of m:</label>
                <input type="number" name="m" placeholder="Enter number 1 - 10" required min="1" max ="10">    
            </div>

            <input type="submit" name="display" value="Display and compute">
            <hr>
        </form>   
        <?php
            echo "<h3 class = 'result' >Results</h3>";
            if(isset($_POST['display'])){
                $n = (int)$_POST['n'];
                $m = (int)$_POST['m'];
                
                echo "<div class = 'divide'><div>";
                echo "<p><span>Multiplication Table</span>:</p>";
                echo "<table class = 'table'>";
                for($i = 1; $i <= $n; $i++){
                    echo "<tr>";
                    for($j = 1; $j <= $m; $j++){
                        echo "<td>" . $j * $i . "</td>";
                    }
                    echo "</tr>";
                }
                
                echo "</table>";
                echo "</div>";
                // n Fibonacci series
                echo "<div class = 'right'>";
                echo "<p><span>Fibonacci Series for n</span>:";
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
                echo "</p>";

                // m Fibonacci series
                echo "<p><span>Fibonacci Series for m</span>:";
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
                echo "</p>";

                // factorial of n
                echo "<p><span>Factorial of n</span>:";
                $factorialn = 1;
                $f = 1;
                do {
                    $factorialn *= $f;
                    $f++;
                } while ($f <= $n);
                echo $factorialn . "    ";
                echo "</p>";
                // summation of m
                echo "<p><span>Summation of m</span>:";
                $summation = 0;
                $f = 1;
                do {
                    $summation += $f;
                    $f++;
                } while ($f <= $m);
                echo $summation . "    ";
                echo "</p>";
                echo "</div>";
                echo "</div>";
            }
        ?>         
    </div>
    
</body>
</html>


<?php   include ('../includes/footer.html');
?>