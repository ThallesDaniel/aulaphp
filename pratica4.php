<?php

    //funções
    function frase() {

        echo "esta frse ta numma numma iei";


    }
    frase();

    echo '<br/>';



   //funções com argumentos
   
   function textos($nome, $jogo){

    echo "<h3> ME CHAMO $nome e jogo $jogo</h3>";
   
   }

   textos("antedueguemon", "FNAF");


   //contas


   function calc($a,$b){

    return $a * $b;

   }

   echo "o resultado da bagaça é; ". calc(30,20) ;

?>