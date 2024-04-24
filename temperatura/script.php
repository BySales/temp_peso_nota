<?php 
$temp = $_POST['temperatura'];
if($temp<0){
echo "Congelante";
}
elseif($temp >=0 && $temp<15){
    echo "Muito Frio";
}

elseif($temp>=15 && $temp<25){
    echo "Razoável";
}
elseif($temp>=25){
    echo "Calor";
}
?>