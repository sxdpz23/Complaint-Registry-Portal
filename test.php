<?php

//$host = '127.0.0.1';
//$port = '3306';
//$server = $host . ':' . $port;
//$user = 'root';
//$password = '';
$link = mysql_connect ('127.0.0.1:3306', 'root', '');
if (!$link)
{
	die('Error: Could not connect: ' . mysql_error());
}
$database = 'mysql';
mysql_select_db($database);
$query = 'select * from tbl_users';
$result = mysql_query($query);
if (!$result) 
{	$message = 'ERROR:' . mysql_error();
	return $message;	}
else
{	$i = 0;
	echo '<html><body><table><tr>';
	while ($i < mysql_num_fields($result))
	{	$meta = mysql_fetch_field($result, $i);
		echo '<td>' . $meta->name . '</td>';
		$i = $i + 1;	}
	echo '</tr>';	
	$i = 0;
	while ($row = mysql_fetch_row($result)) 
	{	echo '<tr>';
		$count = count($row);
		$y = 0;
		while ($y < $count)
		{	$c_row = current($row);
			echo '<td>' . $c_row . '</td>';
			next($row);
			$y = $y + 1;	}
		echo '</tr>';
		$i = $i + 1;	}
	echo '</table></body></html>';
	mysql_free_result($result);	}
mysql_close ($link);

?>
