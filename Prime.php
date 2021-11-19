<?php
$numero = $_POST['numero'];
$count = 2;
$primo=0;
while($count<=$numero/2 && $primo==0){
    if ($numero % $count==0) {
    $primo=1;}
    else{
    $count++;}
}
if ($primo==0){
    echo $numero.' Es primo';}      
else {
    echo $numero." No es primo";}        
        
?>
