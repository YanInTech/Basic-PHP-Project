<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 9</title>
</head>
<body>
    <h2>Single-dimensional Array</h2>
    <p>
        <strong>Task</strong>
                :Create a parallel array with ten people's information, including their name, 
                age, sex, and nationality. Sort them in ascending order using the name as the key. 
                Display both unsorted and sorted lists. Use a user-defined function in performing 
                the sort and display. 
    </p>
</body>
</html>

<?php
    $names = array("James", "Maria", "Robert", "Linda", "Michael", "Elizabeth", "William", "Olivia", "David", "Emma");
    $ages = array(3, 99, 15, 69, 40, 11, 55, 17, 67, 24);
    $sex = array("M", "F", "M", "F", "M", "F", "M", "F", "M", "F");
    $nationalities = array("Syrian", "Nigerian", "African", "Costa Rican", "Mongolian", "Portuguese", "Albanian", "Kazakhstani", "Ukranian", "Armenian");

    echo "<h3>Unsorted List</h3>";
    for($i = 0; $i < count($names); $i++){
        echo "Name: ". $names[$i] . "<br>";
        echo "Age: ". $ages[$i] . "<br>";
        echo "Sex: ". $sex[$i] . "<br>";
        echo "Nationality: ". $nationalities[$i] . "<br>";
        echo "<br>";
    }

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

        echo "<h3>Sorted Array</h3>";
        for($d = 0; $d < count($names); $d++){
            echo "Name: $names[$d] <br>";
            echo "Age: $ages[$d] <br>";
            echo "Sex: $sex[$d] <br>";
            echo "Nationalities: $nationalities[$d] <br>";
            echo "<br>";
        }
    }



    sortArray($names, $ages, $sex, $nationalities);
?>