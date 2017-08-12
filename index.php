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
//$output = 'Database connection established.';
//include 'output.html.php';

	for ($i = 0; $i < 3; $i++) {
		$randomRecord = mt_rand(1,573);
		$sql1 = "select * from legal_terms_clean where id = $randomRecord";
		$result= mysqli_query($link, $sql1);
		$row = $result->fetch_assoc();
		// Store result into $row array
		$terms1[] = array('id' => $row['id'], 'term' => $row['term'], 'def' => $row['definition']);
	}

	for ($i = 0; $i < 3; $i++) {
		$randomRecord = mt_rand(1,573);
		$sql2 = "select * from legal_terms_clean where id = $randomRecord";
		$result= mysqli_query($link, $sql2);
		$row = $result->fetch_assoc();
		// Store result into $row array
		$terms2[] = array('id' => $row['id'], 'term' => $row['term'], 'def' => $row['definition']);
	}
	for ($i = 0; $i < 3; $i++) {
		$randomRecord = mt_rand(1,573);
		$sql3 = "select * from legal_terms_clean where id = $randomRecord";
		$result= mysqli_query($link, $sql3);
		$row = $result->fetch_assoc();
		// Store result into $row array
		$terms3[] = array('id' => $row['id'], 'term' => $row['term'], 'def' => $row['definition']);
	}
	for ($i = 0; $i < 3; $i++) {
		$randomRecord = mt_rand(1,573);
		$sql4 = "select * from legal_terms_clean where id = $randomRecord";
		$result= mysqli_query($link, $sql4);
		$row = $result->fetch_assoc();
		// Store result into $row array
		$terms4[] = array('id' => $row['id'], 'term' => $row['term'], 'def' => $row['definition']);
	}
	for ($i = 0; $i < 3; $i++) {
		$randomRecord = mt_rand(1,573);
		$sql5 = "select * from legal_terms_clean where id = $randomRecord";
		$result= mysqli_query($link, $sql5);
		$row = $result->fetch_assoc();
		// Store result into $row array
		$terms5[] = array('id' => $row['id'], 'term' => $row['term'], 'def' => $row['definition']);
	}

include 'terms.html.php';
mysqli_close($link);
?>