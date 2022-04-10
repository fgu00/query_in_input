<?php
function stampaRisultato( $res){
        if($res == true){
            print("Query eseguita, risultato = True")
        }else{
            echo "<table>";
            while($riga = $result -> fetch_assoc()) {
                echo "<tr>";
                foreach($riga as $key => $val) {
                    echo "<td>" . $val . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
?>