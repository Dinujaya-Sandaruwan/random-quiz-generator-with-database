<?php

include "../dbcon.php";

$name = $_GET['name'];
$subject = $_GET['subject'];
$quiz = $_GET['quiz'];
$f_ans = $_GET['f_ans'];
$s_ans = $_GET['s_ans'];
$t_ans = $_GET['t_ans'];
$fo_ans = $_GET['fo_ans'];
$correct_ans = $_GET['correct_ans'];
$s_note = $_GET['s_note'];


// $sql = "INSERT INTO 'quiz_tbl' (u_name, q_subject, quiz, f_ans, s_ans, t_ans, fo_ans, correct_ans, s_note)
// VALUES ($name, $subject, $quiz, $f_ans, $s_ans, $t_ans, $fo_ans, $correct_ans, $s_note)";

$sql = "INSERT INTO `agri_quiz`( `u_name`, `quiz`, `f_ans`, `s_ans`, `t_ans`, `fo_ans`, `correct_ans`, `s_notes`) VALUES ('$name','$quiz','$f_ans','$s_ans ','$t_ans','$fo_ans','$correct_ans','$s_note')";

if ($conn->query($sql) === TRUE) {
    // echo"Recoard Updatd Sucessfully";

} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location: ../add-done/agri-done.php");


// echo"$name";
// echo"<br>";
// echo"$subject";
// echo"<br>";
// echo"$quiz";
// echo"<br>";
// echo"$f_ans";
// echo"<br>";
// echo"$s_ans";
// echo"<br>";
// echo"$t_ans";
// echo"<br>";
// echo"$fo_ans";
// echo"<br>";
// echo"$correct_ans";
// echo"<br>";
// echo"$s_note";
// echo"<br>";
?>
