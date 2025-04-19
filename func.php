<?php
function sql_req( $query )
{
	$link = mysqli_connect('localhost', 'root', '', 'base');
	$resource = mysqli_query($link, $query);
	if ($link === false)
	{
		die('Не могу подключится к СУБД');
	}
	if ($resource === false)
		die('Ошибка в запросе' . mysql_error($link));
	else if($resource === true)
	{
		echo "insert/update/delete";
		if (strtolower(substr($query, 0, 6)) == "insert")
			$res = mysql_affected_rows($link);
		else
			$res = mysqli_insert_id($link);
	}
	else
	{
		$res = [];
		while (($row = mysqli_fetch_array($resource, MYSQL_ASSOC)) !== null)
			$res[] = $row;
	}
	return $res;
}

function get_or_post( $key, $default = null)
{
	if (key_exists($key, $_GET))
		return $_GET[$key];
	if (key_exists($key, $_POST))
		return $_POST[$key];
	return $default;
}	
?>
