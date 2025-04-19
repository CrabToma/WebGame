<!DOCTYPE html>
<?php
include('func.php');
$id = get_or_post('id');

$res = get_or_post('result'); 
$old_res = sql_req('SELECT score FROM players WHERE id=' . $id)[0]['score'];

if ($res == "Win")
	$new_res = $old_res + 10;
else
	$new_res = $old_res - 30;

sql_req('UPDATE players SET score = ' . $new_res . ' WHERE id = ' . $id);

header('Location:scores.php?id=' . $id[0]['id']);
?>