<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/page9.css">
    <link rel="stylesheet" href="../global.css">
    <script src="https://kit.fontawesome.com/51db7b286b.js" crossorigin="anonymous"></script>
    <title>Single-dimensional Array</title>
</head>
<body>
    <div class="box">
        <div class="title">
            <p>
                <div>
                    <span class="h3"><a href="page8.php"><i class="fa-solid fa-arrow-left"></i></a></span>
                    <span class="h2">Single-dimensional Array</span> 
                    <span class="h3"><a href="page10.php"><i class="fa-solid fa-arrow-right"></i></a> </span>
                    <span class="back"><a href="../index.php"><i class="fa-solid fa-house"></i></a></span>    
                </div>
            </p>
            <p>Create a parallel array </p>
            <p>Ten people’s information, including their name, age, sex, nationality   </p>
            <p>Display both unsorted and sorted lists</p>
        </div>
        <?php
        $names = array("James", "Maria", "Robert", "Linda", "Michael", "Elizabeth", "William", "Olivia", "David", "Emma");
        $ages = array(3, 99, 15, 69, 40, 11, 55, 17, 67, 24);
        $sex = array("M", "F", "M", "F", "M", "F", "M", "F", "M", "F");
        $nationalities = array("Syrian", "Nigerian", "African", "Costa Rican", "Mongolian", "Portuguese", "Albanian", "Kazakhstani", "Ukranian", "Armenian");

        echo "<div class = 'divide'>";
        echo "<div>";
        echo "<h3>Unsorted List</h3>";
        for($i = 0; $i < count($names); $i++){
            echo "Name: ". $names[$i] . "<br>";
            echo "Age: ". $ages[$i] . "<br>";
            echo "Sex: ". $sex[$i] . "<br>";
            echo "Nationality: ". $nationalities[$i] . "<br>";
            echo "<br>";
        }
        echo "</div>";

        function sortArray($names, $ages, $sex, $nationalities){
            for ($i = 0; $i < count($names); $i++){
                for ($j = 0; $j < count($names) - 1; $j++){
                    if ($names[$j] > $names[$j+1]) {
                        $temp = $names[$j+1];
                        $names[$j+1] = $names[$j];
                        $names[$j] = $temp;

                        $temp = $ages[$j+1];
                        $ages[$j+1] = $ages[$j];
                        $ages[$j] = $temp;

                        $temp = $sex[$j+1];
                        $sex[$j+1] = $sex[$j];
                        $sex[$j] = $temp;

                        $temp = $nationalities[$j+1];
                        $nationalities[$j+1] = $nationalities[$j];
                        $nationalities[$j] = $temp;
                    }
                }
            }

            echo "<div class='second'>";
            echo "<h3>Sorted Array</h3>";
            for($d = 0; $d < count($names); $d++){
                echo "Name: $names[$d] <br>";
                echo "Age: $ages[$d] <br>";
                echo "Sex: $sex[$d] <br>";
                echo "Nationalities: $nationalities[$d] <br>";
                echo "<br>";
            }
            echo "</div>";
        }

        sortArray($names, $ages, $sex, $nationalities);
        
        echo "</div>";
        
    ?>
    </div>
</body>
</html>
<?php
    include ('../includes/footer.html');
?>

