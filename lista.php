<?php require_once "conectar.php";
$sql="SELECT * FROM `pessoa`";

?>

<?php
$res =(mysqli_query("SELECT * FROM pessoa")); 


while ($tb =  mysqli_fetch_array($res))
{
		
	$nome = $tb['nome'];
	$matricula = $tb['matricula'];
	
echo "<table>";	
	
	//echo "<tr><td>" . $tb['nome'] . "</td><td>" . $tb['matricula'] . "</td></tr>";
echo "</table>";		
echo $nome;
echo $matricula .'<br>';
//exit;



}


?>