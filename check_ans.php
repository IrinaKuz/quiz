<?php
session_start();

$link = mysqli_connect('localhost', 'irinakuznetsov');
if (!$link)
{
	$output = 'Unable to connect to the database server.';
	include 'output.html.php';
	exit();
}

if (!mysqli_set_charset($link, 'utf8'))
{
	$output = 'Unable to set database connection encoding.';
	include 'output.html.php';
	exit();
}
if (!mysqli_select_db($link, 'my_irinakuznetsov'))
{
	$output = 'Unable to locate the database';
	include 'output.html.php';
	exit();
}
$ans = array();
if (array_key_exists('quiz1_ans', $_SESSION)) {
	$incorrect_ans1 = $_SESSION['quiz1_ans'];
	$correct_ans1 = $_SESSION['quiz1_correct'];

	$sql1 = "select * from legal_terms_clean where id = $correct_ans1";
	$result= mysqli_query($link, $sql1) or die($link->error);
	$row = $result->fetch_assoc();
	array_push($ans,array('id' => $row['id'], 'term' => $row['term'], 'def' => $row['definition']));
}
if (array_key_exists('quiz2_ans', $_SESSION)) {
	$incorrect_ans2 = $_SESSION['quiz2_ans'];
	$correct_ans2 = $_SESSION['quiz2_correct'];

	$sql2 = "select * from legal_terms_clean where id = $correct_ans2";
	$result= mysqli_query($link, $sql2) or die($link->error);
	$row = $result->fetch_assoc();
	array_push($ans,array('id' => $row['id'], 'term' => $row['term'], 'def' => $row['definition']));
}
if (array_key_exists('quiz3_ans', $_SESSION)) {
	$incorrect_ans3 = $_SESSION['quiz3_ans'];
	$correct_ans3 = $_SESSION['quiz3_correct'];

	$sql3 = "select * from legal_terms_clean where id = $correct_ans3";
	$result= mysqli_query($link, $sql3) or die($link->error);
	$row = $result->fetch_assoc();
	array_push($ans,array('id' => $row['id'], 'term' => $row['term'], 'def' => $row['definition']));
}
if (array_key_exists('quiz4_ans', $_SESSION)) {
	$incorrect_ans4 = $_SESSION['quiz4_ans'];
	$correct_ans4 = $_SESSION['quiz4_correct'];

	$sql4 = "select * from legal_terms_clean where id = $correct_ans4";
	$result= mysqli_query($link, $sql4) or die($link->error);
	$row = $result->fetch_assoc();
	array_push($ans,array('id' => $row['id'], 'term' => $row['term'], 'def' => $row['definition']));
}
if (array_key_exists('quiz5_ans', $_SESSION)) {
	$incorrect_ans5 = $_SESSION['quiz5_ans'];
	$correct_ans5 = $_SESSION['quiz5_correct'];

	$sql5 = "select * from legal_terms_clean where id = $correct_ans5";
	$result= mysqli_query($link, $sql5) or die($link->error);
	$row = $result->fetch_assoc();
	array_push($ans,array('id' => $row['id'], 'term' => $row['term'], 'def' => $row['definition']));
}
if (array_key_exists('quiz6_ans', $_SESSION)) {
	$incorrect_ans6 = $_SESSION['quiz6_ans'];
	$correct_ans6 = $_SESSION['quiz6_correct'];

	$sql6 = "select * from legal_terms_clean where id = $correct_ans6";
	$result= mysqli_query($link, $sql6) or die($link->error);
	$row = $result->fetch_assoc();
	array_push($ans,array('id' => $row['id'], 'term' => $row['term'], 'def' => $row['definition']));
}
if (array_key_exists('quiz7_ans', $_SESSION)) {
	$incorrect_ans7 = $_SESSION['quiz7_ans'];
	$correct_ans7 = $_SESSION['quiz7_correct'];

	$sql7 = "select * from legal_terms_clean where id = $correct_ans7";
	$result= mysqli_query($link, $sql7) or die($link->error);
	$row = $result->fetch_assoc();
	array_push($ans,array('id' => $row['id'], 'term' => $row['term'], 'def' => $row['definition']));
}
if (array_key_exists('quiz8_ans', $_SESSION)) {
	$incorrect_ans8 = $_SESSION['quiz8_ans'];
	$correct_ans8 = $_SESSION['quiz8_correct'];

	$sql8 = "select * from legal_terms_clean where id = $correct_ans8";
	$result= mysqli_query($link, $sql8) or die($link->error);
	$row = $result->fetch_assoc();
	array_push($ans,array('id' => $row['id'], 'term' => $row['term'], 'def' => $row['definition']));
}
if (array_key_exists('quiz9_ans', $_SESSION)) {
	$incorrect_ans9 = $_SESSION['quiz9_ans'];
	$correct_ans9 = $_SESSION['quiz9_correct'];

	$sql9 = "select * from legal_terms_clean where id = $correct_ans9";
	$result= mysqli_query($link, $sql9) or die($link->error);
	$row = $result->fetch_assoc();
	array_push($ans,array('id' => $row['id'], 'term' => $row['term'], 'def' => $row['definition']));
}
if (array_key_exists('quiz10_ans', $_SESSION)) {
	$incorrect_ans10 = $_SESSION['quiz10_ans'];
	$correct_ans10 = $_SESSION['quiz10_correct'];

	$sql10 = "select * from legal_terms_clean where id = $correct_ans10";
	$result= mysqli_query($link, $sql10) or die($link->error);
	$row = $result->fetch_assoc();
	array_push($ans,array('id' => $row['id'], 'term' => $row['term'], 'def' => $row['definition']));
}

// remove all session variables
session_unset();

// destroy the session
session_destroy();

include 'incorrect_quest.html.php';
?>