<?php
$query=$_POST['query'];
include "/../conf/conf.php";
$conn=getPOST("russo.salvatore.tave.osdb.it","c190_salvo","","c190_primo");
if($conn->connect_error){
    die('connessione fallita : '.$conn->connect_error);   
}else{
    echo 'conessione riuscita'; 
}
?>