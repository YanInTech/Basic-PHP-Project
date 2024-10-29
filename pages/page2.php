<!-- PAGE 2: The Use of Variables -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/page2.css">
    <link rel="stylesheet" href="../global.css">
    <script src="https://kit.fontawesome.com/51db7b286b.js" crossorigin="anonymous"></script>
    
    <title>The Use of Variables</title>
</head>
<body class="box">
    <div class="title">
        <p>
            <div>
                <span class="h3"><a href="page1.php"><i class="fa-solid fa-arrow-left"></i></a></span>
                <span class="h2">The Use of Variables</span> 
                <span class="h3"><a href="page3.php"><i class="fa-solid fa-arrow-right"></i></a> </span>
                <span class="back"><a href="../index.php"><i class="fa-solid fa-house"></i></a></span>    
            </div>
        </p>
        <p>Enter Product Details</p>
    </div>
    
    <form action="page2.php" method="POST">
        <div class="productInputs">
            <label>Product Number</label>
            <input type="number" name="num1" placeholder="1" required>
            <input type="number" name="num2" placeholder="2" required>
            <input type="number" name="num3" placeholder="3" required>
            <input type="number" name="num4" placeholder="4" required>
            <input type="number" name="num5" placeholder="5" required>
        </div>
        <div class="productInputs">
            <label>Product Name</label>
            <input type="text" name="str1" placeholder="Tomatoes" required>
            <input type="text" name="str2" placeholder="Bread" required>
            <input type="text" name="str3" placeholder="Cheese" required>
            <input type="text" name="str4" placeholder="Spinach" required>
            <input type="text" name="str5" placeholder="Eggs" required>
        </div>
        <div class="productInputs">
            <label>Price</label>
            <input type="text" name="fpn1" placeholder="1.23" required>
            <input type="text" name="fpn2" placeholder="2.34" required>
            <input type="text" name="fpn3" placeholder="3.45" required>
            <input type="text" name="fpn4" placeholder="4.56" required>
            <input type="text" name="fpn5" placeholder="5.67" required>
        </div>
        <div class="productInputs">
            <label>Available (Y/N)</label>
            <input type="text" name="char1" placeholder="Y" required>
            <input type="text" name="char2" placeholder="N" required>
            <input type="text" name="char3" placeholder="Y" required>
            <input type="text" name="char4" placeholder="Y" required>
            <input type="text" name="char5" placeholder="N" required>
        </div>

        <input type="submit" name="display" value="Display Product Details">
    </form>

    <hr>
</body>
</html>

<?php
    if(isset($_POST['display'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $num4 = $_POST['num4'];
        $num5 = $_POST['num5'];

        $str1 = $_POST['str1'];
        $str2 = $_POST['str2'];
        $str3 = $_POST['str3'];
        $str4 = $_POST['str4'];
        $str5 = $_POST['str5'];

        $fpn1 = (float)$_POST['fpn1'];
        $fpn2 = (float)$_POST['fpn2'];
        $fpn3 = (float)$_POST['fpn3'];
        $fpn4 = (float)$_POST['fpn4'];
        $fpn5 = (float)$_POST['fpn5'];

        $char1 = $_POST['char1'];
        $char2 = $_POST['char2'];
        $char3 = $_POST['char3'];
        $char4 = $_POST['char4'];
        $char5 = $_POST['char5'];

        echo
        "<table class = 'output'>
            <tr>
                <th><p>Product Number</p></th>
                <th><p>Product Name</p></th>
                <th><p>Price</p></th>
                <th><p>Available (Y/N)</p></th>
            </tr>
            <tr>
                <td><p>{$num1}</p></td>
                <td><p>{$str1}</p></td>
                <td><p>{$fpn1}</p></td>
                <td><p>{$char1}</p></td>
            </tr>
            <tr>
                <td><p>{$num2}</p></td>
                <td><p>{$str2}</p></td>
                <td><p>{$fpn2}</p></td>
                <td><p>{$char2}</p></td>
            </tr>
            <tr>
                <td><p>{$num3}</p></td>
                <td><p>{$str3}</p></td>
                <td><p>{$fpn3}</p></td>
                <td><p>{$char3}</p></td>
            </tr>
            <tr>
                <td><p>{$num4}</p></td>
                <td><p>{$str4}</p></td>
                <td><p>{$fpn4}</p></td>
                <td><p>{$char4}</p></td>
            </tr>
            <tr>
                <td><p>{$num5}</p></td>
                <td><p>{$str5}</p></td>
                <td><p>{$fpn5}</p></td>
                <td><p>{$char5}</p></td>
            </tr>
        </table>";
    }

    include ('../includes/footer.html');

?>
