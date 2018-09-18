<!DOCTYPE html>
<?php 
require_once "conectar.php";
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/cadastro.css">

<title>Cadastro</title>

</head>
<body>	
	<div  id="cabecalho">
		<tr>
        	<td>
            	<img id="logo"  src="imagem/casaRB.jpg" >
            </td>
        </tr>
        <br>
        <tr>
        	<td class="dizer">
            	Formulario de cadastro para Folha de Ponto
            </td>
        </tr>
	</div>


	<div>
    	<form method="post" action="?go=cadastrar">
        	<table id="cad_table">
            	<tr>
                	<td>Matricula:</td>    	
                    <td><input type="text" name="matricula" id="matricula" class="txt" maxlength="10"></td>                
                </tr>
                <tr>
                	<td>Nome:</td>    	
                    <td><input type="text" name="nome" id="nome" class="txt" maxlength="60"></td>                
                </tr>
				<tr>
                	<td>Lotação:</td>    	
                    <td><input type="text" name="lotacao" id="lotacao" class="txt" maxlength="70"></td>                
                </tr>
                <tr>
                	<td>Cargo:</td>    	
                    <td><input type="text" name="cargo" id="cargo" class="txt" maxlength="70"></td>                
                </tr>
				<tr>
                	<td>Função:</td>    	
                    <td><input type="text" name="funcao" id="funcao" class="txt" maxlength="60" value="n/a" ></td>                
                </tr>
                <tr>
                	<td>Carga Horária:</td>    	
                    <td><input type="text" name="caghora" id="caghora" class="txt" maxlength="2" value="40"></td>                
                </tr>
                <tr>
                	<td><input type="submit" value="Cadastrar" class="btn" id="btnCad"</td>                
                </tr>
             </table>
        </form>
    
    
    </div>

</body>

</html>

<?php include 'post.php'; ?>