<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alterar</title>
</head>

<?php
require_once "conectar.php";
$id = $_GET['id'];
$pesq = mysqli_query($con,"select * from folha.pessoa where id_pessoa ='$id'");

while ($lista = mysqli_fetch_array($pesq)){
	//var_dump ($lista);
	$nome  = $lista['nome'];
	$matricula  = $lista['matricula'];
	$cargo  = $lista['cargo'];
	$funcao  = $lista['funcao'];
	$caghora  = $lista['caghora'];
	$lotacao  = $lista['lotacao'];
	$id = $lista["id_pessoa"];
	//var_dump ($id );
}
?>

<body>	
	<div>
		<tr>
        	<td class="dizer">
            	Formulario de alteração da Folha de Ponto
            </td>
        </tr>
	</div>


	<div>
    	<form method="post" action="post_alterar.php">
        	<table id="cad_table">
			    <tr>
                	<td>Matricula:</td>    	
                    <td><input type="text" name="matricula" id="matricula" class="txt" value="<?php echo $matricula; ?>" maxlength="10"></td>                
                </tr>
                <tr>
                	<td>Nome:</td>    	
                    <td><input type="text" name="nome" id="nome" class="txt" value="<?php echo $nome; ?>" maxlength="80"></td>                
                </tr>
				<tr>
                	<td>Lotação:</td>    	
                    <td><input type="text" name="lotacao" id="lotacao" class="txt" value="<?php echo $lotacao; ?>" maxlength="70"></td>                
                </tr>
                <tr>
                	<td>Cargo:</td>    	
                    <td><input type="text" name="cargo" id="cargo" class="txt" value="<?php echo $cargo; ?>"maxlength="70"></td>                
                </tr>
				<tr>
                	<td>Função:</td>    	
                    <td><input type="text" name="funcao" id="funcao" class="txt" maxlength="60" value="<?php echo $funcao; ?>" ></td>                
                </tr>
                <tr>
                	<td>Carga Horária:</td>    	
                    <td><input type="text" name="caghora" id="caghora" class="txt" maxlength="2" value="<?php echo $caghora; ?>"></td>                
                </tr>
				<tr>
                	   	
                    <td><input type="hidden" name="id" id="id" class="txt" maxlength="2" value="<?php echo $id; ?>" readonly></td>                
                </tr>
                <tr>
                	<td><input type="submit" value="Alterar" class="btn" id="btnCad"</td>                
                </tr>
             </table>
        </form>
    
    
    </div>

</body>

</html>

