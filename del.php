include('func.php')
<?php
function get_or_post($key, $default)
{
	if (array_key_exists($key, $_GET))
		return $_GET[$key];
}

function get_or_post($key, $defoult = null)
{
	if (key_exist($key, $_GET ))
		return $_GET[$key];
	if (key_exist($key, S_POST))
		return $_POST[$key];
	return $defoult;
}
?>