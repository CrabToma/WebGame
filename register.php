<?php
include('func.php');

$login = get_or_post('login');
$race = get_or_post('race');

if ($login != null and $race != null )
	echo "nice";
else 
	echo "callapse";
print_r("SELECT id FROM players WHERE name='". $login ."' AND race_id=" . $race);
$id = sql_req("SELECT id FROM players WHERE name='". $login ."' AND race_id=" . $race);
if ($id === array())
{
	sql_req("INSERT INTO players(name, race_id, score) VALUES ('". $login . "', " . $race . ", 0)");
	$id = sql_req("SELECT id FROM players WHERE name='". $login ."' AND race_id=" . $race);	
}	
header('Location:game.php?id=' . $id[0]['id']);
exit(0);
?>