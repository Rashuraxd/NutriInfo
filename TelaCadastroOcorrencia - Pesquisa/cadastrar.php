<?php
    $nomeFuncionario =$_POST['nomeFuncionario'];
    $turno =$_POST['turno'];
    $cargo =$_POST['cargo'];
    $ocorrencia =$_POST['ocorrencia'];
    $dataOcorrencia =$_POST['dataOcorrencia'];
    
    $strcon = mysqli_connect("localhost","root","","nutrinfo") or die("Erro ao cadastrar");
    $sql = "INSERT INTO ocorrencia VALUES ('".$nomeFuncionario."', '".$turno."' , '".$cargo."', '".$ocorrencia."' , '".$dataOcorrencia."');";
    mysqli_query($strcon, $sql) or die ("Erro ao tentar cadastrar registro");
    echo "Ocorrência cadastrado com sucesso";

    ?>