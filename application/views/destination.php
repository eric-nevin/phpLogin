<!DOCTYPE html>
<html>
<head>
	<title>Actual Content</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div id="container">
	<a href='/home'>Home</a>
	<a href='logoff'>Logoff</a>
		<h2>Location: <?php echo $trip_data['destination']; ?></h2>         
  		<p>Planned by: <?php echo $trip_data['first_name']; ?></p>
  		<p>Description: <?php echo $trip_data['plan']; ?></p>
  		<p>Start Date: <?php echo $trip_data['start_date']; ?></p>
  		<p>End Date: <?php echo $trip_data['end_date']; ?></p>
  		<br><br>
  		<h2>Other users joining in this trip</h2>

  		<?php foreach($users_data as $user){ ?>
			<p><?php echo $user['first_name']." ".$user['last_name']; ?></p>
  		<?php } ?>
	</div>

</body>
</html>