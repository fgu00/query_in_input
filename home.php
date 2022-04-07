<?php
include "/../conf/conf.php";
include "/../lib/select.php";
include "/../lib/stampa.php";
echo "<form action='stampa.php' method='POST'>
query<input type='text' name='query'>
<input type='submit' values='spedisci'>
</form>";


?>