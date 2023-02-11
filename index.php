<?php
require_once 'src/init.php';
if(isset($_POST['submit'])){
    $controller = new \src\Controller();

    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $tahunMasuk = $_POST['tahunMasuk'];
    $gajiPokok = $_POST['gajiPokok'];
    $indikator = $_POST['indikator'];
    $jabatan = $_POST['jabatan'];


    switch ($jabatan)
    {
        case "Satpam":
            $controller->Satpam($nip, $nama, $tahunMasuk, $gajiPokok, $indikator, $jabatan);
            break;
        case "Sales":
            $controller->Sales($nip, $nama, $tahunMasuk, $gajiPokok, $indikator, $jabatan);
            break;
        case "Administrasi":
            $controller->Administrasi($nip, $nama, $tahunMasuk, $gajiPokok, $indikator, $jabatan);
            break;
        case "Manajer":
            $controller->Manajer($nip, $nama, $tahunMasuk, $gajiPokok, $indikator, $jabatan);
            break;
        default:
            header("Location: " . BASE_URL);
            die;
    }

}
$app = new \src\App();