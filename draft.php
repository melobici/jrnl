<?php
session_start();
date_default_timezone_set('Europe/London');
$_SESSION['post-data'] = $_POST;
$userid=$_SESSION['userid'];
$date=date("Y-m-d H:i:s");
$priority=trim($_POST['priority']);
$plan=trim($_POST['plan']);
$positive=trim($_POST['positive']);
$negative=trim($_POST['negative']);
$achievement=trim($_POST['achievement']);
$development=trim($_POST['development']);
$forward=trim($_POST['forward']);
$forward=trim($_POST['forward']);
$start=trim($_POST['start']);
$finish=trim($_POST['finish']);
$activities=trim($_POST['activities']);

//query for daily entry
require('connect.php');
if($_POST['add']){
	$query = $conn->prepare("INSERT INTO activities (userid, date, start, finish, activities)
		VALUES (:userid, :date, :start, :finish, :activities);");
	$query->bindParam(':userid', $userid);
	$query->bindParam(':date', $date);
	$query->bindParam(':start', $start);
	$query->bindParam(':finish', $finish);
	$query->bindParam(':activities', $activities);
	$query->execute();
}else{
	require('connect.php');
	$query = $conn->prepare("INSERT INTO entries (userid, date, priority, plan, positive, negative, achievement, development, forward)
		VALUES (:userid, :date, :priority, :plan, :positive, :negative, :achievement, :development, :forward);");
	$query->bindParam(':userid', $userid);
	$query->bindParam(':date', $date);
	$query->bindParam(':priority', $priority);
	$query->bindParam(':plan', $plan);
	$query->bindParam(':positive', $positive);
	$query->bindParam(':negative', $negative);
	$query->bindParam(':achievement', $achievement);
	$query->bindParam(':development', $development);
	$query->bindParam(':forward', $forward);
	$query->execute();
}

// query for activities array

header('Location: homenew.php');

?>





