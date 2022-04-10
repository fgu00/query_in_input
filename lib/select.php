<?php
function eseguiQuery( $query, $connection){
    $res=$connection->query($query);
    return $res;
}
?>