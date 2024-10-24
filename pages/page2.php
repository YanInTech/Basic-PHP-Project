<!-- PAGE 2: The Use of Variables -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Use of Variables</title>
</head>
<body>
    <h2>The User of Variables</h2>
    <p>
        <strong>Task</strong>
                :This page will declare 20 variables that will store five whole numbers, five 
                floating point numbers, five strings, and five characters. Assume that each 
                variable represents something. For example, the five strings may represent the 
                description of the five items. The other values could be related to item attributes 
                in this assumption. Display all the values with the corresponding message.
    </p>

    <h3>Declare the variables:</h3>
    <p>whole numbers</p>
    <form action="page2.php" method="post">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <input type="number" name="num3">
        <input type="number" name="num4">
        <input type="number" name="num5">
        <input type="submit" name="display" value="Display">    
    </form>
    <?php
        if (isset($_POST['display'])){
            // echo "Existing";
            echo "These are the whole numbers <br>";
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
            $num4 = $_POST['num4'];
            $num5 = $_POST['num5'];

            echo "Num 1: {$num1} <br>";
            echo "Num 2: {$num2} <br>";
            echo "Num 3: {$num3} <br>";
            echo "Num 4: {$num4} <br>";
            echo "Num 5: {$num5} <br>";
        }
        else
        {
            echo "";
        }
    ?>
    <p> Dummy W3Schools:</p>
    <form action="page2.php" method="post">
        <p>
            <code>
                &lt;form action="page2.php" method=<input type="text" name="var1">&gt;
            </code>
        </p>
        <input type="submit" name="pass" value="submit">    
    </form>
    <!-- <pre>
        &lt;form action="page2.php" method="post"&gt; 
                &lt;input type="number" name="num1"&gt; 
                &lt;input type="number" name="num2"&gt; 
                &lt;input type="number" name="num3"&gt; 
                &lt;input type="number" name="num4"&gt; 
                &lt;input type="number" name="num5"&gt; 
                &lt;input type="submit" name="display" value="Display"&gt;     
            &lt;/form&gt; 
            &lt;php 
                if (isset($_POST['display'])){ 
                    echo "These are the whole numbers"; 
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $num3 = $_POST['num3'];
                    $num4 = $_POST['num4'];
                    $num5 = $_POST['num5'];

                    echo "Num 1: {$num1}";
                    echo "Num 2: {$num2}";
                    echo "Num 3: {$num3}";
                    echo "Num 4: {$num4}";
                    echo "Num 5: {$num5}";
                }
            ?&gt; 
    </pre> -->

    <?php
        if (isset($_POST['pass'])){
            echo "Diplay:  <br>";
            $var1 = $_POST["var1"];
            echo "Method: {$var1}";
        }
    ?>
    </body>
</html>

