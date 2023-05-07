<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        require_once 'Vizualizacao.php';
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML5");
        //nome, idade, sexo, login
        $g[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
        $g[1] = new Gafanhoto("Creuza", 12, "F", "creuzita");

       $vis[0] = new Vizualizacao($g[0], $v[2]);//jubileu assiste html5
       $vis[1] = new Vizualizacao($g[0], $v[1]);//jubileu assiste php

       $vis[0]->avaliar();
       $vis[1]->avaliarPorce(86);
    
       print_r($vis);
       

        ?>
    </pre>
</body>
</html>