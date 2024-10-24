<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 5</title>
</head>
<body>
    <h2>Using Constants</h2>
    <p>
        <strong>Task</strong>
                :Research at least 10 constant values and assign them to 10 named 
                constants. Display these values with examples of how to use them.
    </p>
</body>
</html>

<?php
    define("PI", 3.14159);
    define("GRAVITY", 9.8);
    define("SPEED_OF_LIGHT", 299792458);
    define("AVOGARDO_NUMBER", 6.022e23);
    define("PLANCK_CONSTANT", 6.62607015e-34);
    define("EARTH_RADIUS", 6371000);
    define("BOLTZMANN_CONSTANT", 1.602176634e-19);
    define("ELEMENTARY_CHARGE", 1.60217663);
    define("GAS_CONSTANT", 8.314);
    define("STEFAN_BOLTZMANN_CONSTANT", 5.670374419e-8);

    echo "<br><h3>Examples</h3> <br>";

    $radius = 10;
    $circumference = 2 * PI * $radius;
    echo "Circumference of a circle with radius {$radius}m: {$circumference} meters. <br>";

    $mass = 70;
    $weight = $mass * GRAVITY;
    echo "Weight of a {$mass}kg person on Earth: {$weight} Newtons <br>";

    $distance = 1000;
    $time = $distance / SPEED_OF_LIGHT;
    echo "Time taken for light to travel 1km: {$time} seconds <br>";

    $moles = 2;
    $molecules = $moles * AVOGARDO_NUMBER;
    echo "Number of molecules in 2 moles: {$molecules} molecules <br>";

    $frequency = 5e14;
    $energy = PLANCK_CONSTANT * $frequency;
    echo "Energy of a photon with frequency 5e14 Hz: {$energy} Joules <br>";

    $earthCircumference = 2 * PI * EARTH_RADIUS;
    echo "Circumference of the Earth: {$earthCircumference} meters <br>";

    $temperature = 300;
    $thermalEnergy = BOLTZMANN_CONSTANT * $temperature;
    echo "Thermal energy at {$temperature}K: {$thermalEnergy} Joules <br>";

    $chargePerMole = ELEMENTARY_CHARGE * AVOGARDO_NUMBER;
    echo "Total charge of 1 mole of electrons: {$chargePerMole} Coulombs <br>";

    $pressure = 101325;
    $volume = 0.1;
    $molePerGas = 1;
    $temperatureOfGas = 273;
    $gasPressure = ($molePerGas * GAS_CONSTANT * $temperatureOfGas) / $volume;
    echo "Pressure of 1 mole of gas in a 0.1 m<sup>3</sup> container at 273K: {$gasPressure} Pascals <br>";

    $temperatureOfStar = 5778;
    $powerRadiated = STEFAN_BOLTZMANN_CONSTANT * pow($temperatureOfStar, 4);
    echo "Power radiated per square meter by black body at 5778K: {$powerRadiated} W/m<sup>2</sup> <br>";

    include ("../includes/footer.html");
?>