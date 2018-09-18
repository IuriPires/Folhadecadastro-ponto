<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Alterar Folha de Frequencia</title>
<link rel="stylesheet" type="text/css" href="css/style-main.css">
<link rel="stylesheet" type="text/css" href="css/editar.css">
</head>


<body>
<header>
        <div class="div-top"> <!--Div da imagem de topo-->
            <img class="img-top" src="imagem/casaRB.jpg" width="350px"> <!--Imagem de topo-->
       </div>
</header>

<div class="box-main">
    <form  method="post">
    <p class="folha-pt">Folha de ponto</p>
    <p style="text-align: center;">Consultar Editar Alterar </p>
    <input class="input-matricula" type="search" placeholder="Informe um nome ou matricula" required name="busca">
    <div class="box-btn">
        <button class="btn-i" type="submit">Pesquisar</button>
    </div>
    </form>
</div>


<div style="width: 35%; heigth: 150px; margin: 0 auto; overflow: scroll; margin-top: 70px">
<?php 
require_once "conectar.php";
if (isset($_POST['busca'])){
$nome1 = $_POST['busca'];
//var_dump ($nome1);
//$pesq = mysqli_query($con,"select id_pessoa,matricula,nome from folha.pessoa WHERE nome LIKE '$nome1%' ORDER by matricula");
$pesq = mysqli_query($con,"select id_pessoa,matricula,nome from folha.pessoa WHERE nome LIKE '$nome1%' OR matricula LIKE '$nome1%'  ORDER by matricula");

//var_dump ($pesq);

echo "<table id='cabecalho' border=1>";
echo "<tr>";
echo		"<td bgcolor='CCCCCC'>Matricula</td>";
echo		"<td bgcolor='CCCCCC'>Nome</td>";
echo		"<td bgcolor='CCCCCC'>Alterar</td>";
echo		"<td bgcolor='CCCCCC'>Excluir</td>";
echo	"<br>";
echo"</tr>";


while ($lista = mysqli_fetch_assoc($pesq)){
    //var_dump ($lista);
    
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
</div>



</body>


</html>