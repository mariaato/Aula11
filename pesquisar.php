<?php
    include("conexao.php");

    $pesquisar=$_POST['pesquisar'];

    $resultado="SELECT * FROM funcionario WHERE nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado_funcionario=mysqli_query($conexao, $resultado);

    while($rows_funcionario=mysqli_fetch_array($resultado_funcionario)){
        echo "Nome: ".$rows_funcionario['nome']."<br>";
        echo "CPF: ".$rows_funcionario['cpf']."<br>";
        echo "Endereço: ".$rows_funcionario['endereco']."<br>";
        echo "Cidade: ".$rows_funcionario['cidade']."<br>";
        echo "Estado: ".$rows_funcionario['estado']."<br>";
        echo "Formação: ".$rows_funcionario['formacao']."<br>";
        echo "Nivel Escolar: ".$rows_funcionario['nivelEscolar']."<br>";
        echo "<br>";
    }
?>