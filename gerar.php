<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Formulário: combobox</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style-main.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> <!--Link da fonte usada-->
    </head>

    <body>
        
        <header>
            <img src="imagem/casaRB.jpg" width="350px" height="100px">
        
        </header>
        
        
        <div class="box-main">
            <div class="folha-pt"><p>Folha de ponto</p></div>
             <form action="index2.php" method="post">
            
                <div>
		            <label>Escolha o mês:</label>
                    <select class="select-estiloso" name="mes">
                        <option value="01">Janeiro</option>
                        <option value="02">Fevereiro</option>
                        <option value="03">Marco</option>
		                <option value="04">Abril</option>
                        <option value="05">Maio</option>
                        <option value="06">Junho</option>
		                <option value="07">Julho</option>
                        <option value="08">Agosto</option>
                        <option value="09">Setembro</option>
		                <option value="10">Outubro</option>
                        <option value="11">Novembro</option>
		                <option value="12">Dezembro</option> 
                    </select>
		          <div class="box-input">
                    <label>Matricula:</label> 
		            <input class="input-matricula" type="text" name="matricula" SIZE=10 MAXLENGTH=10 />     
                    </div>
                </div>
                 <div class="box-btn">
                    <input class="btn-i "type="submit" value="GERAR FOLHA"/>     
                </div>
            </form>
            
                
              
		
            
        </div>
       
    </body>

</html>