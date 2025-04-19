<?php 
include('func.php');
$id = get_or_post('id');
?>
<html>
<style>
table, th, td {
  border:1px solid black;
}
tr.hightlited {
	background-color: rgba(169, 255,108,0.8);
}
</style>
<head>
	<title>Scores</title>
	<h1 class="font-effect-neon">LEADERS OF THE GAME</h1>
	<h2>All races</h2>
	<table style="width:100%">
	  <tr>
		<th>Name</th>
		<th>Score</th>
		<th>Race</th>
	  </tr>
	  <?php
	    $query = "select players.id, players.name, players.score, races.name as race "
			. "from players "
			. "join races on race_id=races.id "
			. "order by score desc";
		$players = sql_req($query);
		
		foreach($players as $player)
		{
			if ($player['id'] == $id)
				echo "<tr class='hightlited'>\n";
			else
				echo "<tr>\n";
		    echo "<td>\n" . $player['name'] . "</td>\n";
		    echo "<td>\n" . $player['score'] . "</td>\n";
		    echo "<td>\n" . $player['race'] . "</td>\n";
			//echo "<td>'" . $score[] . "'<td>"
		    echo "</tr>";
		}
	  ?>
	</table>
	
	<h2>Only your race</h2>
	<table style="width:100%">
	  <tr>
		<th>Name</th>
		<th>Score</th>
	  </tr>
	<?php 
	
	//$r = sql_req(');
	//$rn = $r[0]["race_id"];
	$query1 = "select players.id, players.name, players.score, races.name as race "
			. "from players "
			. "join races on race_id=races.id "
			. "WHERE race_id = (SELECT race_id FROM players WHERE id=" . $id .") "
			. "order by score desc";
	//echo $query1;
	    	
	$players1 = sql_req($query1);  
      
	foreach($players1 as $player)
	{
		
	    if ($player['id'] == $id)
			echo "<tr class='hightlited'>\n";
		else
			echo "<tr>\n";
		echo "<td>\n" . $player['name'] . "</td>\n";
		echo "<td>\n" . $player['score'] . "</td>\n";
	  echo "</tr>";
	}?>
	</table>
	<form action="game.php">
		<?php
		echo '<input type="hidden" name="id" value="' . $id .'" >'
		?>
		<input type="submit" value="AGAIN!">
	</form>
	
	<img src="fire.gif" alt="fire">
</html>