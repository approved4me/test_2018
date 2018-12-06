<?php
$db_user = 'root';
$db_password = '';

try {
//$pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_password);
	$dbh = new PDO('mysql:host=localhost;dbname=cargoliti;charset=utf8', $db_user, $db_password);
echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
?>
