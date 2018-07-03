<?php

if($ano_atual >=1582 and $ano_atual <=1599){
$x= 22;
$y= 2;
}
if($ano_atual >=1600 and $ano_atual <= 1699){
$x= 22;
$y= 2;
}
if($ano_atual >=1700 and $ano_atual <= 1799){
$x= 23;
$y= 3;
}
if($ano_atual >=1800 and $ano_atual <= 1899){
$x= 24;
$y= 4;
}
if($ano_atual >=1900 and $ano_atual <= 1999){
$x= 24 ;
$y=5;
}
if($ano_atual >=2000 and $ano_atual <= 2099){
$x= 24;
$y=5;
}
if($ano_atual >=2100 and $ano_atual <= 2199){
$x= 24;
$y= 6;
}
if($ano_atual >=2200 and $ano_atual <= 2299){
$x= 25;
$y=7;
}

$a = $ano_atual % 19;
$b =  $ano_atual % 4;
$c = $ano_atual % 7;
$d = (((19*$a)+$x) % 30);
$e =(((2*$b)+(4*$c)+(6*$d)+$y)%7);

if(($d+$e)<10){
$dia_de_hoje = ($d+$e+22);
$mes_now = 3;
}
else{
$dia_de_hoje = ($d+$e-9);
$mes_now = 4;
}

if($dia_de_hoje==26 && $mes_now==4){
$dia_de_hoje=19;
}

if($dia_de_hoje==25 && $mes_now==4){
$dia_de_hoje=18;
}



function SomarData($data2, $dia_de_hoje2, $mes_nowe2, $oano2)
{
   
   $data2 = explode("/", $data2);
   $newData2 = date("d/m/Y", mktime(0, 0, 0, $data2[1] + $mes_nowe2, $data2[0] + $dia_de_hoje2, $data2[2] + $oano2) );
   return $newData2;
}

function SubtrairData($data3, $dia_de_hoje3, $mes_nowe3, $oano3)
{
   
   $data3 = explode("/", $data3);
   $newData3 = date("d/m/Y", mktime(0, 0, 0, $data3[1] - $mes_nowe3, $data3[0] - $dia_de_hoje3, $data3[2] - $oano3) );
   return $newData3;
}

$data_pascoa = date("$dia_de_hoje/$mes_now/$ano_atual");

$carnaval = SubtrairData("$data_pascoa", 47, 0, 0);
$carnaval = date($carnaval);

$sexta_santa = SubtrairData("$data_pascoa", 2, 0, 0);

$corpus =SomarData("$data_pascoa", 60, 0, 0);

$confraternizacao = date ("01/01/$ano_atual");    
$tiradentes = date ("21/04/$ano_atual"); 
$trabalhador = date ("01/05/$ano_atual"); 
$independencia = date ("07/09/$ano_atual");
$nsaparecida = date ("12/10/$ano_atual");   
$finados = date ("02/11/$ano_atual");     
$replublica = date ("15/11/$ano_atual"); 
$dia_sao_jorge = date ("23/04/$ano_atual");
$dia_serv_publico = date("28/10/$ano_atual");
$dia_sao_sebastiao = date("20/01/$ano_atual");
$dia_conci_negra = date("20/11/$ano_atual");



$natal = date ("25/12/$ano_atual"); 

?>

