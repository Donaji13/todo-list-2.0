<!DOCTYPE>
<html>
<head>
<title>Second To-Do List</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<a class="btn btn-primary" href="login.php">Login</a>
<div class="text-right small-4 medium-2 columns">
<a class="btn btn-primary" href="logout-user.php">Logout</a>
</div>
<a class="btn btn-primary" href="register.php">Register</a>

<div class="wrap">
	<div class="task-list">
	<ul>
	<?php require("includes/connect.php"); 
	$mysqli = new mysqli('localhost', 'root', 'root', 'todo2');
	$query = "SELECT * FROM tasks ORDER BY date ASC, time ASC";
	if ($result = $mysqli->query($query)) {
		$numrows = $result->num_rows;
		if ($numrows>0) {
			while($row = $result->fetch_assoc()){
				$task_id = $row['id'];
				$task_name = $row["task"];
				echo '<li>
				<span>'.$task_name.'</span>
                <img id="'.$task_id.'"" class="delete-button" width="10px" src="images/close.svg"/>
				</li>';
			}
		}
	}
	?>
	</ul>
</html>