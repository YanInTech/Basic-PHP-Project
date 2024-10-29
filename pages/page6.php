<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/page6.css">
    <link rel="stylesheet" href="../global.css">
    <script src="https://kit.fontawesome.com/51db7b286b.js" crossorigin="anonymous"></script>
    <title>Selection Statements</title>
</head>
<body class="box">
    <div class="title">
        <p>
            <div>
                <span class="h3"><a href="page5.php"><i class="fa-solid fa-arrow-left"></i></a></span>
                <span class="h2">Selection Statements</span> 
                <span class="h3"><a href="page7.php"><i class="fa-solid fa-arrow-right"></i></a> </span>
                <span class="back"><a href="../index.php"><i class="fa-solid fa-house"></i></a></span>    
            </div>
        </p>
        <p>Initialize five string variables and five integer variables.</p>
        <p>Display strings in ascending and descending order</p>
        <p>Display sum, product, and average of the five numbers if the first number is divisible by the fifth number; otherwise, display the numbers in ascending order.</p>
    </div>

    <form action="page6.php" method="POST">
        <div class="divide">
            <div class="input">
                <p>Integer</p>
                <div>
                    <input type="text" name="num1" required>
                    <input type="text" name="num2" required>
                    <input type="text" name="num3" required>
                    <input type="text" name="num4" required>
                    <input type="text" name="num5" required>
                </div>
                <p>String</p>
                <div>
                    <input type="text" name="str1" required>
                    <input type="text" name="str2" required>
                    <input type="text" name="str3" required>
                    <input type="text" name="str4" required>
                    <input type="text" name="str5" required>
                </div>
                <input type="submit" value="Display" name="display">    
            </div>  
            
            <div class="result">
                <h3>Results: </h3>
                <?php
                    if(isset($_POST['display'])){
                        $int1 = $_POST['num1'];
                        $int2 = $_POST['num2'];
                        $int3 = $_POST['num3'];
                        $int4 = $_POST['num4'];
                        $int5 = $_POST['num5'];

                        $str1 = $_POST['str1'];
                        $str2 = $_POST['str2'];
                        $str3 = $_POST['str3'];
                        $str4 = $_POST['str4'];
                        $str5 = $_POST['str5'];

                        function ascendingStr($str1, $str2, $str3, $str4, $str5){
                
                            if ($str1 > $str2){
                                $temp = $str1;
                                $str1 = $str2;
                                $str2 = $temp;
                            }
                    
                            if ($str1 > $str3){
                                $temp = $str1;
                                $str1 = $str3;
                                $str3 = $temp;
                            }
                    
                            if ($str1 > $str4){
                                $temp = $str1;
                                $str1 = $str4;
                                $str4 = $temp;
                            }
                    
                            if ($str1 > $str5){
                                $temp = $str1;
                                $str1 = $str5;
                                $str5 = $temp;
                            }
                    
                            // 2
                            if ($str2 > $str3){
                                $temp = $str2;
                                $str2 = $str3;
                                $str3 = $temp;
                            }
                    
                            if ($str2 > $str4){
                                $temp = $str2;
                                $str2 = $str4;
                                $str4 = $temp;
                            }
                    
                            if ($str2 > $str5){
                                $temp = $str2;
                                $str2 = $str5;
                                $str5 = $temp;
                            }
                    
                            // 3
                            if ($str3 > $str4){
                                $temp = $str3;
                                $str3 = $str4;
                                $str4 = $temp;
                            }
                    
                            if ($str3 > $str5){
                                $temp = $str3;
                                $str3 = $str5;
                                $str5 = $temp;
                            }
                    
                            // 4
                            if ($str4 > $str5){
                                $temp = $str4;
                                $str4 = $str5;
                                $str5 = $temp;
                            }    
                    
                            return "<p><span>Ascending order </span>:
                                    $str1 
                                    $str2  
                                    $str3  
                                    $str4 
                                    $str5 </p>";
                        }
                        
                        function descendingStr($str1, $str2, $str3, $str4, $str5){
                
                        if ($str1 < $str2){
                            $temp = $str1;
                            $str1 = $str2;
                            $str2 = $temp;
                        }
                
                        if ($str1 < $str3){
                            $temp = $str1;
                            $str1 = $str3;
                            $str3 = $temp;
                        }
                
                        if ($str1 < $str4){
                            $temp = $str1;
                            $str1 = $str4;
                            $str4 = $temp;
                        }
                
                        if ($str1 < $str5){
                            $temp = $str1;
                            $str1 = $str5;
                            $str5 = $temp;
                        }
                
                        // 2
                        if ($str2 < $str3){
                            $temp = $str2;
                            $str2 = $str3;
                            $str3 = $temp;
                        }
                
                        if ($str2 < $str4){
                            $temp = $str2;
                            $str2 = $str4;
                            $str4 = $temp;
                        }
                
                        if ($str2 < $str5){
                            $temp = $str2;
                            $str2 = $str5;
                            $str5 = $temp;
                        }
                
                        // 3
                        if ($str3 < $str4){
                            $temp = $str3;
                            $str3 = $str4;
                            $str4 = $temp;
                        }
                
                        if ($str3 < $str5){
                            $temp = $str3;
                            $str3 = $str5;
                            $str5 = $temp;
                        }
                
                        // 4
                        if ($str4 < $str5){
                            $temp = $str4;
                            $str4 = $str5;
                            $str5 = $temp;
                        }    
                
                        return "<p><span>Descending order </span>:
                                    $str1 
                                    $str2  
                                    $str3  
                                    $str4 
                                    $str5 </p>";
                    }
                    
                    function ascendingNum($int1, $int2, $int3, $int4, $int5){
                        if ($int1 > $int2){
                            $temp = $int1;
                            $int1 = $int2;
                            $int2 = $temp;
                        }
                
                        if ($int1 > $int3){
                            $temp = $int1;
                            $int1 = $int3;
                            $int3 = $temp;
                        }
                
                        if ($int1 > $int4){
                            $temp = $int1;
                            $int1 = $int4;
                            $int4 = $temp;
                        }
                
                        if ($int1 > $int5){
                            $temp = $int1;
                            $int1 = $int5;
                            $int5 = $temp;
                        }
                
                        // 2
                        if ($int2 > $int3){
                            $temp = $int2;
                            $int2 = $int3;
                            $int3 = $temp;
                        }
                
                        if ($int2 > $int4){
                            $temp = $int2;
                            $int2 = $int4;
                            $int4 = $temp;
                        }
                
                        if ($int2 > $int5){
                            $temp = $int2;
                            $int2 = $int5;
                            $int5 = $temp;
                        }
                
                        // 3
                        if ($int3 > $int4){
                            $temp = $int3;
                            $int3 = $int4;
                            $int4 = $temp;
                        }
                
                        if ($int3 > $int5){
                            $temp = $int3;
                            $int3 = $int5;
                            $int5 = $temp;
                        }
                
                        // 4
                        if ($int4 > $int5){
                            $temp = $int4;
                            $int4 = $int5;
                            $int5 = $temp;
                        }    
                
                        return "<p><span>Ascending order </span>:
                                    $int1 
                                    $int2  
                                    $int3  
                                    $int4 
                                    $int5 </p>";
                    }
                
                    function isDivisible($int1, $int2, $int3, $int4, $int5){
                        if ($int1 % $int5 == 0){
                            $sum = $int1 + $int2 + $int3 + $int4 + $int5;
                            $prod = $int1 * $int2 * $int3 * $int4 * $int5;
                            $ave = $sum / 5;
                
                            return "<p><span>Sum</span>: $sum <br> 
                                    <span>Product</span>: $prod <br> 
                                    <span>Average</span>: $ave <br></p>";
                        }
                        else{
                            return ascendingNum($int1, $int2, $int3, $int4, $int5);
                        }
                    }

                    echo ascendingStr($str1, $str2, $str3, $str4, $str5);
                    echo descendingStr($str1, $str2, $str3, $str4, $str5);
                    echo isDivisible($int1, $int2, $int3, $int4, $int5);
                    }
                ?>    
        </div>  
        </div>
    </form>
</body>
</html>
<?php
    include ('../includes/footer.html');

?>