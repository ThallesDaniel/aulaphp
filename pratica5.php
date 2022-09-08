<?php
 //arrays

    $carros=['opala', 'kombi', 'lancer', 'chevete', 'impala', 'skyline', 'delorian', 'batmovel'];
    //echo $carros [7];
    //echo count($carros);
    $dados = count ($carros);
    sort($carros);
    // rsort($carros);
        echo"<ul type = 'square'>";

    for($i = 0; $i < $dados; $i++){
        echo "<li>".$carros[$i]."</li>";
    }
        echo "</ul>"

?>