<?php
$data = $_POST['txtdate'];


$ano_atual = date("Y");
$mes_atual = date("m"); 
$dia_atual = date("d");


$ano = substr($data,-10,-6);
$mes = substr($data,-5,-3);
$dia = substr($data, -2);


$idade = $ano_atual - $ano;
    
if($idade = 18 && $mes_atual >= $mes){
    if($dia_atual >= $dia){
        echo "aprovado";
    } else {
        echo "reprovado";
    }
} else if($idade > 18){
    echo "aprovado";
} else {
    echo "reprovado";
}

?>