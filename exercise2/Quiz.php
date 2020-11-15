<?php
    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $q4 = $_POST["q4"];
    $q5 = $_POST["q5"];

    echo "Question 1: What is the capital of Kansas<br>";
    echo "Your Answer: $q1<br>";
    echo "Right Answer: Topeka<br><br>";
    echo "Question 2: What is the capital of New York<br>";
    echo "Your Answer: $q2<br>";
    echo "Right Answer: Albany<br><br>";
    echo "Question 3: What is the capital of Texas<br>";
    echo "Your Answer: $q3<br>";
    echo "Right Answer: Austin<br><br>";
    echo "Question 4: What is the capital of Colorado<br>";
    echo "Your Answer: $q4<br>";
    echo "Right Answer: Denver<br><br>";
    echo "Question 5: What is the capital of California<br>";
    echo "Your Answer: $q5<br>";
    echo "Right Answer: Sacremento<br><br>";

	$count = 0;
    if($q1 == "Topeka")
    {
        $count++;
    }
    if($q2 == "Albany")
    {
        $count++;
    }
    if($q3 == "Austin")
    {
        $count++;
    }
    if($q4 == "Denver")
    {
        $count++;
    }
    if($q5 == "Sacremento")
    {
        $count++;
    }
    if($count == 0)
    {
        echo "You got a 0%";
    }
    if($count == 1)
    {
        echo "You got a 20%";
    }
    if($count == 2)
    {
        echo "You got a 40%";
    }
    if($count == 3)
    {
        echo "You got a 60%";
    }
    if($count == 4)
    {
        echo "You got a 80%";
    }
    if($count == 5)
    {
        echo "You got a 100%";
    }
?>