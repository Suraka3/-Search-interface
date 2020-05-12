<?php
//var_dump($_POST);
?>
<?php 
include 'opendb.php';
//database variables: 
$host = '127.0.0.1';
$db   = 'zeitschrift';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$tablename="liste";
$msg="";


$pdo = connectTo($host,$db,$user,$pass,$charset);
echo "<html>
<head>
  <title>Zeitschriften</title>  
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>
</head>
<body>";		


switch ($_POST) {
	
    case isset($_POST['simpleSearch']):
		if (empty($_POST['zeitschriftentitel'])){
		   $sql="select * from ".$tablename.";";
		   $msg= "You did not set any keywords for your search!";
		}else{
			$sql="select * from ".$tablename." where zeitschriftentitel like '%{$_POST['zeitschriftentitel']}%'";
			$msg= "Here are your search results: ";
		}
		$data = $pdo->query($sql)->fetchAll();	
			if(empty($data)){
				$msg = "Sorry, could not find any results for your search!";
			}	
		echo $msg."<br>";

		echo "<div class='container'><table class='table-striped'>";	
		$titles="SELECT `COLUMN_NAME` 
			FROM `INFORMATION_SCHEMA`.`COLUMNS` 
			WHERE `TABLE_SCHEMA`='zeitschrift' 
			AND `TABLE_NAME`='liste';";
		echo "<tr>";	
				$columns = $pdo->query($titles)->fetchAll();							
		for($i=1; $i<=12; $i++){
			foreach($columns[$i] as $col)
			echo "<th>".$col."</th>";
		}
		echo "</tr>";
		foreach ($data as $row) {
		echo "<tr>";
				echo "<td>".$row['zeitschriftentitel']."</td>".
				"<td>".$row['englUebersetzung']."</td>".
				"<td>".$row['abkuerzungstitel']."</td>".
				"<td>".$row['signatur']."</td>".
				"<td>".$row['issn']."</td>".
				"<td>".$row['printbestand']."</td>".
				"<td>".$row['fehlendeheftejahrg']."</td>".
				"<td>".$row['linkurl']."</td>".
				"<td>".$row['linkurl2']."</td>".
				"<td>".$row['vorgaenger']."</td>".
				"<td>".$row['fortsetzung']."</td>".
				"<td>".$row['bemerkungen']."</td>";
		echo "</tr>";
			}
		echo "</table><div><body></html>";
		$pdo=null;
        break;
		
    case isset($_POST['multipleSearch']):
		if(empty($_POST['firstInput']) && empty($_POST['secondInput']) && empty($_POST['thirdInput'])){
				$sql="select * from liste;";
				$msg= "You did not set any keywords for your search!";
		}else{
			$wheres = array();
			$sql = "select * from ".$tablename." where ";
			
			if (isset($_POST['firstSelect']) and !empty($_POST['firstInput'])){
				$wheres[] = "{$_POST['firstSelect']} like '%{$_POST['firstInput']}%' ";
			} 
			if (isset($_POST['secondSelect']) and !empty($_POST['secondInput'])){
				$wheres[] = "{$_POST['secondSelect']} like '%{$_POST['secondInput']}%'";
			} 
			if (isset($_POST['thirdSelect']) and !empty($_POST['thirdInput'])){
				$wheres[] = "{$_POST['thirdSelect']} like '%{$_POST['thirdInput']}%' ";
			}
			
			foreach ( $wheres as $where ){
				$sql .= $where . ' AND '; 
			}
			$sql=rtrim($sql, "AND ").";"; 
			$msg= "Here are your search results: ";
		}

		$data = $pdo->query($sql)->fetchAll();
			if(empty($data)){
				$msg = "Sorry, could not find any results for your search!";
			}
			echo $msg."<br>";
			echo "<div class='container'><table class='table-striped'>";	
			$titles="SELECT `COLUMN_NAME` 
				FROM `INFORMATION_SCHEMA`.`COLUMNS` 
				WHERE `TABLE_SCHEMA`='zeitschrift' 
				AND `TABLE_NAME`='liste';";
			echo "<tr>";	
					$columns = $pdo->query($titles)->fetchAll();							
			for($i=1; $i<=12; $i++){
				foreach($columns[$i] as $col)
				echo "<th>".$col."</th>";
			}
			echo "</tr>";
		foreach ($data as $row) {
		echo "<tr>";
				echo "<td>".$row['zeitschriftentitel']."</td>".
				"<td>".$row['englUebersetzung']."</td>".
				"<td>".$row['abkuerzungstitel']."</td>".
				"<td>".$row['signatur']."</td>".
				"<td>".$row['issn']."</td>".
				"<td>".$row['printbestand']."</td>".
				"<td>".$row['fehlendeheftejahrg']."</td>".
				"<td>".$row['linkurl']."</td>".
				"<td>".$row['linkurl2']."</td>".
				"<td>".$row['vorgaenger']."</td>".
				"<td>".$row['fortsetzung']."</td>".
				"<td>".$row['bemerkungen']."</td>";
		echo "</tr>";
			}
		echo "</table><div><body></html>";
		$pdo=null;
        break;	
		
    default:
        echo "Something wrong with your webpage, please contact your webprogrammer!!";
}



echo "</div></body></html>";






?>