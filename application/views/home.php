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
	<a href='logoff'>Logoff</a>
		<h2>Hello <?php echo $data['first_name'] ?></h2>
  		<p>Your trip schedules:</p>            
  		<table class="table">
    		<thead>
		      <tr>
		        <th>Destination</th>
		        <th>Travel Start Date</th>
		        <th>Travel End Date</th>
		        <th>Plan</th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php foreach($trip_data as $trips){ ?>
		    	<tr>
		 			<td><a href="/destination/<?php echo $trips['id']; ?>"><?php echo $trips['destination']; ?></a></td>
		 			<td><?php echo $trips['start_date']; ?></td>
		 			<td><?php echo $trips['end_date']; ?></td>
		 			<td><?php echo $trips['plan']; ?></td>
		      </tr>
		      <?php } ?>
		    </tbody>
		  </table>
		  <br><br>
		  <table class="table">
    		<thead>
		      <tr>
		      	<th>Name</th>
		        <th>Destination</th>
		        <th>Travel Start Date</th>
		        <th>Travel End Date</th>
		        <th>Do you want to join</th>
		      </tr>
		    </thead>
		    <tbody>
		   
		    <?php foreach($other_trips as $info){ ?>
		    	<tr>
		    		<td><?php echo $info['first_name']; ?></td>
		 			<td><a href="destination/<?php echo $info['trip_id']; ?>"><?php echo $info['destination']; ?></a></td>
		 			<td><?php echo $info['start_date']; ?></td>
		 			<td><?php echo $info['end_date']; ?></td>
		 			<td><a href="test/join_trip/<?php echo $info['id']; ?>">Join</a></td>
		 			
		      </tr>
		      <?php } ?>
		    </tbody>
		  </table>
		  <a href="add">Add new trip</a>
	</div>

</body>
</html>