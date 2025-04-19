<!DOCTYPE html>
<?php
include("func.php");
$id = get_or_post('id'); 
?>
<html>
<head>
	<title>ИГРА</title>
	<style>
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
	<label for="fname">Привет,  <?php 
	$name = sql_req('SELECT name FROM players WHERE id=' . $id);
	$namen = $name[0]["name"];
	print_r($namen);
	?> </label><br><br>
	
	<form action="result.php">
		<?php
		echo '<input type="hidden" name="id" value="' . $id .'" >'
		?>
		<input type="submit" name="result" value="Win">
		<input type="submit" name="result" value="Loose">
	</form>
	</body>
</html>