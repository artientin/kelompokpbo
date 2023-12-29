<?php
include 'config.php';

class KontakHandler {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function handleFormSubmission($data) {
        $this->insertIntoKontak($data);
        echo "<script>alert('Request call back telah dikirim')</script>";
    }

    private function insertIntoKontak($data) {
        $query = "INSERT INTO kontak SET
            nama = '{$data['nama']}',
            email = '{$data['email']}',
            telpon = '{$data['telpon']}',
            pesan = '{$data['pesan']}'";

        mysqli_query($this->conn, $query);
    }
}

if (isset($_POST['kirim'])) {
    $kontakHandler = new KontakHandler($conn);

    $formData = array(
        'nama' => $_POST['nama'],
        'email' => $_POST['email'],
        'telpon' => $_POST['telpon'],
        'pesan' => $_POST['pesan']
    );

    $kontakHandler->handleFormSubmission($formData);
}
?>