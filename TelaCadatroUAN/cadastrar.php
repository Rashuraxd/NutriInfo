<?php
    $nomeFantasiaUAN =$_POST['nomeFantasiaUAN'];
    $razaoSocialUAN =$_POST['razaoSocialUAN'];
    $CNPJUAN =$_POST['CNPJUAN'];
    $telefoneUAN =$_POST['telefoneUAN'];
    $enderecoUAN =$_POST['enderecoUAN'];
    $bairroUAN =$_POST['bairroUAN'];
    $cidadeUAN =$_POST['cidadeUAN'];
    $estadoUAN =$_POST['estadoUAN'];
    $emailUAN =$_POST['emailUAN'];
    $dataCardapioUAN =$_POST['dataCardapioUAN'];
    $dataProtocoloUAN =$_POST['dataProtocoloUAN'];

    $strcon = mysqli_connect("localhost","root","","NutriInfo") or die("Erro ao cadastrar");
    $sql = "INSERT INTO UAN VALUES ('".$nomeFantasiaUAN."', '".$razaoSocialUAN."' , '".$CNPJUAN."', '".$telefoneUAN."' , '".$enderecoUAN."' , '".$bairroUAN."' , '".$cidadeUAN."' , '".$estadoUAN."' , '".$emailUAN."' , '".$dataCardapioUAN."' , '".$dataProtocoloUAN."');";
    mysqli_query($strcon, $sql) or die ("Erro ao tentar cadastrar registro");
    echo "Cliente cadastrado com sucesso";

    ?>