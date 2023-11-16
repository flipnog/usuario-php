<?php
class Usuario {
    private $nome;
    private $email;
    private $senha;

    public function __construct($nome, $email, $senha) {
        $this->nome = $nome;
        $this->email = $email;
       $this->senha = ($senha);
    }

    // Método para salvar o usuário no banco de dados
    public function salvar($conexao) {
        // Inserir o usuário no banco de dados
        $sql = "INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?)";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("sss", $this->nome, $this->email, $this->senha);
        
        if ($stmt->execute()) {
            // O registro foi inserido com sucesso, retorne true
            return true;
        } else {
            // Ocorreu um erro ao inserir o registro, retorne false
            return false;
        }
    
        // $stmt->close();
    }
    
}
?>