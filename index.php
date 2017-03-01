
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shopping List App</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery.min.js"></script>
	<script type="text/javascript" src="index.js">
	</script>
</head>
<body>
	<div class="main">
		<div class="input">
			<h1 class="header-text">To Do List</h1>
				<div class="form-wrapper">
					<form id="userInput" action="" method="post">
						Time: <input type="text" id="time" class="inputBox" value="" name="time" placeholder="Enter An Appointment Time" size="20">
						Activity: <input type="text" class="inputBox" id="activity" value="" name="activity" placeholder="Enter An Activity" size="20">
						Comments: <input type="text" class="inputBox" id="comments" value="" name="comments" placeholder="Additional Comments" size="20">
						<input type="submit" name="submit" id="submit" class="btn btn-default disabled">
					</form>
				</div>
				<table class="table table-striped table-hover col-md-6" id="table">
				  <thead>
				    <tr>
				      <th>Activity</th>
				      <th>Time</th>
				      <th>Comments</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php
				  		include('list.php');
						while($info = mysqli_fetch_assoc($result)){
							$id = $info[id];
				 	?>
				    <tr class="info">
				      <td><?php echo $info[activity]; ?></td>
				      <td><?php echo $info[time]; ?></td>
				      <td><?php echo $info[comments]; ?></td>
				      <form method="post" action="">
				      	<td style="display: none" name='id'><input type='text' name="id" value=<?php echo $info[id]; ?>>
				      	<td><input id="delete" value="Delete" type="submit" name='delete' class="btn btn-danger">
				      </form></td>
				    </tr>
				    <?php
						}
				    ?>
				  </tbody>
				</table>
				<div id="test">
				</div>
		</div>
	</div>
</body>
</html>