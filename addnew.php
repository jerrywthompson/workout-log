<?php
	include('conn.php');
  // var_dump($_POST);
  
  if ($_POST['date'] == "Defaults to today's date"){
    $date = date("Y/m/d");
  } else {
    $date=date_create($_POST['date']);
    $date=date_format($date,"Y/m/d");
  }

 if ($_POST['user'] == ""){
    $_POST['user'] = "Jerry";
 }

 if ($_POST['exercise'] == ""){
    errHandler("Exercise");
 }
  
 if ($_POST['reps'] == ""){
    errHandler("Reps");
 }

 if ($_POST['weight'] == ""){
    errHandler("Weight");
 }

  $user = $_POST['user'];
  $exercise = $_POST['exercise'];
	$reps = $_POST['reps'];
	$weight = $_POST['weight'];
	$notes = $_POST['notes'];

	// echo "<br>date:" . $date;
	// echo "<br>exercise:" . $exercise;
	// echo "<br>testbtn:" . $testbtn;
  // echo "<br>optradio:" . $optradio;

    $query = "insert into log (date, user, exercise, reps, weight, notes) " . 
            "values ('$date', '$user', '$exercise', '$reps', '$weight', '$notes')";

    // echo "<br>query:" . $query;
    
	mysqli_query($conn, $query);
  header( "Location: index.php" );

  function errHandler($error){
      $errMsg = "$error field cannot be blank";
      echo "<script type='text/javascript'>alert('$errMsg');</script>";
      header( "refresh: .1 url=index.php" ); 
      exit();
  }
    
?>