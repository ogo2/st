$CONNECT = mysql_connect('localhost', 'root','', 'calculator');
if (!$CONNECT) {
	die('Ошибка соединения: ' . mysql_error());
}