
Aula 11 - Sistema de Cadastro Funcional - PHP
Rafael Novo da Rosa
•
Ontem (editado: 08:11)
100 pontos
Parte 01: Sistema de Cadastro de Funcionários
Parte 02: Sistema de Cadastro de Funcionários com LOGIN

Na parte 01 desta aula iremos testar um sistema de "Cadastro de Funcionários" que retoma os conteúdos abordados anteriormente: 
Formulário html
Insert/Delete/Select no PHP.

Na parte 02 temos a implementação do Login no Sistema de Cadastro. Arquivos em zip

Parte 01: Descrição do funcionamento do Sistema de Cadastro de Funcionários **********
Na página inicial temos os botões "Cadastrar Funcionario", "Pesquisar Funcionario", "Funcionarios Cadastrados" e "Deletar Funcionarios".

O botão "Cadastrar Funcionario" no index.html leva o user a uma página para cadastrar, ou seja, irá gravar os dados de cadastro digitados no BD. Note que temos um comando SQL de INSERT na linha 13 do arquivo php.
O botão "Pesquisar Funcionario" no index.html leva o user a uma página de pesquisar funcionários já cadastrados no BD. Note que temos um comando SQL de SELECT na linha 6 do arquivo php.

O botão "Funcionarios Cadastrados" no index.html mostra ao user os funcionarios cadastrados no BD. Note que temos um comando SQL de SELECT na linha 13 do arquivo php.

Por fim o botão "Deletar Funcionario" no index.html leva o user a uma página de exclusão de funcionários já cadastrados. A exclusão ocorre pelo CPF. Note que temos um comando SQL de DELETE na linha 15 do arquivo php.

Monte o projeto com os arquivos em anexo abaixo e teste o funcionamento do projeto.
Crie uma pasta Aula11 no htdocs contendo os arquivos abaixo.

Arquivos html:
index.html
cadastro_funcionario.html
pesquisar.html
deletar.html
Arquivos php:
cadastro_funcionario.php
conexao.php
deletar.php
pesquisar.php
select.php
Não esqueça de criar o banco de dados no phpMyAdmin.

Tarefa desta aula:
Criar os arquivos html e php disponibilizados, testar e apresentar o resultado no Navegador.
Não esqueça de ligar o Xampp e colocar seu projeto na pasta htdocs.
Parte 02: Sistema de Cadastro de Funcionários com LOGIN ****************
Zip em anexo com os arquivos do sistema de Cadastro com Login
Auxílio MySQL no PHP - Curso de PHP
Efetuando uma consulta no banco de dados MySQL: https://www.youtube.com/watch?v=OeWSl9y5N3E
PHP e MySQL: Como conectar e consultar o MySQL com PHP: https://www.homehost.com.br/blog/tutoriais/php/como-acessar-e-consultar-um-banco-mysql-usando-php/?authuser=1
Curso de PHP – Excluindo dados do Banco de Dados: http://www.bosontreinamentos.com.br/php-programming/curso-de-php-removendo-dados-do-banco-de-dados/?authuser=1

cadastro_funcionario.html
HTML

cadastro_funcionario.php
PHP

conexao.php
PHP

create table.jpg
Imagem

deletar.html
HTML

deletar.php
HTML

index.html
HTML

pesquisar.html
HTML

select.php
HTML

02-Sistema de Cadastro com Login.rar
Arquivo compactado
Comentários da turma
Seus trabalhos
Atribuído
Comentários particulares
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Funcionarios cadastrados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php 
        include("conexao.php");
        
        $sql="SELECT * FROM funcionario";
        $resultado=mysqli_query($conexao, $sql);

        if(mysqli_num_rows($resultado)>0){
            echo "<table class='table'>
                  <tr>
                  <th>CPF</th>
                  <th>Nome</th>
                  <th>Endereço</th>
                  <th>Cidade</th>
                  <th>Estado</th>
                  <th>Telefone</th>
                  <th>Formação</th>
                  <th>Nivel Escolar</th></tr>";
            while($row=mysqli_fetch_assoc($resultado)){
                echo "<tr><td>".$row['cpf']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['endereco']."</td>";
                echo "<td>".$row['cidade']."</td>";
                echo "<td>".$row['estado']."</td>";
                echo "<td>".$row['telefone']."</td>";
                echo "<td>".$row['formacao']."</td>";
                echo "<td>".$row['nivelEscolar']."</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo "Zero Resultado";
        }
        mysqli_close($conexao);
    ?>
</body>
</html>