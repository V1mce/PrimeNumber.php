<?php
$numero = $_POST['numero'];
$count = 2;
while($count<=$numero){
    if ($numero % $count==0) {
    break;}
    else{
    $count++;}
}
if ($count=$numero){
    echo $numero.' Es primo';}      
else {
    echo $numero." No es primo";}        
        
?>
