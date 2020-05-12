
<?php

//database variables: 
$host = '127.0.0.1';
$db   = 'zeitschrift';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

//Connect to database
function connectTo($host,$db,$user,$pass,$charset){
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
    $pdo = new PDO($dsn, $user, $pass, $options); 
} catch (\PDOException $e) {
	echo "Error:   could not connect to <b>".$db."</b><br>".$e->getMessage()."<br>";
	// die("Error: can not connect to database.. ".$e->getMessage());
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}   //	echo "Connection  to <b>". $db ,"</b> succeeded.";	
	return new PDO($dsn, $user, $pass, $options); 
}

?>

























