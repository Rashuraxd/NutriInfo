<?php
    $nome =$_POST['nome'];
    $sobrenome =$_POST['sobrenome'];
    $endereco =$_POST['endereco'];
    $pais =$_POST['pais'];
    $estado =$_POST['estado'];
    $CEP =$_POST['CEP'];
    $senha =$_POST['senha'];

    $strcon = mysqli_connect("localhost","root","","NutriInfo") or die("Erro ao cadastrar");
    $sql = "INSERT INTO Usuario VALUES ('".$nome."', '".$sobrenome."' , '".$endereco."', '".$pais."' , '".$estado."' , '".$CEP."' , '".$senha."');";
    mysqli_query($strcon, $sql) or die ("Erro ao tentar cadastrar registro");
    echo "Cliente cadastrado com sucesso";

    ?>