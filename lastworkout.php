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
	<span style="font-size:25px; color:blue"><center><strong>Last Workout Sets</strong></center></span>	
		<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
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
				include('conn.php');
				
				$queryText = 'SELECT * from log where DATE_FORMAT(date, "%Y/%m/%d") = (SELECT max(DATE_FORMAT(date, "%Y/%m/%d")) from log) ORDER BY date desc';
				// $queryText = "select * from log group by user, exercise order by user desc, date desc";
				$query=mysqli_query($conn, $queryText);
				while($row=mysqli_fetch_array($query)){
                    $date=date_create($row['date']);
					$date=date_format($date,"m/d/Y");
					// var_dump($row);
          ?>
        
					<tr>
						<td><?php echo $date; ?></td>
						<td><?php echo $row['user']; ?></td>
						<td><?php echo $row['exercise']; ?></td>
						<td><?php echo $row['reps']; ?></td>
						<td><?php echo $row['weight']; ?></td>
						<td><?php echo $row['notes']; ?></td>
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