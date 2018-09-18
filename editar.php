<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Alterar Folha de Frequencia</title>
</head>


<body>



<form  method="post">
INFORME O NOME: <br>
<input type="search" required name="busca">
<button type="submit">Pesquisar</button>
<input type="submit" value="Pesquisar" >

</form>


<?php 
require_once "conectar.php";
if (isset($_POST['busca'])){
$nome1 = $_POST['busca'];
//var_dump ($nome1);
//$pesq = mysqli_query($con,"select id_pessoa,matricula,nome from folha.pessoa WHERE nome LIKE '$nome1%' ORDER by matricula");
$pesq = mysqli_query($con,"select id_pessoa,matricula,nome from folha.pessoa WHERE nome='$nome1%' OR matricula='$nome1%' ORDER by matricula");

//var_dump ($pesq);

echo "<table id='cabecalho' border=1>";
echo "<tr>";
echo		"<td bgcolor='CCCCCC'>Matricula</td>";
echo		"<td bgcolor='CCCCCC'>Nome</td>";
echo		"<td bgcolor='CCCCCC'>Alterar</td>";
echo		"<td bgcolor='CCCCCC'>Excluir</td>";
echo	"<br>";
echo	"</tr>";


while ($lista = mysqli_fetch_assoc($pesq)){
	
	echo "<tr>";
		echo "<td>" .$lista['matricula'] . "</td>";
		echo "<td>" .$lista['nome'] . "</td>";
		$id = $lista["id_pessoa"];
	echo "<td><a href='alterar.php?id={$id}'><input type='submit' value='Alterar'></a></td>";
	echo "<td><a href='excluir.php?id={$id}'><input type='submit' value='Excluir'></a></td>";
	echo "</tr>";
	}
}

echo "</table>";
?>



</body>


</html>