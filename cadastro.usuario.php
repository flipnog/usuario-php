<?php
include 'conexao.php'; // Inclui o arquivo de conexão
include_once 'usuario.class.php';

$conexaoObj = new Conexao();
$conexao = $conexaoObj->getConexao();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclui a classe Usuario

   $nome = $_POST["nome"];
   $email = $_POST["email"];
   $senha = $_POST["senha"];

    // Criar uma instância da classe Usuario
    $usuario = new Usuario($nome,$email,$senha);

    // Chamar o método para inserir o aluno
    if ($usuario->salvar($conexao)) {
        echo "Usuário cadastrado com sucesso!";
         // Redirecione o usuário para a página de login
         header('Location: index.php');
        
    } else {
        echo "Erro ao cadastrar. Verifique os dados e tente novamente.";
    }
    
}

$conexao->close(); // Fecha a conexão com o banco de dados
?>