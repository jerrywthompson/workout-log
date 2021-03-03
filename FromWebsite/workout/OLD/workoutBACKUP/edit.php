<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$date=$_POST['date'];
	$exercise=$_POST['exercise'];
	$reps=$_POST['reps'];
	$weight=$_POST['weight'];
	$notes=$_POST['notes'];
	
	mysqli_query($conn,"update log set date='$date', exercise='$exercise', reps='$reps', weight='$weight', notes='$notes' where id='$id'");
	header('location:index.php');

?>