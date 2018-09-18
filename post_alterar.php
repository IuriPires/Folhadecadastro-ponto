<?php 
require_once "conectar.php";
	$id = $_POST['id'];
	$matricula = $_POST['matricula'];
	$nome = $_POST['nome'];
	$lotacao = $_POST['lotacao'];
	$cargo = $_POST['cargo'];
	$funcao = $_POST['funcao'];
	$caghora = $_POST['caghora'];
	
	/*var_dump ($matricula);
	var_dump ($nome);
	var_dump ($lotacao);
	var_dump ($cargo);
	var_dump ($funcao);
	var_dump ($caghora);*/
	
	
	if (empty($matricula)){
		echo "<script>alert('Preencha o campo matricula!');history.back();</script>";
	}elseif (empty($nome)){
		echo "<script>alert('Preencha o campo nome!');history.back();</script>";
	}elseif (empty($lotacao)){
		echo "<script>alert('Preencha o campo Lotação!');history.back();</script>";	
	}elseif (empty($cargo)){
		echo "<script>alert('Preencha o campo Cargo!');history.back();</script>";
	}elseif (empty($funcao)){
		echo "<script>alert('Preencha o campo Função!');history.back();</script>";
	}elseif (empty($caghora)){
		echo "<script>alert('Preencha o campo Carga Horária!');history.back();</script>";
	}else{
				mysqli_query($con,"UPDATE folha.pessoa set matricula='$matricula', nome='$nome', lotacao='$lotacao', cargo='$cargo', funcao='$funcao', caghora='$caghora' WHERE id_pessoa='$id'");
				echo "<script>alert('Usuario {$nome} foi alterado(a) com sucesso!');</script>";
				echo "<meta http-equiv='refresh' content=1;url='http://localhost/folha/editar2.php'>";
							
				}	
?>