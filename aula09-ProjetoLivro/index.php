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
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        //nome,idade,sexo
        $p[0] = new Pessoa("Pedro", 22, "M");
        $p[1] = new Pessoa("Maria", 31, "F");
        //titulo, autor, totPaginas, leitor
        $l[0] = new Livro("PHP Basico", "Jose da Silva", 300, $p[0]);
        $l[1] = new Livro("POO com PHP", "Lucia de Souza", 500, $p[0]);
        $l[2] = new Livro("PHP avançado", "Ana Paula", 800, $p[1]);

        $l[0]->abrir();
        $l[0]->folhear(100);
        
        $l[0]->detalhes();
        $l[1]->detalhes();
        $l[2]->detalhes();

        ?>
    </pre>
</body>
</html>