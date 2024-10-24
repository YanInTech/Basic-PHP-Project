<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 6</title>
</head>
<body>
    <h2>Selection Statements</h2>
    <p>
        <strong>Task</strong>
                :Initialize five string variables and five integer variables. Be able to display the 
                following: 
                <ul>
                    <pre></pre>
                    <li>Five strings in ascending order</li>
                    <li>Five strings in descending order</li> 
                    <li>Sum, product, and average of the five numbers if the first number is divisible by the fifth number; otherwise, display the numbers in ascending order. </li>   
                </ul>
                Note: Do not use predefined sort functions to arrange the strings and numbers. 
    </p>
</body>
</html>

<?php
    $int1 = 1;
    $int2 = 9;
    $int3 = 2;
    $int4 = 8;
    $int5 = 3;
    
    $str1 = "aaa";
    $str2 = "sss";
    $str3 = "ddd";
    $str4 = "fff";
    $str5 = "ggg";

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

        return "Ascending order <br>
                $str1 <br>
                $str2 <br> 
                $str3 <br> 
                $str4 <br>
                $str5 <br>";
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

        return "Descending order <br>
                $str1 <br>
                $str2 <br> 
                $str3 <br> 
                $str4 <br>
                $str5 <br>";
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

        return "Ascending order <br>
                $int1 <br>
                $int2 <br> 
                $int3 <br> 
                $int4 <br>
                $int5 <br>";
    }

    function isDivisible($int1, $int2, $int3, $int4, $int5){
        if ($int1 % $int5 == 0){
            $sum = $int1 + $int2 + $int3 + $int4 + $int5;
            $prod = $int1 * $int2 * $int3 * $int4 * $int5;
            $ave = $sum / 5;

            return "Sum: $sum <br> 
                    Product: $prod <br> 
                    Average: $ave <br>";
        }
        else{
            return ascendingNum($int1, $int2, $int3, $int4, $int5);
        }
    }

    echo ascendingStr($str1, $str2, $str3, $str4, $str5);
    echo descendingStr($str1, $str2, $str3, $str4, $str5);
    echo isDivisible($int1, $int2, $int3, $int4, $int5);

    include ('../includes/footer.html');
?>