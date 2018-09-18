<!DOCTYPE HTML>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<link rel="stylesheet" type="text/css" href="css/index.css">

<title>Folha de Frequencia</title>
</head>

<?php
$MesCbq=$_POST["mes"];
$matri=$_POST["matricula"];

require_once "conectar.php";
include 'dia_semana.php'; include 'Feriados_anos.php';


if ($matri == "") {
   $res = mysqli_query($con,"SELECT * FROM `pessoa` ORDER by `lotacao`, -nome") or die ("Erro 2");
} else {
   $res = mysqli_query($con,"SELECT * FROM `pessoa` WHERE `matricula`=$matri") or die ("Erro 1");
}


//$res =(mysql_query("SELECT * FROM pessoa ORDER by lotacao, nome ASC")); 
//$res =(mysql_query("SELECT * FROM pessoa ORDER by nome")); 


while ($tb =  mysqli_fetch_array($res))
{

$matricula = $tb['matricula'];
$nome = $tb['nome'];
$lotacao = $tb['lotacao'];
$cargo = $tb['cargo'];
$Carga_Horaria = $tb['caghora'];




echo "<body>";
echo "<table id='cabecalho'>";
echo		"</tr>";
echo			"<td colspan='2' ><img src='http://redarterj.com/wp-content/uploads/2015/06/fundacao_rui_barbosa.jpg' id='centro' > </td>";
echo		"</tr>";
echo 		"<tr>";      
echo			"<td colspan='2' class='titulo'> FOLHA DE FREQUÊNCIA </td>";
echo		"</tr>";
echo		"<tr >";
echo    		"<td>Nome: <b> $nome</b> </td>";
echo    		"<td>Mes: <b>$mes_atual/$ano_atual</b></td>";
echo 		"</tr>";
echo		"<tr >";
echo    		"<td>Lotação: <b>$lotacao</b></td>";
echo			"<td>Cargo: <b>$cargo</b></td>";
echo  		"</tr>";
echo 		"<tr >";
echo 		   "<td>Carga Horária: <b> $Carga_Horaria</b> Horas Semanais</td>";
echo			"<td>Matrícula: <b>$matricula</b></tb>";
echo    	"</tr>";
echo  	"</table>";		

echo "<table id='corpo'>";
echo  "<tr id='status'>";
echo    "<td>DIA</td>";
echo    "<td>HORA DE ENTRADA</td>";
echo	"<td>HORA DE SAIDA</td>";
echo	"<td>HORA DE ENTRADA</td>";
echo    "<td>HORA DE SAIDA</td>";
echo    "<td>RUBRICA</td>";
echo    "<td>OCORRENCIA</td>";
echo    "<td>ABONO DA CHEFIA IMEDIATA</td>";
echo  "</tr>";

for($z=1;$z<=$time_left;$z++){

if($z==1)
$z="01";
if($z==2)
$z="02";
if($z==3)
$z="03";
if($z==4)
$z="04";
if($z==5)
$z="05";
if($z==6)
$z="06";
if($z==7)
$z="07";
if($z==8)
$z="08";
if($z==9)
$z="09";

$semana_nomeada[$z]  = date("l", mktime(0, 0, 0, $mes, $z, $ano_atual));
$bgcolor[$z]="FFFFFF";
$aterisco[$z]="&nbsp;";

$sendo_agora = date ("$z/$mes/$ano_atual");

if($semana_nomeada[$z]=="Saturday"){
$sabado_domingo = "<b>S&aacute;bado</b>";
$bgcolor[$z]="CCCCCC";
$aterisco[$z]="**********";
}
elseif($semana_nomeada[$z]=="Sunday"){
$sabado_domingo = "<b>Domingo</b>";
$bgcolor[$z]="CCCCCC";
$aterisco[$z]="**********";
}
else
$sabado_domingo = "&nbsp;";

if($confraternizacao == $sendo_agora){
$sabado_domingo = "<b>Feriado - Confrateniza&ccedil;&atilde;o</b>";
$bgcolor[$z]="CCCCCC";
$aterisco[$z]="**********";
}
elseif($carnaval == $sendo_agora){
$sabado_domingo = "<b>Feriado - Carnaval</b>";
$bgcolor[$z]="CCCCCC";
$aterisco[$z]="**********";
}
elseif($sexta_santa == $sendo_agora){
$sabado_domingo = "<b>Feriado - Sexta-Feira Santa</b>";
$bgcolor[$z]="CCCCCC";
$aterisco[$z]="**********";
}
elseif($corpus == $sendo_agora){
$sabado_domingo = "<b>Feriado - Corpus Christi</b>";
$bgcolor[$z]="CCCCCC";
$aterisco[$z]="**********";
}
elseif($tiradentes == $sendo_agora){
$sabado_domingo = "<b>Feriado - Tiradentes</b>";
$bgcolor[$z]="CCCCCC";
$aterisco[$z]="**********";
}
elseif($trabalhador == $sendo_agora){
$sabado_domingo = "<b>Feriado - Dia do Trabalhador</b>";
$bgcolor[$z]="CCCCCC";
$aterisco[$z]="**********";
}
elseif($independencia == $sendo_agora){
$sabado_domingo = "<b>Feriado - Independêcia</b>";
$bgcolor[$z]="CCCCCC";
$aterisco[$z]="**********";
}
elseif($nsaparecida == $sendo_agora){
$sabado_domingo = "<b>Feriado - N. S. Aparecida</b>";
$bgcolor[$z]="CCCCCC";
$aterisco[$z]="**********";
}
elseif($finados == $sendo_agora){
$sabado_domingo = "<b>Feriado - Dia de Finados</b>";
$bgcolor[$z]="CCCCCC";
$aterisco[$z]="**********";
}
elseif($replublica == $sendo_agora){
$sabado_domingo = "<b>Feriado - Procl. da Rep</b>";
$bgcolor[$z]="CCCCCC";
$aterisco[$z]="**********";
}
elseif($dia_sao_jorge == $sendo_agora){
$sabado_domingo = "<b>Feriado - Dia de São Jorge</b>";
$bgcolor[$z]="CCCCCC";
$aterisco[$z]="**********";
}
elseif($natal == $sendo_agora){
$sabado_domingo = "<b>Feriado - Natal</b>";
$bgcolor[$z]="CCCCCC";
$aterisco[$z]="**********";
}
elseif($dia_serv_publico == $sendo_agora){
$sabado_domingo = "<b>Fer. Dia Servidor Público</b>";
$bgcolor[$z]="CCCCCC";
$aterisco[$z]="**********";
}
elseif($dia_sao_sebastiao == $sendo_agora){
$sabado_domingo = "<b>Fer. Dia São Sebastião</b>";
$bgcolor[$z]="CCCCCC";
$aterisco[$z]="**********";
}
elseif($dia_conci_negra == $sendo_agora){
$sabado_domingo = "<b>Fer. Dia da Conciência Negra</b>";
$bgcolor[$z]="CCCCCC";
$aterisco[$z]="**********";
}

  echo"<tr>
		<td bgcolor=\"#$bgcolor[$z]\">$z</td>
		<td bgcolor=\"#$bgcolor[$z]\">$aterisco[$z]</td>
		<td bgcolor=\"#$bgcolor[$z]\">$aterisco[$z]</td>
		<td bgcolor=\"#$bgcolor[$z]\">$aterisco[$z]</td>
		<td bgcolor=\"#$bgcolor[$z]\">$aterisco[$z]</td>
		<td bgcolor=\"#$bgcolor[$z]\">$sabado_domingo</td>
		<td bgcolor=\"#$bgcolor[$z]\">$aterisco[$z]</td>
		<td bgcolor=\"#$bgcolor[$z]\">$aterisco[$z]</td>
	  </tr>" ;
  }

echo "</table>";

echo "<table id='rodape'>";
echo  	"<tr >";
echo    	"<td class='soma' colspan='2'>Somatório de ausências, atrasos e saídas antecipadas não justificadas: __________________</td>";
echo  	"</tr>";
echo  	"<tr>";
echo  	"</tr>";
echo  	"<tr>";
echo    	"<td>Data: ____/____/____</td>";
echo  	"</tr>";
echo 	"<tr>";
echo 	"<tr>";
echo 	"<tr>";
echo 	"<tr>";
echo  	"</tr>";
echo  	"<tr id='assina'>";
echo    	"<td ><div align='center'>______________________________________________</div></td>";
echo    	"<td ><div align='center'> _____________________________________________</div></td>";
echo 	"<tr>";
echo  	"<tr id='assina1'>";
echo    	"<td>$nome</td>";
echo    	"<td>Visto da Chefia Imediata</td>";
echo  	"</tr>";
echo "</tablet>";
echo "</body>";
}
?>
</html>
