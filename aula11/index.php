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
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        require_once 'Professor.php';
        require_once 'Tecnico.php';
        /*$v1 = new Visitante();
        $v1->setNome("Juvenal");
        $v1->setIdade("33");
        $v1->setSexo("M");
        print_r($v1);*/
        $a1 = new Aluno();
        $a1->setNome("Pedro");
        $a1->setIdade(16);
        $a1->setSexo("M");
        $a1->setMatricula(1111);
        $a1->setCurso("Informatica");
        $a1->pagarMensa();
        print_r($a1);
        echo '<hr/>';

        $b1 = new Bolsista();
        $b1->setMatricula(1122);
        $b1->setNome("Jubileu");
        $b1->setBolsa(12.5);
        $b1->setCurso("Administração");
        $b1->setIdade(17);
        $b1->pagarMensa();
        print_r($b1);
        echo '<hr/>';

        $p1 = new Professor();
        $p1->setNome("Guanabara");
        $p1->setidade(45);
        $p1->setSexo("M");
        $p1->setSalario(4450);
        $p1->setEspecialidade("T.I");
        $p1->receberAumento(400);
        print_r($p1);
        echo '<hr/>';

        $t1 = new Tecnico();
        $t1->setNome("Sarah");
        $t1->setIdade(19);
        $t1->setSexo("F");
        $t1->setMatricula(2424);
        $t1->setCurso("Informatica");
        $t1->pagarMensa();
        $t1->setRegistroProfissional("Web Developer");
        $t1->praticar();
        print_r($t1);
        ?>
    </pre>
</body>
</html>