<!DOCTYPE html>
<html>
<head>
	<title>PHP/Workout Log</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/bootstrap.css" />
</style>
</head>
<body>
<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:80%;">
	<span style="font-size:25px; color:blue"><center><strong>Workout Log</strong></center></span>	
		<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
		<span class="pull-right"><a href="lastworkout.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Last Workout</a></span>
		<!-- <span class="pull-right"><a href="http://jerrythompson.website/workout/lastworkout.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Last Workout</a></span> -->
		<br/>
		<span class="pull-right"><a href="http://jerrythompson.website/workout/datatables/" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Data Tables</a></span>
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>Date</th>
				<th>User</th>
				<th>Exercise</th>
				<th>Reps</th>
				<th>Weight</th>
				<th>Notes</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
				// include('conn.php');
				include_once('SQLLight3.php');
				include_once('SQL.php');
				include_once('echoOutput.php');

				// $create_table_sql = $sql->create_recipe_table();
				// $db->execute($create_table_sql);
				
				// $queryText = "select * from log order by date desc";
				// $queryText = "select * from log group by user, exercise order by user desc, date desc";
				// $query=mysqli_query($conn, $queryText);
				// while($row=mysqli_fetch_array($query)){

				// 	var_dump($row);


				$db = new SQLite3('db/workout.db');

				$res = $db->query('SELECT * FROM log');
				
				while ($row = $res->fetchArray()) {
					// var_dump($row);
					$date=date_create($row['date']);
					$date=date_format($date,"m/d/Y");
				




				// $sql = "select * from log order by date desc";
				// $results = $db->query($sql);
				
				// while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
		        //    funcEchoOutput($row);

					//       echo "ID = ". $row['ID'] . "\n";
					//       echo "NAME = ". $row['NAME'] ."\n";
					//       echo "ADDRESS = ". $row['ADDRESS'] ."\n";
					//       echo "SALARY = ".$row['SALARY'] ."\n\n";
				




          	?>
        
					<tr>
						<td><?php echo $date; ?></td>
						<td><?php echo $row['user']; ?></td>
						<td><?php echo $row['exercise']; ?></td>
						<td><?php echo $row['reps']; ?></td>
						<td><?php echo $row['weight']; ?></td>
						<td><?php echo $row['notes']; ?></td>
						<td>
							<a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
							<a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
							<?php include('button.php'); ?>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
	</div>
	<?php include('add_modal.php'); ?>
</div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
  <script>
    $(function() {
      $('[data-toggle="datepicker"]').datepicker({
        autoHide: true,
        zIndex: 2048,
      });
    });
	</script>
	<script>
		$(".btn-group > .btn").click(function(){
			$(".btn-group > .btn").removeClass("active");
			$(this).addClass("active");
		});
	</script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />
</body>
</html>