<!DOCTYPE html>
<html>
<head>
    <title>Manipulating Numbers</title>
    <!-- <link rel="stylesheet" href="/css/reset.css"> -->

</head>
    <body>
        <div class="background">
            <?php
                // include ('Nav.html');
            ?>
            <div class="main">
                <div class="Head">
                    <h1>Manipulating Numbers</h1>
                    <div class="Instruction">
                        Task : Compute the midterm, tentative final, and final final grades of the students
                        in CTU. Assume that each grading period may have three to five quizzes, one to
                        two projects, and the major exam. The grade for each grading period is
                        computed as follows: <br>
                        grade = average quizzes X 30% + average project X 20% + midterm exam X 50% <br>
                        final-final grade = average of midterm and tentative final grade
                    </div>
                </div>
                <h2>Instructions : When you input multiple values/scores leave a space in between. <br>Example: 1 2 3 ...</h2>

                <form action="sample.php" method="POST">
                    <div>
                        <h2>Midterm</h2>
                        <label for="pass">Midterm Quizzes</label><br>
                        <input type="text" name="mqscores" value=""><br>
                        <label for="project">Midterm Project</label><br>
                        <input type="text" name="mpscores" value=""><br>
                        <label for="project">Midterm Major Exam Score</label><br>
                        <input type="text" name="mescore" value=""><br>
                    </div>
                    <div>
                        <h2>Tentative Final</h2>
                        <label for="pass">Tentative Final Quizzes</label><br>
                        <input type="text" name="tqscores" value=""><br>
                        <label for="project">Tentative Final Project</label><br>
                        <input type="text" name="tpscores" value=""><br>
                        <label for="project">Tentative Final Major Exam Score</label><br>
                        <input type="text" name="tescore" value=""><br><br>
                        <input type="submit" name="pass" value="Calculate Grades"><br>   
                    </div>
                </form>
                <?php
                    function calculate_average($scores){
                        return array_sum($scores)/count($scores);
                    }

                    function calculate_grade($quiz, $project, $exam){
                    
                        $average_qscore = calculate_average($quiz);
                        $average_pscore = calculate_average($project);
                        //grade = average quizzes X 30% + average project X 20% + midterm exam X 50%
                        $grade = ($average_qscore * 0.3) + ($average_pscore * 0.2) + ($exam * 0.5);
                        return $grade;  
                    }
                    $midterm_qscores = explode(" ", $_POST['mqscores']);
                    $midterm_pscores = explode(" ", $_POST['mpscores']);
                    $midterm_escore = $_POST['mescore'];
                    $tentative_qscores = explode("  ", $_POST['tqscores']);
                    $tentative_pscores = explode("  ", $_POST['tpscores']);
                    $tentative_escore = $_POST['tescore'];
                    
                    $midterm_grade = calculate_grade($midterm_qscores,$midterm_pscores,$midterm_escore);
                    $tentative_grade = calculate_grade($tentative_qscores,$tentative_pscores,$tentative_escore);
                    $ff_grade = ($midterm_grade + $tentative_grade) / 2;

                    echo "$midterm_grade <br>";
                    echo "$tentative_grade <br>";
                    echo "$ff_grade";
                ?>
            </div>
        </div>
    </body>
</html>

<?php
    function fibonacci($num1,$num2) {
        $prev=0;
        $curr=$num1;
        $sum = $prev+$curr;
        for ($i=1;$i<=$num2;$i++) {
            echo "$sum  ";
            $sum = $prev+$curr;
            $prev = $curr;
            $curr = $sum;
        }
    }

    echo fibonacci(3, 7);
?>