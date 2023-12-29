<?php
include 'config.php';

interface PengaduanInterface { //
    public function insertData($data);//interfacenya polimorphism untuk mendefinisikan satu atau lebih metode 
}

class Pengadu implements PengaduanInterface {//ada konsep oop Claass (kelas induk)
    protected $conn;//encapsulasi karena hanya dapat diakses oleh kelas induk dan juga kelas turunan(terbungkus)

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function insertData($data)
    {
        $query = "INSERT INTO pengadu SET
            nama = '{$data['nama']}',
            jenis_kelamin = '{$data['jenis_kelamin']}',
            tipe_identitas = '{$data['tipe_identitas']}',
            nomor_identitas = '{$data['nomor_identitas']}',
            file_identitas = '{$data['file_identitas']}',
            domisili = '{$data['domisili']}',
            nomor_telpon = '{$data['nomor_telpon']}',
            nomor_fax = '{$data['nomor_fax']}',
            email = '{$data['email']}'";

        mysqli_query($this->conn, $query);
    }
}

class Kejadian extends Pengadu implements PengaduanInterface {
    public function insertData($data) // polimorphism karena sama method dan beda perlakuan atau akan masuk ke class kejadian
    {
        $query = "INSERT INTO kejadian SET
            perihal = '{$data['perihal']}',
            lokasi = '{$data['lokasi']}',
            tanggal = '{$data['tanggal']}',
            harapan = '{$data['harapan']}',
            file_pendukung = '{$data['file_pendukung']}'";

        mysqli_query($this->conn, $query);
    }
}

class PengaduanHandler {
    public function createPengaduan(PengaduanInterface $pengaduanObj, $data)
    {
        $pengaduanObj->insertData($data);// polimorphism karena sama method dan beda perlakuan atau akan masuk ke class pengaduan
        echo "<script>alert('Berhasil Membuat Pengaduan')</script>";
    }
}

if (isset($_POST['buat'])) {
    $pengaduanHandler = new PengaduanHandler();//objek

    $pengaduData = array(
        'nama' => $_POST['nama'],
        'jenis_kelamin' => $_POST['jenis_kelamin'],
        'tipe_identitas' => $_POST['tipe_identitas'],
        'nomor_identitas' => $_POST['nomor_identitas'],
        'file_identitas' => $_POST['file_identitas'],
        'domisili' => $_POST['domisili'],
        'nomor_telpon' => $_POST['nomor_telpon'],
        'nomor_fax' => $_POST['nomor_fax'],
        'email' => $_POST['email']
    );

    $kejadianData = array(
        'perihal' => $_POST['perihal'],
        'lokasi' => $_POST['lokasi'],
        'tanggal' => $_POST['tanggal'],
        'harapan' => $_POST['harapan'],
        'file_pendukung' => $_POST['file_pendukung']
    );

    // Membuat objek untuk Pengadu
    $pengadu = new Pengadu($conn);
    $pengaduanHandler->createPengaduan($pengadu, $pengaduData);

    // Membuat objek untuk Kejadian
    $kejadian = new Kejadian($conn);
    $pengaduanHandler->createPengaduan($kejadian, $kejadianData);
}
?>
