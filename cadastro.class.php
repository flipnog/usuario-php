<?php
class Usuario {
    private $nome;
    private $descricao;
    private $preco;
    private $quantidade;

    public function __construct($nome, $descricao, $preco, $quantidade) {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
       $this->quantidade = ($quantidade);
    }

    // Método para salvar o usuário no banco de dados
    public function salvar($conexao) {
        // Inserir o usuário no banco de dados
        $sql = "INSERT INTO usuario (nome, descricao, preco, quantidade) VALUES (?, ?, ?)";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("sss", $this->nome, $this->descricao, $this->preco, $this->quantidade);
        
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