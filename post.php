<?php 
if (@$_GET['go'] == 'cadastrar'){
	$matricula = $_POST['matricula'];
	$nome = $_POST['nome'];
	$lotacao = $_POST['lotacao'];
	$cargo = $_POST['cargo'];
	$funcao = $_POST['funcao'];
	$caghora = $_POST['caghora'];
	
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
		$query1 = mysqli_num_rows(mysqli_query($con,"SELECT * FROM folha.pessoa WHERE MATRICULA = '$matricula'"));
		if ($query1 == 1){
			echo "<script>alert('Usuario ja Existente!');history.back();</script>";
			exit;
		}	else{
				mysqli_query($con,"insert into pessoa (matricula, nome, lotacao, cargo, funcao, caghora) values('$matricula','$nome','$lotacao','$cargo','$funcao','$caghora')");
				echo "<script>alert('Usuario Cadastrado com Sucesso!');</script>";
				echo "<meta http-equiv='refresh'>";
							
				}
		}
	
	}
?>