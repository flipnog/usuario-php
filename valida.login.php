<?php
session_start(); // Inicie a sessão

include_once 'conexao.php'; // Inclua o arquivo de conexão com o banco de dados

$conexao = new Conexao(); // Crie uma instância da classe Conexao

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Consulta para obter a senha armazenada no banco de dados
    $sql = "SELECT senha FROM usuario WHERE email = ?";
    $stmt = $conexao->getConexao()->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($senha);
    $stmt->fetch();
    $stmt->close();

    if (isset($senha) && isset($email)) {
        // Senha correta, permita o acesso ao usuário

        // Armazene informações do usuário na sessão
        $_SESSION['email'] = $email;

        // Redirecione o usuário para a página desejada (index.php na pasta "aluno")
        //header('Location: aluno/cadastrar.aluno.php');
        echo "Cadastrado/Logado com sucesso.";
        exit(); // Certifique-se de sair após o redirecionamento
    } else {
        // Senha incorreta, negue o acesso ao usuário
        echo "Senha incorreta. Tente novamente.";
    }
}

$conexao->fechar(); // Feche a conexão com o banco de dados
?>