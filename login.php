<!DOCTYPE html>
<?php
include('func.php');

$races = sql_req("SELECT * FROM races"); 
?>
<html>
<head>
	<title>Вход</title>
	<style>
	input[type=text], select {
	  width: 50%;
	  padding: 12px 20px;
	  margin: 8px 0;
	  display: inline-block;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	}

	input[type=submit] {
	  width: 50%;
	  background-color: #4CAF50;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
	}

	input[type=submit]:hover {
	  background-color: #45a049;
	}
</style>
</head>
<body>
	
	<form action="register.php">
		<label for="fname">LOGIN:</label><br>
		<input name = 'login' type="text"/><br>
		  
		<label for="race">RACE:</label><br>
		<select name = 'race'>
			<?php
			foreach($races as $race)
			{
				echo "<option value ='" . $race['id'] . "'>" . $race['name'];
			}
			?>
			
		</select><br>
		<input type="submit" value="ВОЙТИ"><br>
	</form>
</body>
</html>