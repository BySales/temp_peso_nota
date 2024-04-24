<?php 
$peso = $_POST['peso'];
$altura = 100/($_POST['altura']);
$imc = $peso/($altura*$altura);
if($imc <18.5 )
{
    echo "Abaixo do peso normal";
}
elseif($imc >= 18.5 && $imc<25){
    echo "Peso Ideal";
}
elseif ($imc >=25 && $imc<30){
    echo "Excesso de peso";
}
elseif ($imc >=30  && $imc<35){
    echo "Obesidade Classe I";
}
elseif ($imc >=35  && $imc<40){
    echo "Obesidade Classe II";
}
elseif ($imc >=40 ){
    echo "Obesidade Classe III";
}
?>