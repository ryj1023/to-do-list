
<?php

if(isset($_POST["activity"])){
	//opens connection to mysql server
	$con = mysqli_connect('localhost', 'ryj1023', 'Focus0816', 'todo_list_data');
		if(!$con){
			die('Not Connected'. mysqli_connect_error());
		}
		$sql = "INSERT INTO Activities (time, activity, comments)
		VALUES ('".$_POST["time"]."','".$_POST["activity"]."','".$_POST["comments"]."')";

		if ($con->query($sql) === !TRUE) {
			echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $con->error."');</script>";
			}
	} elseif(isset($_POST['delete'])){
		$id = $_POST['id'];
		$con = mysqli_connect('localhost', 'ryj1023', 'Focus0816', 'todo_list_data');
		if(!$con){
			die('Not Connected'. mysqli_connect_error());
		}
		$query = "DELETE FROM Activities WHERE id='".$id."'";
		$result = mysqli_query($con, $query);
		if (!$result) {
			
			echo "<script type= 'text/javascript'>alert('Error: " . $query . "<br>" . $con->error."');</script>";
			}
	}
	$con = mysqli_connect('localhost', 'ryj1023', 'Focus0816', 'todo_list_data');
		if(!$con){
			die('Not Connected'. mysqli_connect_error());
		}
		$query = "SELECT * FROM Activities";
		$result = mysqli_query($con, $query);

		if (!$result) {
			
			echo "<script type= 'text/javascript'>alert('Error: " . $query . "<br>" . $con->error."');</script>";
		}
?>