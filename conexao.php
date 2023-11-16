<?php
// if (session_status() == PHP_SESSION_NONE) {
    // session_start(); // Inicie a sessão apenas se não estiver ativa
// }

class Conexao {
    private $host = 'localhost';
    private $usuario = 'root';
    private $senha = '';
    private $banco = 'usuario';
    private $conexao;

    public function __construct() {
        $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
        if ($this->conexao->connect_error) {
            die("Erro na conexão com o banco de dados: " . $this->conexao->connect_error);
        }
    }

    public function getConexao() {
        return $this->conexao;
    }

    public function fechar() {
        $this->conexao->close();
    }
}
?>