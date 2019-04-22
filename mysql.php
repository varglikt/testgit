<?php
$host='mysql';
$user='root';
$pass='TM1q2w3e.';
$conn = mysql_connect($host, $user, $pass);
if ($conn->connect_error) {
	die("connection faild:" . $conn->connect_error);
	}
echo 'Connected successfully';
