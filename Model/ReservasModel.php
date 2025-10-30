<?php


class ReservaModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function criarReserva($nome, $email, $checkin, $checkout, $quarto, $hospedes) {
        $sql = "INSERT INTO reservas (nome, email, checkin, checkout, quarto, hospedes) 
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssssi", $nome, $email, $checkin, $checkout, $quarto, $hospedes);
        return $stmt->execute();
    }
}
?>
