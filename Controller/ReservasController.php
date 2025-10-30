<?php


require_once __DIR__ . '/../model/ReservaModel.php';

class ReservaController {
    private $model;

    public function __construct($db) {
        $this->model = new ReservaModel($db);
    }

    public function processarReserva() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'] ?? '';
            $email = $_POST['email'] ?? '';
            $checkin = $_POST['checkin'] ?? '';
            $checkout = $_POST['checkout'] ?? '';
            $quarto = $_POST['quarto'] ?? '';
            $hospedes = $_POST['hospedes'] ?? 1;

            if ($this->model->criarReserva($nome, $email, $checkin, $checkout, $quarto, $hospedes)) {
                echo "<h3> Reserva realizada com sucesso!</h3>";
                echo "<p>Obrigado, $nome. Enviaremos a confirmação para $email.</p>";
            } else {
                echo "<h3> Erro ao processar a reserva.</h3>";
            }
        }
    }
}
?>
