<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/page8.css">
    <link rel="stylesheet" href="../global.css">
    <script src="https://kit.fontawesome.com/51db7b286b.js" crossorigin="anonymous"></script>
    <title>User-defined Functions</title>
</head>
<body >
    <div class="box">
        <div class="title">
            <p>
                <div>
                    <span class="h3"><a href="page7.php"><i class="fa-solid fa-arrow-left"></i></a></span>
                    <span class="h2">User-defined Functions</span> 
                    <span class="h3"><a href="page9.php"><i class="fa-solid fa-arrow-right"></i></a> </span>
                    <span class="back"><a href="../index.php"><i class="fa-solid fa-house"></i></a></span>    
                </div>
            </p>
            <p>Look for a problem and solve it</p>
            <p>Include at least 10 user defined function </p>
            <p>Display the functions created and explanation how they are used</p>
        </div>
        
        <form action="page8.php" method="POST">
            <div class="divide">
                <div class="input">
                    <h3>Temperature Converter</h3>
                    <input type="number" name="temperature" placeholder="Enter temperature" required>
                    <?php
                        displayConversionOptions();
                    ?>    
                </div>
            <?php
            if (isset($_POST['celsius'])){
                convertFromCelcsius($_POST['temperature']);
            }

            if (isset($_POST['fahrenheit'])){
                convertfromFahrenheit($_POST['temperature']);
            }

            if (isset($_POST['kelvin'])){
                convertFromKelvin($_POST['temperature']);
            }

            // User defined functions
            // Convert temperature from Celcius to Fahrenheit
            function celsiusToFarenheit($celsius){
                return ($celsius * 9/5) + 32;
            }

            // Convert temperature from Fahrenheit to Celcius
            function fahrenheitToCelcius($fahrenheit){
                return ($fahrenheit - 32) * 5/9;
            }

            // Convert temperature from Celsius ato Kelvin
            function celsiusToKelvin($celsius){
                return $celsius + 273.15;
            }

            // Convert temperature from Kelvin to Celcius
            function kelvinToCelcius($kelvin){
                return $kelvin - 273.15;
            }

            // Converts temperature from Fahrenheit to Kelvin
            function fahrenheitToKelvin($fahrenheit){
                $celsius = fahrenheitToCelcius($fahrenheit);
                return celsiusToKelvin($celsius);
            }

            // Converts temperature from Kelvin to Fahrenheit
            function kelvinToFahrenheit($kelvin){
                $celsius = kelvinToCelcius($kelvin);
                return celsiusToFarenheit($celsius);
            }

            // Takes a Celcius value and prints converions to both Fahrenheit and Kelvin
            function convertFromCelcsius($celsius){
                echo "<div class = 'result'>";
                echo "<h3>Results: </h3>";
                echo "<p><span>Celcius to Fahrenheit</span>: " . celsiusToFarenheit($celsius) . "</p>";
                echo "<p><span>Celcius to Kelvin</span>: " . celsiusToKelvin($celsius) . "</p>";
                echo "</div>";
            }

            // Takes a Fahrenheit value to prints conversions to both Celcius and Kelvin
            function convertfromFahrenheit($fahrenheit) {
                echo "<div class = 'result'>";
                echo "<h3>Results: </h3>";
                echo "<p><span>Fahrenheit to Celsius</span>: " . fahrenheitToCelcius($fahrenheit) . "</p>";
                echo "<p><span>Fahrenheit to Kelvin</span>: " . fahrenheitToKelvin($fahrenheit) . "</p>";
                echo "</div>";
            }

            // Takes a Kelvin value and prints conversions to both Celsius and Fahrenheit
            function convertFromKelvin($kelvin){
                echo "<div class = 'result'>";
                echo "<h3>Results: </h3>";
                echo "<p><span>Kelvin to Calsius</span>: " . kelvinToCelcius($kelvin) . "</p>";
                echo "<p><span>Kelvin to Fahrenheit</span>: " . kelvinToFahrenheit($kelvin) . "</p>";
                echo "</div>";
            }

            // Show the user a menu on how to choose which conversions to perform
            function displayConversionOptions(){
                echo "<div class = 'buttons'><p>Choose a temperature conversion option: </p>
                <input type='submit' name='celsius' value='Convert Celsius'>
                <input type='submit' name='fahrenheit' value='Convert Fahrenheit'>
                <input type='submit' name='kelvin' value='Convert Kelvin'>
                </div>";
            }
            ?>
        </div>
        </form>

        <hr>
        <div class="function">
            <h3>Functions Used:</h3>
            <p><span>function celsiusToFarenheit($celsius)</span>:  Convert temperature from Celcius to Fahrenheit</p>
            <p><span>function fahrenheitToCelcius($fahrenheit)</span>:  Convert temperature from Fahrenheit to Celcius</p>
            <p><span>function celsiusToKelvin($celsius)</span>: Convert temperature from Celsius to Kelvin</p>
            <p><span>function kelvinToCelcius($kelvin)</span>:  Convert temperature from Kelvin to Celcius</p>
            <p><span>function fahrenheitToKelvin($fahrenheit)</span>:   Converts temperature from Fahrenheit to Kelvin<</p>
            <p><span>function kelvinToFahrenheit($kelvin)</span>:   Converts temperature from Kelvin to Fahrenheit</p>
            <p><span>function convertFromCelcsius($celsius)</span>: Prints converions to both Fahrenheit and Kelvin</p>
            <p><span>function convertfromFahrenheit($fahrenheit)</span>:    Prints conversions to both Celcius and Kelvin</p>
            <p><span>function convertFromKelvin($kelvin)</span>:    Prints conversions to both Celsius and Fahrenheit</p>
            <p><span>function displayConversionOptions()</span>:    Show the user which conversions to perform</p>        
        </div>
    </div>
    
    
</body>
</html>

<?php
    include ('../includes/footer.html');
?>