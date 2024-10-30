<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/page3.css">
    <link rel="stylesheet" href="../global.css">
    <script src="https://kit.fontawesome.com/51db7b286b.js" crossorigin="anonymous"></script>
    <title>Manipulating Numbers</title>
</head>
<body>
    <div class="box">
        <div class="title">
            <p>
                <div>
                    <span class="h3"><a href="page2.php"><i class="fa-solid fa-arrow-left"></i></a></span>
                    <span class="h2">Manipulating Numbers</span> 
                    <span class="h3"><a href="page4.php"><i class="fa-solid fa-arrow-right"></i></a> </span>
                    <span class="back"><a href="../index.php"><i class="fa-solid fa-house"></i></a></span>    
                </div>
            </p>
            <p>The grade for each grading period is computed as follows:</p>
            <p><i>grade = average quizzes X 30% + average project X 20% + midterm exam X 50%</i></p>
            <p><i>final-final grade = average of midterm and tentative final grade.</i></p>
        </div>
        
        <div class="divide">
            <form action="page3.php" method="POST">
                <label class="enter">Enter Quiz Scores:</label>
                <input type="text" name="quiz" placeholder="85 90 70" required><br>

                <label>Enter Project Scores:</label>
                <input type="text" name="project" placeholder="85 90 70" required><br>

                <label>Enter Midterm Scores:</label>
                <input type="text" name="midterm" placeholder="85" required><br>

                <label>Enter Tentative Final Exam Score:</label>
                <input type="text" name="tentative" placeholder="90" required><br>
            
                <input type="submit" name="submit" value="Calculate grades">
            </form>
            
            <?php
            try{
                if (isset($_POST['submit'])){
                    $quizzes = explode(" ", trim($_POST['quiz']));
                    $projects = explode(" ", trim($_POST['project']));
                    $midtermExam = trim($_POST['midterm']);
                    $finalExam = trim($_POST['tentative']);

                    $quizSum = 0;
                    $projectSum = 0;

                    // calculate sum
                    foreach ($quizzes as $quiz){
                        $quizSum += $quiz;
                    }

                    foreach ($projects as $project){
                        $projectSum += $project;
                    }

                    // calculate average
                    $averageQuiz = $quizSum / count($quizzes);
                    $averageProject = $projectSum / count($projects);

                    // calculate midterm grade
                    $midetermGrade = ($averageQuiz * 0.30) + ($averageProject * 0.20) + ($finalExam * 0.50);

                    // calculate tentative final grade
                    $tentativeFinalGrade = ($averageQuiz * 0.30) + ($averageProject * 0.20) + ($finalExam * 0.50);

                    // compute the final-final grade
                    $finalFinalGrade = ($midetermGrade + $tentativeFinalGrade) / 2;
                    echo "<div class = 'result'>";
                    echo "<h3>Results</h3>";
                    echo "<p><span>Average Quizes </span>:  " . number_format($averageQuiz, 2) . "</p>";
                    echo "<p><span>Average Projects </span>:    " . number_format($averageProject, 2) . "</p>";
                    echo "<p><span>Midterm Grade </span>:   " . number_format($midtermExam, 2) . "</p>";
                    echo "<p><span>Tentative Final Grade </span>:   " . number_format($tentativeFinalGrade, 2) . "</p>";
                    echo "<p><span>Final-Final Grade </span>:   " . number_format($finalFinalGrade, 2) . "</p>";
                    echo "</div>";
                }    
            }catch (TypeError $e){
                echo "<h3>Invalid input<h3>";
            }
            
            ?>    
        </div>    
    </div>
    
</body>
</html>

<?php
    include ('../includes/footer.html');

?>

