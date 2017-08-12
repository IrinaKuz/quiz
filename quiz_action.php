<?php 
session_start();

// # of total of corect answers
$correct_answers = 0;


if (isset($_POST['submit']))  {
	if (array_key_exists('quiz1', $_POST)) {
		if ($_POST['quiz1'] == $_POST['correct_ans2_1']) {
			$correct_answers++;
		}
		else {
			// store incorrect answer
			$_SESSION['quiz6_ans'] = $_POST['quiz1'];
			// store correct answer
			$_SESSION['quiz6_correct'] = $_POST['correct_ans2_1'];
		}
	}
	
	if (array_key_exists('quiz2', $_POST)) {
		if ($_POST['quiz2'] == $_POST['correct_ans2_2']) {
			$correct_answers++;
		}
		else {
			// store incorrect answer
			$_SESSION['quiz7_ans'] = $_POST['quiz2'];
			// store correct answer
			$_SESSION['quiz7_correct'] = $_POST['correct_ans2_2'];
		}
	}
	
	if (array_key_exists('quiz3', $_POST)) {
		if ($_POST['quiz3'] == $_POST['correct_ans2_3']) {
			$correct_answers++;
		}
		else {
			// store incorrect answer
			$_SESSION['quiz8_ans'] = $_POST['quiz3'];
			// store correct answer
			$_SESSION['quiz8_correct'] = $_POST['correct_ans2_3'];
		}
	}
	
	if (array_key_exists('quiz4', $_POST)) {
		if ($_POST['quiz4'] == $_POST['correct_ans2_4']) {
			$correct_answers++;
		}
		else {
			// store incorrect answer
			$_SESSION['quiz9_ans'] = $_POST['quiz4'];
			// store correct answer
			$_SESSION['quiz9_correct'] = $_POST['correct_ans2_4'];
		}
	}
	
	if (array_key_exists('quiz5', $_POST)) {
		if ($_POST['quiz5'] == $_POST['correct_ans2_5']) {
			$correct_answers++;
		}
		else {
			// store incorrect answer
			$_SESSION['quiz10_ans'] = $_POST['quiz5'];
			// store correct answer
			$_SESSION['quiz10_correct'] = $_POST['correct_ans2_5'];
		}
	}
}
	
	$_SESSION['correct_pg2'] = $correct_answers;
	$correct_ans_pg1 = $_SESSION['correct_pg1'];
	$total_ans = $correct_ans_pg1 + $correct_answers;
	print_r($_POST);
	print("Correct ans on page 1: " . $_SESSION['correct_pg1'] . "\n Correct ans on page 2: " . $correct_answers);
	include 'result.html.php';
	?>