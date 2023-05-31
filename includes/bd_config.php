<?php
class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "login_matrixgate";
    private $conn;

    public function __construct($servername, $username, $password, $database) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function conectar() {
        try {
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            return $this->conn;
        } catch (Exception $e) {
            die("Falha na conexão: " . $e->getMessage());
        }
    }

    public function fecharConexao() {
        $this->conn->close();
    }
}
?>

