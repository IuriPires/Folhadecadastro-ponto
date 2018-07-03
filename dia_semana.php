<?php
ini_set('default_charset','UTF-8');

$dia_semana = date("l"); 
if($dia_semana == "Monday")
$dia_semana = "Segunda";
if($dia_semana == "Tuesday")
$dia_semana = "Terça";
if($dia_semana == "Wednesday")
$dia_semana = "Quarta";
if($dia_semana == "Thursday")
$dia_semana = "Quinta";
if($dia_semana == "Friday")
$dia_semana = "Sexta";
if($dia_semana == "Saturday")
$dia_semana = "Sábado";
if($dia_semana == "Sunday")
$dia_semana = "Domingo";

$ano_atual = date("Y");
//$ano_atual = "2017";

$mes_atual = $MesCbq;
//$mes_atual = date("m");

$mes = $MesCbq;
//$mes = date("m");

//$Carga_Horaria = $linha ['caghora'];
//$nome = $linha ['nome'];
//$lotacao = $linha ['lotacao'];
//$matricula = $linha ['matricula'];


if($mes_atual == "01"){
$mes_atual = "Janeiro";
$time_left = 31;
}


$bisexto = date("y");
if($mes_atual == "02"){
$mes_atual = "Fevereiro";
if ((($bisexto % 4) == 0 and ($bisexto % 100)!=0) or ($bisexto % 400)==0){
$time_left = 29;
}
else{
$time_left = 28;
}
}

if($mes_atual == "03"){
$mes_atual = "Março";
$time_left = 31;
}
if($mes_atual == "04"){
$mes_atual = "Abril";
$time_left = 30;
}
if($mes_atual == "05"){
$mes_atual = "Maio";
$time_left = 31;
}
if($mes_atual == "06"){
$mes_atual = "Junho";
$time_left = 30;
}
if($mes_atual == "07"){
$mes_atual = "Julho";
$time_left = 31;
}
if($mes_atual == "08"){
$mes_atual = "Agosto";
$time_left = 31;
}
if($mes_atual == "09"){
$mes_atual = "Setembro";
$time_left = 30;
}
if($mes_atual == "10"){
$mes_atual = "Outubro";
$time_left = 31;
}
if($mes_atual == "11"){
$mes_atual = "Novembro";
$time_left = 30;
}
if($mes_atual == "12"){
$mes_atual = "Dezembro";
$time_left = 31;

}
?>