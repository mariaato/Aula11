<?php
    include("conexao.php");

    $cpf=$_POST['cpf'];
    $nome=$_POST['nome'];
    $endereco=$_POST['endereco'];
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
    $telefone=$_POST['telefone'];
    $formacao=$_POST['formacao'];
    $nivelEscolar=$_POST['nivelEscolar'];

    $sql="INSERT INTO funcionario (cpf, nome, endereco, cidade, estado, telefone, formacao, nivelEscolar)
        VALUES ('$cpf', '$nome', '$endereco', '$cidade', '$estado', '$telefone', '$formacao', '$nivelEscolar')";
    if(mysqli_query($conexao, $sql)){
        echo "<h1>Funcionario cadastrado com sucesso</h1>";
        echo "<a href='cadastro_funcionario.html'>Cadastrar novo Funcionario?</a><br>";
        echo "<a href='index.html'>Página inicial</a>";
    }
    else{
        echo "Error: ".$sql."<br>".mysqli_error($conexao);
    }
    mysqli_close($conexao);
?>