<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$answer1 = $_POST["1"];
$answer2 = $_POST["2"];
$answer3 = $_POST["3"];
$answer4 = $_POST["4"];
$answer5 = $_POST["5"];
$percent = 0;
$correct = 0;
if ($answer1 == "Paris")  {$percent += 20; $correct++;};
if ($answer2 == "Berlin") {$percent += 20; $correct++;};
if ($answer3 == "Rome")   {$percent += 20; $correct++;};
if ($answer4 == "London") {$percent += 20; $correct++;};
if ($answer5 == "Madrid") {$percent += 20; $correct++;};
?>

<!DOCTYPE html>

<html lang="en">

<body>
    QUIZ RESULTS<br><br>
    Question 1: What is the capital of France?<br>
    <div id="question1">
        You chose: <?php echo $answer1; ?><br>
        Correct answer: Paris
    </div><br>
    Question 2: What is the capital of Germany?<br>
    <div id="question2">
        You chose: <?php echo $answer2; ?><br>
        Correct answer: Berlin
    </div><br>
    Question 3: What is the capital of Italy?<br>
    <div id="question3">
        You chose: <?php echo $answer3; ?><br>
        Correct answer: Rome
    </div><br>
    Question 4: What is the capital of England?<br>
    <div id="question4">
        You chose: <?php echo $answer4; ?><br>
        Correct answer: London
    </div><br>
    Question 5: What is the capital of Spain?<br>
    <div id="question5">
        You chose: <?php echo $answer5; ?><br>
        Correct answer: Madrid
    </div><br>
    <br>
    TOTAL CORRECT: <?php echo $correct; ?> out of 5<br>
    PERCENT GRADE: <?php echo $percent; ?>%
</body>

</html>