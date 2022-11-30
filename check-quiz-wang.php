<?php
include('connectdb.php');
session_start();


    if(ISSET($_POST['submit'])){
        foreach($_POST['questionname'] as $key => $value){
            // if($quizname != "")
                $quizname = $_POST['quizname'];
            // if($questionname != "")
                $questionname = $value;
            // if($choice1 != "")
                $choice1 = $_POST['c-1'][$key];
            // if($choice2 != "")
                $choice2 = $_POST['c-2'][$key];
            // if($choice3 != "")
                $choice3 = $_POST['c-3'][$key];
            // if($choice4 != "")
                $choice4 = $_POST['c-4'][$key];
            // if($answer != "")
                $answer = $_POST['answer'][$key];
            // echo $questionname;

            if($quizname != "" && $questionname != "" && $choice1 != "" && $choice2 != "" && $choice3 != "" && $choice4 != "" && $answer != "")
                $sql = "INSERT INTO quiz (Quizname,questionname,choice1,choice2,choice3,choice4,answer) VALUES('$quizname','$questionname','$choice1','$choice2','$choice3','$choice4','$answer')";
			if ($conn->query($sql) === TRUE) {
			echo "New record created successfully"."<br>";
            header('location:../preview/test-quiz.php');
			} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			}
        }
    }
    $conn->close();
?>