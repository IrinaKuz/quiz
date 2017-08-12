<?php
session_start();
// # of total of corect answers
$correct_answers = 0;
// # of total questions per page
$answers = 5;

if (isset($_POST['submit']))  {
	if (array_key_exists('quiz1', $_POST)) {
		if ($_POST['quiz1'] == $_POST['correct_ans1_1']) {
			$correct_answers++;
		}
		else {
			// store incorrect answer
			$_SESSION['quiz1_ans'] = $_POST['quiz1'];
			// store correct answer
			$_SESSION['quiz1_correct'] = $_POST['correct_ans1_1'];
		}
	}

	if (array_key_exists('quiz2', $_POST)) {
		if ($_POST['quiz2'] == $_POST['correct_ans1_2']) {
			$correct_answers++;
		}
		else {
			// store incorrect answer
			$_SESSION['quiz2_ans'] = $_POST['quiz2'];
			// store correct answer
			$_SESSION['quiz2_correct'] = $_POST['correct_ans1_2'];
		}
	}

	if (array_key_exists('quiz3', $_POST)) {
		if ($_POST['quiz3'] == $_POST['correct_ans1_3']) {
			$correct_answers++;
		}
		else {
			// store incorrect answer
			$_SESSION['quiz3_ans'] = $_POST['quiz3'];
			// store correct answer
			$_SESSION['quiz3_correct'] = $_POST['correct_ans1_3'];
		}
	}

	if (array_key_exists('quiz4', $_POST)) {
		if ($_POST['quiz4'] == $_POST['correct_ans1_4']) {
			$correct_answers++;
		}
		else {
			// store incorrect answer
			$_SESSION['quiz4_ans'] = $_POST['quiz4'];
			// store correct answer
			$_SESSION['quiz4_correct'] = $_POST['correct_ans1_4'];
		}
	}

	if (array_key_exists('quiz5', $_POST)) {
		if ($_POST['quiz5'] == $_POST['correct_ans1_5']) {
			$correct_answers++;
		}
		else {
			// store incorrect answer
			$_SESSION['quiz5_ans'] = $_POST['quiz5'];
			// store correct answer
			$_SESSION['quiz5_correct'] = $_POST['correct_ans1_5'];
		}
	}

	$_SESSION['correct_pg1'] = $correct_answers;
	$correct_ans_pg1 = $_SESSION['correct_pg1'];

}

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
//$output = 'Database connection established.';
//include 'output.html.php';

for ($i = 0; $i < 3; $i++) {
	$randomRecord = mt_rand(1,573);
	$sql1 = "select * from legal_terms_clean where id = $randomRecord";
	$result= mysqli_query($link, $sql1);
	$row = $result->fetch_assoc();
	// Store result into $row array
	$terms2_1[] = array('id' => $row['id'], 'term' => $row['term'], 'def' => $row['definition']);
}

for ($i = 0; $i < 3; $i++) {
	$randomRecord = mt_rand(1,573);
	$sql2 = "select * from legal_terms_clean where id = $randomRecord";
	$result= mysqli_query($link, $sql2);
	$row = $result->fetch_assoc();
	// Store result into $row array
	$terms2_2[] = array('id' => $row['id'], 'term' => $row['term'], 'def' => $row['definition']);
}
for ($i = 0; $i < 3; $i++) {
	$randomRecord = mt_rand(1,573);
	$sql3 = "select * from legal_terms_clean where id = $randomRecord";
	$result= mysqli_query($link, $sql3);
	$row = $result->fetch_assoc();
	// Store result into $row array
	$terms2_3[] = array('id' => $row['id'], 'term' => $row['term'], 'def' => $row['definition']);
}
for ($i = 0; $i < 3; $i++) {
	$randomRecord = mt_rand(1,573);
	$sql4 = "select * from legal_terms_clean where id = $randomRecord";
	$result= mysqli_query($link, $sql4);
	$row = $result->fetch_assoc();
	// Store result into $row array
	$terms2_4[] = array('id' => $row['id'], 'term' => $row['term'], 'def' => $row['definition']);
}
for ($i = 0; $i < 3; $i++) {
	$randomRecord = mt_rand(1,573);
	$sql5 = "select * from legal_terms_clean where id = $randomRecord";
	$result= mysqli_query($link, $sql5);
	$row = $result->fetch_assoc();
	// Store result into $row array
	$terms2_5[] = array('id' => $row['id'], 'term' => $row['term'], 'def' => $row['definition']);
}

include 'terms2.html.php';
mysqli_close($link);
?>