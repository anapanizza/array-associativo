<?php

//Como se le? "Há um array chamado alunos com 3 posiçoes. Em cada uma das posiçoes há um
//array associativo com tres valor. As chaves do array associativo são: nome, dt_nasc
// e cidade. Cada par-valor é separado por virgulaas e para definir o valor de uma chave usa-se 
// o operador de associaçao:   =>
$alunos = array( array("nome" => "Gabriela", "dt-nasc" => "03/02/03", "cidade" => "mococa"), // i 0
                 array("nome" => "Agatha", "dt_nasc" => "22/10/2003", "cidade" => "mococa"), // i 1
                 array("nome" => "  Allysson", "dt_nasc" => "15/07/2003", "cidade" => "mococa"), // i 2
                 array("nome" => "Ana Xavier", "dt_nasc" => "09/10/2002", "cidade" => "Marte") // i 3
                );


//Come se le? "Acessandro o indice 1 do arry alunos. No indice 1 há outro array, um associativo
//onde há uma chave chamada nome e devera mostrar Agatha",
echo $alunos[1]['nome'];

// Navegando pelos indices do array no navegador: ex: http://localhost:8000?i=3
$indice = $_Get['i'];

// No exemplo acima de i=3 mostraria os dados da quarta posiçao do array (i = 3 )
echo $alunos[ $indice ]['nome'] . "<br />"; //mostraria Ana Xavier
echo $alunos[ $indice ]['dt_nasc'] . "<br />"; //mostraria 09/10/2002
echo $alunos[ $indice ]['cidade'] . "<br />"; //mostraria Marte


// olhe com var_dump para ver como a estrutura do array se comporta:
// var_dump($alunos);
?>