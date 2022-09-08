<?php

// arrays assossiaveis

$alunos = [
    "fabio" => "18", "laura" => "18", "carol" => "18",
    "henrique" => "18" , "mateus" => "18", "isaac" => "18",
    "Thalles" => "18"  
];

//echo $alunos["laura"];

//echo count($alunos);

$num = count($alunos);

echo "<table border='1' width='400'>
        <tr>
        <th>nome</th>
        <th>idade</th>
        </tr>" ;


foreach ($alunos as $nome => $idade) {
   
    echo "<tr align='center'>";
   
    echo "<td> $nome </td> <td> $idade </td>";

    echo "</tr>";
}

echo "</table>";
?>