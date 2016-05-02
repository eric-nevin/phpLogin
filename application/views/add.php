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
	<a href='home'>Home</a>
	<a href='logoff'>Logoff</a>
	<h2>Add a trip</h2>
	<?php echo $this->session->flashdata('error'); ?>
	<?php echo $this->session->flashdata('error_date'); ?>
		<form action="/test/add_trip" method="post">
		  <fieldset class="form-group">
		    <label for="destination">Destination</label>
		    <input type="text" class="form-control" id="destination" name="destination" placeholder="Destination">
		  </fieldset>
		   <fieldset class="form-group">
		    <label for="description">Description</label>
		    <input type="text" class="form-control" id="description" name="description" placeholder="Description">
		  </fieldset>
		  <fieldset class="form-group">
 			<label for="start_date">Start Date</label>
  			<input type="date" class="form-control" id="start_date" name="start_date">
		</fieldset>
		<fieldset class="form-group">
 			<label for="end_date">End Date</label>
  			<input type="date" class="form-control" id="end_date" name="end_date">
		</fieldset>
		<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

</body>
</html>