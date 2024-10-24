<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 8</title>
    <link rel="stylesheet" href="../css/page8.css">
</head>
<body>
    <h2>User-defined Functions</h2>
    <p>
        <strong>Task</strong>
                :Look for a problem and solve it. The solution must include the use of at least 
                ten user-defined functions. Display the selected problem on the page and the 
                functions created with an explanation of how they are used.
    </p>
    
    <br><strong>Temperature Converter</strong><br>
    
    <form action="page8.php" method="post">
        <input type="number" name="temperature" placeholder="Enter temperature">
        <input type="submit" name="celsius" value="Convert Celsius">
        <input type="submit" name="fahrenheit" value="Convert Fahrenheit">
        <input type="submit" name="kelvin" value="Convert Kelvin">
    </form>

    
        
</body>
</html>

<?php
    displayConversionOptions();
    
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
        echo "Celcius to Fahrenheit: " . celsiusToFarenheit($celsius) . "<br>";
        echo "Celcius to Kelvin: " . celsiusToKelvin($celsius) . "<br>";
    }

    // Takes a Fahrenheit value to prints conversions to both Celcius and Kelvin
    function convertfromFahrenheit($fahrenheit) {
        echo "Fahrenheit to Celsius: " . fahrenheitToCelcius($fahrenheit) . "<br>";
        echo "Fahrenheit to Kelvin: " . fahrenheitToKelvin($fahrenheit) . "<br>";
    }

    // Takes a Kelvin value and prints conversions to both Celsius and Fahrenheit
    function convertFromKelvin($kelvin){
        echo "Kelvin to Calsius: " . kelvinToCelcius($kelvin) . "<br>";
        echo "Kelvin to Fahrenheit: " . kelvinToFahrenheit($kelvin) . "<br>";
    }

    // Show the user a menu on how to choose which conversions to perform
    function displayConversionOptions(){
        echo "<div class = 'sample'><br>Choose a temperature conversion option: <br>";
        echo "1. Convert Celsius to Fahrenheit and Kelvin <br>";
        echo "2. Convert Fahrenheit to Celsius and Kelvin <br>";
        echo "3. Convert Kelvin to Celsius and Fahrenheit <br><br>";
        echo "</div>";
    }

    // include ('../includes/footer.html');

?>
