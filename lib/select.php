<?php
function select($conn,$query){
    echo $query;
    $rs="";
 if(!$conn->connect_error){
    $rs = $conn->query($query);
 }
 return $rs;
?>