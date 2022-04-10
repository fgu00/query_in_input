
<html>
<body>
    <h1>Inserisci la query da svolgere: </h1><br>
    <form method="post">
        <input type="text" name="query" placeholder="Inserisci la Query">
        <input type="submit" value="Invia">
    </form>
</body>
<?php
include 'conf/conf.php';
include 'lib/selectFunction.php';
include 'lib/printFunction.php';
    if(!empty($_POST)){
        $connection=new mysquli($data["nameDB"], $data["username"], $data["password"], $data["hostname"]);
        if($connection->connection_error){
            echo "Connessione non riuscita";
        }else{
            $res = eseguiQuery($_POST["query"], $connection);
            if($res == false){
                echo "Errore nell'esecuzione della query";
            }else{
                stampaRisultato($result);
            }
        }
    }
    }

?>
</html>
