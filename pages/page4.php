<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/page4.css">
    <link rel="stylesheet" href="../global.css">
    <script src="https://kit.fontawesome.com/51db7b286b.js" crossorigin="anonymous"></script>
    <title>Using Math Functions</title>
</head>
<body >
    <div class="box">
        <div class="title">
            <p>
                <div>
                    <span class="h3"><a href="page3.php"><i class="fa-solid fa-arrow-left"></i></a></span>
                    <span class="h2">Using Math Functions</span> 
                    <span class="h3"><a href="page5.php"><i class="fa-solid fa-arrow-right"></i></a> </span>
                    <span class="back"><a href="../index.php"><i class="fa-solid fa-house"></i></a></span>    
                </div>
            </p>
            <p>Declare 5 floating number and 5  whole numbers</p>
            <p>Select Math Functions to demonstrate</p>
        </div>
        
        <form action="page4.php" method="POST">
            <div class="inputs">
                <div>
                    <p>Floating point Numbers</p>
                    <input type="text" name="fpNum1">
                    <input type="text" name="fpNum2">
                    <input type="text" name="fpNum3">
                    <input type="text" name="fpNum4">
                    <input type="text" name="fpNum5">    
                </div>
                <div>
                    <p>Whole Numbers</p>
                    <input type="text" name="num1">
                    <input type="text" name="num2">
                    <input type="text" name="num3">
                    <input type="text" name="num4">
                    <input type="text" name="num5">
                </div>    
            </div>

            

            <div class="results">
                <div>
                    <h3>Results :</h3>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $fpNum1 = (float)$_POST['fpNum1'];
                        $fpNum2 = (float)$_POST['fpNum2'];
                        $fpNum3 = (float)$_POST['fpNum3'];
                        $fpNum4 = (float)$_POST['fpNum4'];
                        $fpNum5 = (float)$_POST['fpNum5'];
                        
                        if (isset($_POST['abs'])) {
                            echo "<p>" . "<span>". abs($fpNum1). "</span>"
                                    . "<span>". abs($fpNum2). "</span>"    
                                    . "<span>". abs($fpNum3). "</span>"
                                    . "<span>". abs($fpNum4). "</span>"
                                    . "<span>". abs($fpNum5). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['ceil'])) {
                            echo "<p>" . "<span>". ceil($fpNum1). "</span>"
                                    . "<span>". ceil($fpNum2). "</span>"    
                                    . "<span>". ceil($fpNum3). "</span>"
                                    . "<span>". ceil($fpNum4). "</span>"
                                    . "<span>". ceil($fpNum5). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['floor'])) {
                            echo "<p>" . "<span>". floor($fpNum1). "</span>"
                                    . "<span>". floor($fpNum2). "</span>"    
                                    . "<span>". floor($fpNum3). "</span>"
                                    . "<span>". floor($fpNum4). "</span>"
                                    . "<span>". floor($fpNum5). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['round'])) {
                            echo "<p>" . "<span>". round($fpNum1). "</span>"
                                    . "<span>". round($fpNum2). "</span>"    
                                    . "<span>". round($fpNum3). "</span>"
                                    . "<span>". round($fpNum4). "</span>"
                                    . "<span>". round($fpNum5). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['sqrt'])) {
                            echo "<p>" . "<span>". number_format(sqrt($fpNum1),2). "</span>"
                                    . "<span>". number_format(sqrt($fpNum2),2). "</span>"    
                                    . "<span>". number_format(sqrt($fpNum3),2). "</span>"
                                    . "<span>". number_format(sqrt($fpNum4),2). "</span>"
                                    . "<span>". number_format(sqrt($fpNum5),2). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['decbin'])) {
                            echo "<p>" . "<span>". decbin($fpNum1). "</span>"
                                    . "<span>". decbin($fpNum2). "</span>"    
                                    . "<span>". decbin($fpNum3). "</span>"
                                    . "<span>". decbin($fpNum4). "</span>"
                                    . "<span>". decbin($fpNum5). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['max'])) {
                            echo "<p>" . "<span>". max($fpNum1, $fpNum2, $fpNum3, $fpNum4, $fpNum5). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['min'])) {
                            echo "<p>" . "<span>". min($fpNum1, $fpNum2, $fpNum3, $fpNum4, $fpNum5). "</span>"

                            . "</p>";
                        } elseif (isset($_POST['deg2rad'])) {
                            echo "<p>" . "<span>". number_format(deg2rad($fpNum1),2). "</span>"
                                    . "<span>". number_format(deg2rad($fpNum2),2). "</span>"    
                                    . "<span>". number_format(deg2rad($fpNum3),2). "</span>"
                                    . "<span>". number_format(deg2rad($fpNum4),2). "</span>"
                                    . "<span>". number_format(deg2rad($fpNum5),2). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['log'])) {
                            echo "<p>" . "<span>". number_format(log($fpNum1),2). "</span>"
                                    . "<span>". number_format(log($fpNum2),2). "</span>"    
                                    . "<span>". number_format(log($fpNum3),2). "</span>"
                                    . "<span>". number_format(log($fpNum4),2). "</span>"
                                    . "<span>". number_format(log($fpNum5),2). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['log10'])) {
                            echo "<p>" . "<span>". number_format(log10($fpNum1)). "</span>"
                                    . "<span>". number_format(log10($fpNum2)). "</span>"    
                                    . "<span>". number_format(log10($fpNum3)). "</span>"
                                    . "<span>". number_format(log10($fpNum4)). "</span>"
                                    . "<span>". number_format(log10($fpNum5)). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['exp'])) {
                            echo "<p>" . "<span>". number_format(exp($fpNum1),2). "</span>"
                                    . "<span>". number_format(exp($fpNum2),2). "</span>"    
                                    . "<span>". number_format(exp($fpNum3),2). "</span>"
                                    . "<span>". number_format(exp($fpNum4),2). "</span>"
                                    . "<span>". number_format(exp($fpNum5),2). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['sin'])) {
                            echo "<p>" . "<span>". number_format(sin($fpNum1),2). "</span>"
                                    . "<span>". number_format(sin($fpNum2),2). "</span>"    
                                    . "<span>". number_format(sin($fpNum3),2). "</span>"
                                    . "<span>". number_format(sin($fpNum4),2). "</span>"
                                    . "<span>". number_format(sin($fpNum5),2). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['cos'])) {
                            echo "<p>" . "<span>". number_format(cos($fpNum1),2). "</span>"
                                    . "<span>". number_format(cos($fpNum2),2). "</span>"    
                                    . "<span>". number_format(cos($fpNum3),2). "</span>"
                                    . "<span>". number_format(cos($fpNum4),2). "</span>"
                                    . "<span>". number_format(cos($fpNum5),2). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['tan'])) {
                            echo "<p>" . "<span>". number_format(tan($fpNum1),2). "</span>"
                                    . "<span>". number_format(tan($fpNum2),2). "</span>"    
                                    . "<span>". number_format(tan($fpNum3),2). "</span>"
                                    . "<span>". number_format(tan($fpNum4),2). "</span>"
                                    . "<span>". number_format(tan($fpNum5),2). "</span>"
                            . "</p>";
                        }
                    }
                    ?> 
            
                </div>
                <div>
                    <h3 class="right">Results :</h3>

                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        
                        $num1 = (int)$_POST['num1'];
                        $num2 = (int)$_POST['num2'];
                        $num3 = (int)$_POST['num3'];
                        $num4 = (int)$_POST['num4'];
                        $num5 = (int)$_POST['num5'];
                        
                        if (isset($_POST['abs'])) {
                            echo "<p>" . "<span>". abs($num1). "</span>"
                                    . "<span>". abs($num2). "</span>"    
                                    . "<span>". abs($num3). "</span>"
                                    . "<span>". abs($num4). "</span>"
                                    . "<span>". abs($num5). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['ceil'])) {
                            echo "<p>" . "<span>". ceil($num1). "</span>"
                                    . "<span>". ceil($num2). "</span>"    
                                    . "<span>". ceil($num3). "</span>"
                                    . "<span>". ceil($num4). "</span>"
                                    . "<span>". ceil($num5). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['floor'])) {
                            echo "<p>" . "<span>". floor($num1). "</span>"
                                    . "<span>". floor($num2). "</span>"    
                                    . "<span>". floor($num3). "</span>"
                                    . "<span>". floor($num4). "</span>"
                                    . "<span>". floor($num5). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['round'])) {
                            echo "<p>" . "<span>". round($num1). "</span>"
                                    . "<span>". round($num2). "</span>"    
                                    . "<span>". round($num3). "</span>"
                                    . "<span>". round($num4). "</span>"
                                    . "<span>". round($num5). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['sqrt'])) {
                            echo "<p>" . "<span>". number_format(sqrt($num1),2). "</span>"
                                    . "<span>". number_format(sqrt($num2),2). "</span>"    
                                    . "<span>". number_format(sqrt($num3),2). "</span>"
                                    . "<span>". number_format(sqrt($num4),2). "</span>"
                                    . "<span>". number_format(sqrt($num5),2). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['decbin'])) {
                            echo "<p>" . "<span>". decbin($num1). "</span>"
                                    . "<span>". decbin($num2). "</span>"    
                                    . "<span>". decbin($num3). "</span>"
                                    . "<span>". decbin($num4). "</span>"
                                    . "<span>". decbin($num5). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['max'])) {
                            echo "<p>" . "<span>". max($num1, $num2, $num3, $num4, $num5). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['min'])) {
                            echo "<p>" . "<span>". min($num1, $num2, $num3, $num4, $num5). "</span>"

                            . "</p>";
                        } elseif (isset($_POST['deg2rad'])) {
                            echo "<p>" . "<span>". number_format(deg2rad($num1),2). "</span>"
                                    . "<span>". number_format(deg2rad($num2),2). "</span>"    
                                    . "<span>". number_format(deg2rad($num3),2). "</span>"
                                    . "<span>". number_format(deg2rad($num4),2). "</span>"
                                    . "<span>". number_format(deg2rad($num5),2). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['log'])) {
                            echo "<p>" . "<span>". number_format(log($num1),2). "</span>"
                                    . "<span>". number_format(log($num2),2). "</span>"    
                                    . "<span>". number_format(log($num3),2). "</span>"
                                    . "<span>". number_format(log($num4),2). "</span>"
                                    . "<span>". number_format(log($num5),2). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['log10'])) {
                            echo "<p>" . "<span>". number_format(log10($num1)). "</span>"
                                    . "<span>". number_format(log10($num2)). "</span>"    
                                    . "<span>". number_format(log10($num3)). "</span>"
                                    . "<span>". number_format(log10($num4)). "</span>"
                                    . "<span>". number_format(log10($num5)). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['exp'])) {
                            echo "<p>" . "<span>". number_format(exp($num1),2). "</span>"
                                    . "<span>". number_format(exp($num2),2). "</span>"    
                                    . "<span>". number_format(exp($num3),2). "</span>"
                                    . "<span>". number_format(exp($num4),2). "</span>"
                                    . "<span>". number_format(exp($num5),2). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['sin'])) {
                            echo "<p>" . "<span>". number_format(sin($num1),2). "</span>"
                                    . "<span>". number_format(sin($num2),2). "</span>"    
                                    . "<span>". number_format(sin($num3),2). "</span>"
                                    . "<span>". number_format(sin($num4),2). "</span>"
                                    . "<span>". number_format(sin($num5),2). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['cos'])) {
                            echo "<p>" . "<span>". number_format(cos($num1),2). "</span>"
                                    . "<span>". number_format(cos($num2),2). "</span>"    
                                    . "<span>". number_format(cos($num3),2). "</span>"
                                    . "<span>". number_format(cos($num4),2). "</span>"
                                    . "<span>". number_format(cos($num5),2). "</span>"
                            . "</p>";
                        } elseif (isset($_POST['tan'])) {
                            echo "<p>" . "<span>". number_format(tan($num1),2). "</span>"
                                    . "<span>". number_format(tan($num2),2). "</span>"    
                                    . "<span>". number_format(tan($num3),2). "</span>"
                                    . "<span>". number_format(tan($num4),2). "</span>"
                                    . "<span>". number_format(tan($num5),2). "</span>"
                            . "</p>";
                        }
                    }

                    ?> 
                </div> 
            </div>

            <hr>

            <div class="buttons">
                <div class="button">
                    <input type="submit" name="abs" value="abs()">
                    <input type="submit" name="ceil" value="ceil()">
                    <input type="submit" name="floor" value="floor()">
                    <input type="submit" name="round" value="round()">
                    <input type="submit" name="sqrt" value="sqrt()">
                </div>
                <div class="button">
                    <input type="submit" name="decbin" value="decbin()">
                    <input type="submit" name="max" value="max()">
                    <input type="submit" name="min" value="min()">
                    <input type="submit" name="deg2rad" value="deg2rad()">
                    <input type="submit" name="log" value="log()">
                </div>
                <div class="button">
                    <input type="submit" name="log10" value="log10()">
                    <input type="submit" name="exp" value="exp()">
                    <input type="submit" name="sin" value="sin()">
                    <input type="submit" name="cos" value="cos()">
                    <input type="submit" name="tan" value="tan()">
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>
<?php
    include ('../includes/footer.html');

?>