<?php
include "/../conf/conf.php";
include "/../lib/select.php";
include "/../lib/stampa.php";
echo "<form action='home.php' method='POST'>
query<input type='text' name='query'>
<input type='submit' values='spedisci'>
</form>";
$conn=new mysqli($db["servername"],$db["usermame"],$db["pass"],$db["nameDB"]);
$query=$_POST['query'];
stampa(select($conn,$query));

?>