<?php
session_start();
date_default_timezone_set('Europe/London');
//Check if session is set
if(!isset($_SESSION['userid'])) {
	header("location: login.html");
	exit();
	}


	
if(!isset($priority)){
echo "Inputs are empty";	
}else{
	echo "Input is filled";
}

var_dump($priority);
?>

<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="//code.jquery.com/jquery-latest.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
 
<body>
	<div class="container">
	<h1 class="page-header">~jrnl</h1>
		<div class="header">
			<h1 class="nowrap">Welcome, <?php echo $_SESSION["username"];?></h1>
			<a href="logout.php" id="btn">Sign Out</a>
			<h3 id="current_date"> <?php echo date('l jS \of F Y'); ?></h2>
		</div>

		<div class="main_directory">
			<a href="#">Previous</a>
			<span id="user_date" style="font-size:1.5em">Today</span>
			<a href="#">Next</a>
			<a href="#"id="go_to">Go to</a>
			<a href="#" id="past_forward">Past forward</a>
		</div>

		<div class="user_input">
			<form id='diary_entry' name='form_3' method='POST' action='draft.php'>
				<div class='user_activities'>
					<span>Priority: </span>
					<input type="text" id="priority" class="activity_boxes" name="priority" value="<?php if(isset($_SESSION['post-data']['priority'])) { echo $_SESSION['post-data']['priority'];}?>">
				</div>
				<div class='user_activities'>
					<span>Plan: </span>
					<input type="text" id="plan" class="activity_boxes" name="plan">
				</div>
				<div class='user_activities'>
					<span>Positive: </span>
					<input type="text" id="positive" class="activity_boxes" name="positive">
				</div>
				<div class='user_activities'>
					<span>Negative: </span>
					<input type="text" id="negative" class="activity_boxes" name="negative">
				</div>
				<div class='user_activities'>
					<span>Achievement: </span>
					<input type="text" id="achievement" class="activity_boxes" name="achievement">
				</div>
				<div class='user_activities'>
					<span>Development: </span>
					<input type="text" id="development" class="activity_boxes" name="development">
				</div>
				<div class='user_activities'>
				<span>Forward: </span>
				<input type="text" id="forward" class="activity_boxes" name="forward"><br>
				</div>
				<input type="submit" name="Save" id="send_btn">
			</form>
		</div>

		<div>
			<footer class="footer">Magic by <a href="http://www.mmg.io">mmg.</a></footer>
		</div>

	</div>

</html>