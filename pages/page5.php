<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/page5.css">
    <link rel="stylesheet" href="../global.css">
    <script src="https://kit.fontawesome.com/51db7b286b.js" crossorigin="anonymous"></script>
    <title>Using Constants</title>
</head>
<body >
    <div class="box">
        <div class="title">
            <p>
                <div>
                    <span class="h3"><a href="page4.php"><i class="fa-solid fa-arrow-left"></i></a></span>
                    <span class="h2">Using Constants</span> 
                    <span class="h3"><a href="page6.php"><i class="fa-solid fa-arrow-right"></i></a> </span>
                    <span class="back"><a href="../index.php"><i class="fa-solid fa-house"></i></a></span>    
                </div>
            </p>
            <p>Display the constant values and how to use them</p>
        </div>

        <form action="page5.php" method="POST">
            <div class="divide">
                <div class="content">
                
                    <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
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

                            if (isset($_POST['pi'])){
                                echo "<h3>PI    ". PI ."</h3>";
                                $radius = 10;
                                $circumference = 2 * PI * $radius;
                                echo "<p>Circumference of a circle with radius {$radius}m: {$circumference} meters. </p>";
                            }
                            elseif (isset($_POST['gravity'])){
                                echo "<h3>GRAVITY    ". GRAVITY ."</h3>";
                                $mass = 70;
                                $weight = $mass * GRAVITY;
                                echo "<p>Weight of a {$mass}kg person on Earth: {$weight} Newtons </p>";
                            }
                            elseif (isset($_POST['sol'])){
                                echo "<h3>SPEED OF LIGHT    ". SPEED_OF_LIGHT ."</h3>";
                                $distance = 1000;
                                $time = $distance / SPEED_OF_LIGHT;
                                echo "<p>Time taken for light to travel 1km: {$time} seconds </p>";
                            }
                            elseif (isset($_POST['avodargo'])){
                                echo "<h3>AVOGARDO    ". AVOGARDO_NUMBER ."</h3>";
                                $moles = 2;
                                $molecules = $moles * AVOGARDO_NUMBER;
                                echo "<p>Number of molecules in 2 moles: {$molecules} molecules </p>";

                            }
                            elseif (isset($_POST['planck'])){
                                echo "<h3>PLANCK CONSTANT    ". PLANCK_CONSTANT ."</h3>";
                                $frequency = 5e14;
                                $energy = PLANCK_CONSTANT * $frequency;
                                echo "<p>Energy of a photon with frequency 5e14 Hz: {$energy} Joules </p>";

                            }
                            elseif (isset($_POST['earthradius'])){
                                echo "<h3>EARTH RADIUS    ". EARTH_RADIUS ."</h3>";
                                $earthCircumference = 2 * PI * EARTH_RADIUS;
                                echo "<p>Circumference of the Earth: {$earthCircumference} meters </p>";
                            }
                            elseif (isset($_POST['boltzmann'])){
                                echo "<h3>BOLLTZMANN CONSANT    ". BOLTZMANN_CONSTANT ."</h3>";
                                $temperature = 300;
                                $thermalEnergy = BOLTZMANN_CONSTANT * $temperature;
                                echo "<p>Thermal energy at {$temperature}K: {$thermalEnergy} Joules </p>";

                            }
                            elseif (isset($_POST['elementary'])){
                                echo "<h3>ELEMENTARY CHARGE    ". ELEMENTARY_CHARGE ."</h3>";
                                $chargePerMole = ELEMENTARY_CHARGE * AVOGARDO_NUMBER;
                                echo "<p>Total charge of 1 mole of electrons: {$chargePerMole} Coloumbs </p>";

                            }
                            elseif (isset($_POST['gasconstant'])){
                                echo "<h3>GAS CONSTANT    ". GAS_CONSTANT ."</h3>";
                                $pressure = 101325;
                                $volume = 0.1;
                                $molePerGas = 1;
                                $temperatureOfGas = 273;
                                $gasPressure = ($molePerGas * GAS_CONSTANT * $temperatureOfGas) / $volume;
                                echo "<p>Pressure of 1 mole of gas in a 0.1 m<sup>3</sup> container at 273K: {$gasPressure} Pascals </p>";

                            }
                            elseif (isset($_POST['stb'])){
                                echo "<h3>STEFFAN BOLTZMANN CONSTANT    ". STEFAN_BOLTZMANN_CONSTANT ."</h3>";
                                $temperatureOfStar = 5778;
                                $powerRadiated = STEFAN_BOLTZMANN_CONSTANT * pow($temperatureOfStar, 4);
                                echo "<p>Power radiated per square meter by black body at 5778K: {$powerRadiated} W/m<sup>2</sup> </p>";
                            }
                        }
                    ?>
                </div>
                <div class="buttons">
                    <div class="button">
                        <input type="submit" name="pi" value="PI">
                        <input type="submit" name="gravity" value="GRAVITY">
                        <input type="submit" name="sol" value="SOL">
                    </div>
                    <div class="button">
                        <input type="submit" name="avodargo" value="AVOGARDO">
                        <input type="submit" name="planck" value="PLANCK">
                        <input type="submit" name="earthradius" value="EARTH RADIUS">
                    </div>
                    <div class="button">
                        <input type="submit" name="boltzmann" value="BOTLZMANN">
                        <input type="submit" name= "elementary" value="ELEMENTARY">
                        <input type="submit" name="gasconstant" value="GAS CONSTANT">
                    </div>
                    <div class="button">
                        <input type="submit" name="stb" value="STB">

                    </div>
                </div>    
            </div>
            
        </form>    
    </div>
    
    
</body>
</html>
<?php
    include ('../includes/footer.html');

?>

